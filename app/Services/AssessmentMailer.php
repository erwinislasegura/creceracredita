<?php
namespace App\Services;

use App\Models\EmailConfiguration;

class AssessmentMailer
{
    private const CONTACT_PHONE = '+56 9 2181 6236';
    private const CONTACT_ADDRESS = 'Las Condes Santiago – Chile';
    private const SMTP_TIMEOUT = 6;

    public function send(array $lead, array $result): bool
    {
        $config = new EmailConfiguration;
        $settings = $config->settings();
        $template = $config->template($this->riskKey((float)$result['final_score']));
        $leadRecipient = $this->sanitizeEmail((string)($lead['email'] ?? ''));
        if ($leadRecipient === '') return false;

        $fromEmail = $this->sanitizeEmail((string)$settings['assessment_from_email']) ?: 'contacto@creceracredita.cl';
        $fromName = $this->cleanHeader((string)$settings['assessment_from_name']);
        $replyTo = $this->sanitizeEmail((string)$settings['assessment_reply_to']) ?: $fromEmail;
        $internalRecipients = $this->sanitizeEmailList((string)$settings['assessment_internal_recipients']);
        $bccRecipients = $internalRecipients !== '' ? explode(', ', $internalRecipients) : [];
        $subject = $this->replaceTokens((string)$template['subject'], $lead, $result, $fromEmail);
        $html = $this->replaceTokens((string)$template['html_body'], $lead, $result, $fromEmail);
        $text = trim(strip_tags(str_replace(['</p>', '</li>', '<br>', '<br/>', '<br />'], "\n", $html)));
        $boundary = 'crecer_' . bin2hex(random_bytes(12));
        $message = "--{$boundary}\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n{$text}\r\n\r\n";
        $message .= "--{$boundary}\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n{$html}\r\n\r\n--{$boundary}--";
        $host = trim((string)($settings['assessment_mail_host'] ?? ''));

        if ($host !== '') {
            $sent = $this->sendViaServer($settings, $fromEmail, $fromName, $replyTo, $leadRecipient, $bccRecipients, $subject, $message, $boundary);
            if ($sent) return true;
            error_log('Assessment SMTP delivery failed; retrying with PHP mail().');
        }

        return $this->sendWithPhpMail($fromEmail, $fromName, $replyTo, $leadRecipient, $bccRecipients, $subject, $message, $boundary);
    }


    private function sendWithPhpMail(string $fromEmail, string $fromName, string $replyTo, string $leadRecipient, array $bccRecipients, string $subject, string $message, string $boundary): bool
    {
        $headers = [
            'MIME-Version: 1.0',
            'Content-Type: multipart/alternative; boundary="' . $boundary . '"',
            'From: ' . $fromName . ' <' . $fromEmail . '>',
            'To: <' . $leadRecipient . '>',
            'Reply-To: ' . $replyTo,
            'X-Mailer: PHP/' . phpversion(),
        ];
        if (!empty($bccRecipients)) {
            $headers[] = 'Bcc: ' . implode(', ', $bccRecipients);
        }

        $allRecipients = array_values(array_unique(array_merge([$leadRecipient], $bccRecipients)));
        return mail(implode(', ', $allRecipients), $this->encodeSubject($subject), $message, implode("\r\n", $headers));
    }

    private function sendViaServer(array $settings, string $fromEmail, string $fromName, string $replyTo, string $visibleTo, array $bccRecipients, string $subject, string $body, string $boundary): bool
    {
        $host = trim((string)$settings['assessment_mail_host']);
        $port = (int)($settings['assessment_mail_port'] ?: 587);
        $encryption = strtolower((string)($settings['assessment_mail_encryption'] ?? 'tls'));
        $username = trim((string)($settings['assessment_mail_username'] ?? ''));
        $password = (string)($settings['assessment_mail_password'] ?? '');
        $remote = $encryption === 'ssl' ? 'ssl://' . $host : $host;
        $socket = @fsockopen($remote, $port, $errno, $errstr, self::SMTP_TIMEOUT);
        if (!$socket) {
            error_log("Assessment SMTP connection error: {$errno} {$errstr}");
            return false;
        }
        stream_set_timeout($socket, self::SMTP_TIMEOUT);

        $ok = $this->expect($socket, [220]);
        $ok = $ok && $this->command($socket, 'EHLO ' . $this->smtpName(), [250]);
        if ($ok && $encryption === 'tls') {
            $ok = $this->command($socket, 'STARTTLS', [220]);
            if ($ok) {
                $crypto = STREAM_CRYPTO_METHOD_TLS_CLIENT;
                if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) $crypto |= STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
                if (defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT')) $crypto |= STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;
                $ok = @stream_socket_enable_crypto($socket, true, $crypto);
                $ok = $ok && $this->command($socket, 'EHLO ' . $this->smtpName(), [250]);
            }
        }
        if ($ok && $username !== '' && $password !== '') {
            $ok = $this->command($socket, 'AUTH LOGIN', [334]);
            $ok = $ok && $this->command($socket, base64_encode($username), [334]);
            $ok = $ok && $this->command($socket, base64_encode($password), [235]);
        }
        $ok = $ok && $this->command($socket, 'MAIL FROM:<' . $fromEmail . '>', [250]);
        $acceptedRecipients = [];
        $recipients = array_values(array_unique(array_filter(array_merge([$visibleTo], $bccRecipients))));
        if ($ok) {
            foreach ($recipients as $recipient) {
                if ($this->command($socket, 'RCPT TO:<' . $recipient . '>', [250, 251])) {
                    $acceptedRecipients[] = $recipient;
                }
            }
        }
        $ok = $ok && !empty($acceptedRecipients);
        $headers = [
            'MIME-Version: 1.0',
            'Content-Type: multipart/alternative; boundary="' . $boundary . '"',
            'From: ' . $fromName . ' <' . $fromEmail . '>',
            'To: <' . $visibleTo . '>',
            'Reply-To: ' . $replyTo,
            'Subject: ' . $this->encodeSubject($subject),
            'Date: ' . date(DATE_RFC2822),
        ];
        $data = implode("\r\n", $headers) . "\r\n\r\n" . $body;
        $data = preg_replace('/^\./m', '..', $data);
        $ok = $ok && $this->command($socket, 'DATA', [354]);
        $ok = $ok && $this->command($socket, $data . "\r\n.", [250]);
        $this->command($socket, 'QUIT', [221]);
        fclose($socket);
        return (bool)$ok;
    }

    private function smtpName(): string
    {
        $host = trim((string)($_SERVER['HTTP_HOST'] ?? 'localhost'));
        return preg_replace('/[^A-Za-z0-9.-]/', '', $host) ?: 'localhost';
    }

    private function command($socket, string $command, array $codes): bool
    {
        fwrite($socket, $command . "\r\n");
        return $this->expect($socket, $codes);
    }

    private function expect($socket, array $codes): bool
    {
        $response = '';
        while (($line = fgets($socket, 515)) !== false) {
            $response .= $line;
            if (preg_match('/^\d{3} /', $line)) {
                break;
            }
        }
        $code = (int)substr($response, 0, 3);
        if (!in_array($code, $codes, true)) {
            error_log('Assessment mail server response error: ' . trim($response));
            return false;
        }
        return true;
    }

    private function riskKey(float $score): string
    {
        if ($score >= 85) return 'low';
        if ($score >= 60) return 'medium';
        return 'high';
    }

    private function replaceTokens(string $content, array $lead, array $result, string $contactEmail): string
    {
        $tokens = [
            '{{contact_name}}' => $this->h($lead['contact_name'] ?? ''),
            '{{company_name}}' => $this->h($lead['company_name'] ?? ''),
            '{{date}}' => date('d/m/Y'),
            '{{score}}' => $this->h((string)($result['final_score'] ?? '')),
            '{{risk_level}}' => $this->h((string)($result['risk_level'] ?? '')),
            '{{recommendation}}' => $this->h((string)($result['recommendation'] ?? '')),
            '{{contact_email}}' => $this->h($contactEmail),
            '{{contact_phone}}' => self::CONTACT_PHONE,
            '{{contact_address}}' => self::CONTACT_ADDRESS,
            '{{whatsapp_url}}' => 'https://wa.me/56921816236',
            '{{maps_url}}' => 'https://www.google.com/maps/search/?api=1&query=Las+Condes+Santiago+Chile',
            '{{logo_url}}' => $this->absoluteUrl('logo/logo.png'),
            '{{seal_url}}' => $this->absoluteUrl('sello-crecer.php#sello'),
        ];
        return strtr($content, $tokens);
    }

    private function absoluteUrl(string $path): string
    {
        $configured = function_exists('config') ? rtrim(config('app')['url'], '/') : '';
        if ($configured !== '') return $configured . '/' . ltrim($path, '/');
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'creceracredita.cl';
        return $scheme . '://' . $host . '/' . ltrim($path, '/');
    }

    private function sanitizeEmail(string $email): string
    {
        $email = trim(str_replace(["\r", "\n"], '', $email));
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';
    }

    private function sanitizeEmailList(string $emails): string
    {
        $valid = [];
        foreach (preg_split('/[,;\s]+/', $emails) ?: [] as $email) {
            $email = $this->sanitizeEmail($email);
            if ($email !== '') $valid[] = $email;
        }
        return implode(', ', array_unique($valid));
    }

    private function cleanHeader(string $value): string
    {
        $value = trim(str_replace(["\r", "\n"], '', $value));
        return $value !== '' ? $value : 'Crecer Acredita';
    }

    private function encodeSubject(string $subject): string
    {
        return '=?UTF-8?B?' . base64_encode($subject) . '?=';
    }

    private function h(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
