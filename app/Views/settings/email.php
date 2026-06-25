<?php $title='Configuración de correo'; ?>
<div class="actions"><a class="btn ghost" href="<?=url('/settings')?>">Volver</a><a class="btn" href="<?=url('/settings/email-templates')?>">Editar plantillas</a></div>
<div class="panel">
  <h2>Remitente y destinatarios internos</h2>
  <p>Estos datos se usarán en todos los correos enviados al presionar “Ver resultados” en el modal.</p>
  <form method="post" action="<?=url('/settings/email')?>">
    <?=csrf_field()?>
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
