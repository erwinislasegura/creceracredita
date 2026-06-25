<?php $title='Configuración'; ?>
<div class="grid2">
  <div class="panel">
    <h2>Correo de autoevaluaciones</h2>
    <p>Configura el remitente y los destinatarios internos que recibirán copia de cada resultado enviado desde el modal.</p>
    <a class="btn primary" href="<?=url('/settings/email')?>">Configurar envío</a>
  </div>
  <div class="panel">
    <h2>Plantillas HTML por puntaje</h2>
    <p>Edita el código HTML de los mensajes de riesgo bajo, medio y alto. Cada plantilla incluye vista previa.</p>
    <a class="btn primary" href="<?=url('/settings/email-templates')?>">Editar mensajes</a>
  </div>
</div>
<div class="panel"><h2>Crecer Acredita</h2><p>Configure la conexión en <code>config/database.php</code>. Los parámetros de marca y zona horaria están en <code>config/app.php</code>.</p><p><b>Slogan:</b> Transformamos el cumplimiento en confianza.</p></div>
