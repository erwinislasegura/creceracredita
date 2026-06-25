<?php $title='Configuración de correo'; ?>
<div class="actions"><a class="btn ghost" href="<?=url('/settings')?>">Volver</a><a class="btn" href="<?=url('/settings/email-templates')?>">Editar plantillas</a></div>
<div class="panel">
  <h2>Servidor IMAP para correo saliente</h2>
  <p>Configura la cuenta desde la que se enviarán todos los correos del modal. Si tu proveedor usa SMTP para salida, ingresa aquí el mismo host/puerto SMTP entregado por el proveedor.</p>
  <form method="post" action="<?=url('/settings/email')?>">
    <?=csrf_field()?>
    <div class="grid2">
      <label>Protocolo
        <select name="assessment_mail_protocol">
          <?php $protocol=$settings['assessment_mail_protocol'] ?? 'imap'; ?>
          <option value="imap" <?=$protocol==='imap'?'selected':''?>>IMAP</option>
          <option value="smtp" <?=$protocol==='smtp'?'selected':''?>>SMTP</option>
        </select>
      </label>
      <label>Servidor / Host
        <input name="assessment_mail_host" placeholder="imap.tudominio.cl" value="<?=e($settings['assessment_mail_host'] ?? '')?>">
      </label>
      <label>Puerto
        <input type="number" name="assessment_mail_port" placeholder="993" value="<?=e($settings['assessment_mail_port'] ?? '993')?>">
      </label>
      <label>Seguridad
        <?php $enc=$settings['assessment_mail_encryption'] ?? 'ssl'; ?>
        <select name="assessment_mail_encryption">
          <option value="ssl" <?=$enc==='ssl'?'selected':''?>>SSL</option>
          <option value="tls" <?=$enc==='tls'?'selected':''?>>TLS / STARTTLS</option>
          <option value="none" <?=$enc==='none'?'selected':''?>>Sin cifrado</option>
        </select>
      </label>
      <label>Usuario
        <input name="assessment_mail_username" autocomplete="username" value="<?=e($settings['assessment_mail_username'] ?? '')?>">
      </label>
      <label>Contraseña <small>Déjala vacía para conservar la contraseña actual.</small>
        <input type="password" name="assessment_mail_password" autocomplete="new-password" value="">
      </label>
    </div>
    <h2>Remitente y destinatarios internos</h2>
    <label>Nombre del remitente
      <input name="assessment_from_name" required value="<?=e($settings['assessment_from_name'] ?? '')?>">
    </label>
    <label>Correo remitente
      <input type="email" name="assessment_from_email" required value="<?=e($settings['assessment_from_email'] ?? '')?>">
    </label>
    <label>Responder a
      <input type="email" name="assessment_reply_to" value="<?=e($settings['assessment_reply_to'] ?? '')?>">
    </label>
    <label>Destinatarios internos en copia oculta <small>Separar por coma, punto y coma o espacio.</small>
      <textarea name="assessment_internal_recipients" rows="4"><?=e($settings['assessment_internal_recipients'] ?? '')?></textarea>
    </label>
    <button class="btn primary">Guardar configuración</button>
  </form>
</div>
