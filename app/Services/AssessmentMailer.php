<?php
namespace App\Services;

use App\Models\EmailConfiguration;

class AssessmentMailer
{
    private const CONTACT_PHONE = '+56 9 2181 6236';
    private const CONTACT_ADDRESS = 'Las Condes Santiago – Chile';

    public function send(array $lead, array $result): bool
    {
        $config = new EmailConfiguration;
        $settings = $config->settings();
        $template = $config->template($this->riskKey((float)$result['final_score']));
        $to = $this->sanitizeEmail((string)($lead['email'] ?? ''));
        if ($to === '') return false;

        $fromEmail = $this->sanitizeEmail((string)$settings['assessment_from_email']) ?: 'contacto@creceracredita.cl';
        $fromName = $this->cleanHeader((string)$settings['assessment_from_name']);
        $replyTo = $this->sanitizeEmail((string)$settings['assessment_reply_to']) ?: $fromEmail;
        $internalRecipients = $this->sanitizeEmailList((string)$settings['assessment_internal_recipients']);
        $subject = $this->replaceTokens((string)$template['subject'], $lead, $result, $fromEmail);
        $html = $this->replaceTokens((string)$template['html_body'], $lead, $result, $fromEmail);
        $text = trim(strip_tags(str_replace(['</p>', '</li>', '<br>', '<br/>', '<br />'], "\n", $html)));
        $boundary = 'crecer_' . bin2hex(random_bytes(12));

        $headers = [
            'MIME-Version: 1.0',
            'Content-Type: multipart/alternative; boundary="' . $boundary . '"',
            'From: ' . $fromName . ' <' . $fromEmail . '>',
            'Reply-To: ' . $replyTo,
            'X-Mailer: PHP/' . phpversion(),
        ];
        if ($internalRecipients !== '') {
            $headers[] = 'Bcc: ' . $internalRecipients;
        }

        $message = "--{$boundary}\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n{$text}\r\n\r\n";
        $message .= "--{$boundary}\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n\r\n{$html}\r\n\r\n--{$boundary}--";

        return mail($to, $this->encodeSubject($subject), $message, implode("\r\n", $headers));
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
