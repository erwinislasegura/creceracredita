<?php
namespace App\Models;

class EmailConfiguration extends Model
{
    private array $defaultSettings = [
        'assessment_from_name' => 'Crecer Acredita',
        'assessment_from_email' => 'contacto@creceracredita.cl',
        'assessment_reply_to' => 'contacto@creceracredita.cl',
        'assessment_internal_recipients' => 'contacto@creceracredita.cl, erwin.2785@gmail.com',
        'assessment_mail_protocol' => 'imap',
        'assessment_mail_host' => '',
        'assessment_mail_port' => '993',
        'assessment_mail_encryption' => 'ssl',
        'assessment_mail_username' => '',
        'assessment_mail_password' => '',
    ];

    public function settings(): array
    {
        $this->ensureTables();
        $rows = $this->db->query("SELECT setting_key, setting_value FROM app_settings WHERE setting_key LIKE 'assessment_%'")->fetchAll();
        $settings = $this->defaultSettings;
        foreach ($rows as $row) {
            $settings[$row['setting_key']] = $row['setting_value'];
        }
        return $settings;
    }

    public function saveSettings(array $data): void
    {
        $this->ensureTables();
        $allowed = array_keys($this->defaultSettings);
        $stmt = $this->db->prepare('INSERT INTO app_settings(setting_key, setting_value, updated_at) VALUES(?,?,NOW()) ON DUPLICATE KEY UPDATE setting_value=VALUES(setting_value), updated_at=NOW()');
        foreach ($allowed as $key) {
            if ($key === 'assessment_mail_password' && empty($data[$key])) {
                continue;
            }
            $stmt->execute([$key, trim((string)($data[$key] ?? $this->defaultSettings[$key]))]);
        }
    }

    public function templates(): array
    {
        $this->ensureTables();
        $this->seedTemplates();
        $rows = $this->db->query('SELECT * FROM assessment_email_templates ORDER BY FIELD(risk_key,"low","medium","high")')->fetchAll();
        $templates = [];
        foreach ($rows as $row) {
            $templates[$row['risk_key']] = $row;
        }
        return $templates;
    }

    public function template(string $riskKey): array
    {
        $templates = $this->templates();
        return $templates[$riskKey] ?? $templates['high'];
    }

    public function saveTemplates(array $templates): void
    {
        $this->ensureTables();
        $stmt = $this->db->prepare('INSERT INTO assessment_email_templates(risk_key,label,subject,html_body,updated_at) VALUES(?,?,?,?,NOW()) ON DUPLICATE KEY UPDATE label=VALUES(label), subject=VALUES(subject), html_body=VALUES(html_body), updated_at=NOW()');
        foreach ($this->defaults() as $key => $default) {
            $input = $templates[$key] ?? [];
            $stmt->execute([
                $key,
                $default['label'],
                trim((string)($input['subject'] ?? $default['subject'])),
                (string)($input['html_body'] ?? $default['html_body']),
            ]);
        }
    }

    public function defaults(): array
    {
        return [
            'low' => [
                'label' => 'Riesgo bajo',
                'subject' => 'Felicitaciones. Tu empresa demuestra un alto nivel de cumplimiento y podría acceder al Sello Crecer.',
                'html_body' => $this->defaultHtml('🟢', 'BAJO', 'VERDE', '#22c55e', 'Nos complace informarte que tu organización obtuvo un excelente resultado, reflejando un alto nivel de cumplimiento en materias laborales, previsionales, documentales y de gestión preventiva.', 'CONOCER SELLO CRECER', '{{seal_url}}'),
            ],
            'medium' => [
                'label' => 'Riesgo medio',
                'subject' => 'Tu empresa presenta oportunidades de mejora que es recomendable abordar oportunamente.',
                'html_body' => $this->defaultHtml('🟡', 'MEDIO', 'AMARILLO', '#f59e0b', 'La evaluación evidencia oportunidades de mejora que, de no ser abordadas oportunamente, podrían transformarse en incumplimientos con impacto legal, operativo y reputacional.', 'SOLICITAR ASESORÍA', 'mailto:{{contact_email}}?subject=Solicitar%20asesor%C3%ADa%20Crecer%20Acredita'),
            ],
            'high' => [
                'label' => 'Riesgo alto',
                'subject' => 'Atención: Tu empresa presenta brechas que requieren una revisión prioritaria.',
                'html_body' => $this->defaultHtml('🔴', 'ALTO', 'ROJO', '#ef4444', 'Los resultados obtenidos muestran la existencia de brechas relevantes que requieren atención prioritaria y acompañamiento especializado.', 'AGENDAR REUNIÓN CON UN ESPECIALISTA', 'mailto:{{contact_email}}?subject=Agendar%20reuni%C3%B3n%20con%20un%20especialista'),
            ],
        ];
    }

    private function ensureTables(): void
    {
        $this->db->exec('CREATE TABLE IF NOT EXISTS app_settings (setting_key VARCHAR(120) PRIMARY KEY, setting_value TEXT, updated_at TIMESTAMP NULL)');
        $this->db->exec('CREATE TABLE IF NOT EXISTS assessment_email_templates (risk_key VARCHAR(20) PRIMARY KEY, label VARCHAR(80) NOT NULL, subject VARCHAR(255) NOT NULL, html_body MEDIUMTEXT NOT NULL, updated_at TIMESTAMP NULL)');
    }

    private function seedTemplates(): void
    {
        $count = (int)$this->db->query('SELECT COUNT(*) c FROM assessment_email_templates')->fetch()['c'];
        if ($count > 0) return;
        $this->saveTemplates([]);
    }

    private function defaultHtml(string $emoji, string $level, string $trafficLight, string $color, string $meaning, string $button, string $buttonUrl): string
    {
        return '<!doctype html><html><body style="margin:0;background:#f4f7fb;font-family:Arial,Helvetica,sans-serif;color:#172033;">'
            . '<div style="max-width:760px;margin:0 auto;padding:28px 14px;"><div style="background:#fff;border-radius:22px;overflow:hidden;border:1px solid #e5eaf2;box-shadow:0 18px 44px rgba(0,32,96,.10);">'
            . '<div style="background:#002060;padding:26px;text-align:center;"><img src="{{logo_url}}" alt="Crecer Acredita" style="max-width:220px;height:auto;background:#fff;border-radius:12px;padding:10px;"><p style="color:#dbeafe;margin:14px 0 0;">Transformamos el cumplimiento en confianza.</p></div>'
            . '<div style="padding:30px;"><span style="display:inline-block;border-radius:999px;background:' . $color . ';color:#fff;padding:8px 14px;font-weight:bold;">' . $emoji . ' Riesgo ' . $level . '</span>'
            . '<h1 style="color:#002060;font-size:26px;line-height:1.2;margin:18px 0 12px;">Resultado de tu Autoevaluación de Riesgo Crecer</h1>'
            . '<p>Estimado(a) <strong>{{contact_name}}</strong>,</p><p>Gracias por realizar la Autoevaluación de Riesgo Crecer.</p>'
            . '<div style="border:1px solid #e5eaf2;border-radius:18px;padding:20px;background:#f8fafc;margin:22px 0;"><h2 style="margin-top:0;color:#002060;font-size:19px;">Resumen de tu evaluación</h2><p><strong>Empresa:</strong> {{company_name}}</p><p><strong>Fecha:</strong> {{date}}</p><p><strong>Puntaje obtenido:</strong> {{score}} /100</p><p><strong>Nivel de Riesgo:</strong> ' . $level . '</p><p><strong>Semáforo de Riesgo:</strong> ' . $emoji . ' ' . $trafficLight . '</p></div>'
            . '<h2 style="color:#002060;font-size:20px;">¿Qué significa este resultado?</h2><p>' . $meaning . '</p><h2 style="color:#002060;font-size:20px;">Próximo paso: Etapa 3 – Validación Documental</h2><p>Uno de nuestros especialistas se pondrá en contacto contigo para continuar con la validación documental y diagnóstico especializado.</p>'
            . '<p style="text-align:center;margin:28px 0;"><a href="' . $buttonUrl . '" style="display:inline-block;background:#830A3D;color:#fff;text-decoration:none;border-radius:999px;padding:14px 22px;font-weight:bold;">' . $button . '</a></p>'
            . '<p>Muchas gracias por confiar en Crecer Acredita.</p><p><strong>Transformamos el cumplimiento en confianza.</strong></p>'
            . '<div style="border-top:1px solid #e5eaf2;margin-top:24px;padding-top:18px;"><h3 style="color:#002060;margin:0 0 10px;">Contacto</h3><p>📧 <a href="mailto:{{contact_email}}">{{contact_email}}</a></p><p>📱 <a href="tel:+56921816236">{{contact_phone}}</a> · <a href="{{whatsapp_url}}">WhatsApp</a></p><p>📍 <a href="{{maps_url}}">{{contact_address}}</a></p></div>'
            . '</div></div></div></body></html>';
    }
}
