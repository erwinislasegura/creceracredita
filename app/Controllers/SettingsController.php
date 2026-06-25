<?php
namespace App\Controllers;

use App\Models\EmailConfiguration;

class SettingsController
{
    public function index()
    {
        \render('settings/index');
    }

    public function email()
    {
        $config = new EmailConfiguration;
        \render('settings/email', ['settings' => $config->settings()]);
    }

    public function updateEmail()
    {
        \verify_csrf();
        $fromEmail = trim((string)($_POST['assessment_from_email'] ?? ''));
        $replyTo = trim((string)($_POST['assessment_reply_to'] ?? ''));
        $port = (int)($_POST['assessment_mail_port'] ?? 0);
        if (!filter_var($fromEmail, FILTER_VALIDATE_EMAIL) || ($replyTo !== '' && !filter_var($replyTo, FILTER_VALIDATE_EMAIL)) || $port < 1 || $port > 65535) {
            \flash('error', 'Revisa el correo remitente, el correo de respuesta y el puerto del servidor.');
            \redirect('/settings/email');
        }
        (new EmailConfiguration)->saveSettings($_POST);
        \flash('success', 'Configuración de envío actualizada.');
        \redirect('/settings/email');
    }

    public function emailTemplates()
    {
        $config = new EmailConfiguration;
        \render('settings/email-templates', ['templates' => $config->templates()]);
    }

    public function updateEmailTemplates()
    {
        \verify_csrf();
        (new EmailConfiguration)->saveTemplates($_POST['templates'] ?? []);
        \flash('success', 'Plantillas de correo actualizadas.');
        \redirect('/settings/email-templates');
    }
}
