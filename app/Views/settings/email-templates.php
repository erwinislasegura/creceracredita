<?php $title='Plantillas de correo'; $sample=['{{contact_name}}'=>'María Pérez','{{company_name}}'=>'Empresa Demo SpA','{{date}}'=>date('d/m/Y'),'{{score}}'=>'88','{{risk_level}}'=>'Riesgo bajo','{{recommendation}}'=>'Recomendación de ejemplo para la vista previa.','{{contact_email}}'=>'contacto@creceracredita.cl','{{contact_phone}}'=>'+56 9 2181 6236','{{contact_address}}'=>'Las Condes Santiago – Chile','{{whatsapp_url}}'=>'https://wa.me/56921816236','{{maps_url}}'=>'https://www.google.com/maps/search/?api=1&query=Las+Condes+Santiago+Chile','{{logo_url}}'=>url('/../logo/logo.png'),'{{seal_url}}'=>url('/../sello-crecer.php#sello')]; ?>
<style>
.template-tabs{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:14px}.template-tab{border:0;border-radius:999px;padding:9px 14px;background:#f2f6fb;color:var(--blue);cursor:pointer}.template-tab.active{background:var(--blue);color:#fff}.template-editor{display:none}.template-editor.active{display:block}.template-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}.template-preview{border:1px solid var(--line);border-radius:14px;background:#fff;height:720px;width:100%}.token-list{display:flex;flex-wrap:wrap;gap:6px;margin:8px 0 16px}.token-list code{background:#f2f6fb;border-radius:999px;padding:5px 8px;color:var(--blue)}@media(max-width:980px){.template-grid{grid-template-columns:1fr}.template-preview{height:520px}}
</style>
<div class="actions"><a class="btn ghost" href="<?=url('/settings')?>">Volver</a><a class="btn" href="<?=url('/settings/email')?>">Configurar envío</a></div>
<div class="panel">
  <h2>Código HTML de los 3 mensajes</h2>
  <p>Variables disponibles para usar en el asunto o HTML:</p>
  <div class="token-list"><?php foreach(array_keys($sample) as $token): ?><code><?=e($token)?></code><?php endforeach; ?></div>
  <form method="post" action="<?=url('/settings/email-templates')?>" id="templateForm">
    <?=csrf_field()?>
    <div class="template-tabs">
      <?php foreach($templates as $key=>$template): ?><button class="template-tab <?=$key==='low'?'active':''?>" type="button" data-template-tab="<?=$key?>"><?=e($template['label'])?></button><?php endforeach; ?>
    </div>
    <?php foreach($templates as $key=>$template): ?>
      <section class="template-editor <?=$key==='low'?'active':''?>" data-template-panel="<?=$key?>">
        <label>Asunto
          <input name="templates[<?=$key?>][subject]" value="<?=e($template['subject'])?>" data-preview-subject="<?=$key?>">
        </label>
        <div class="template-grid">
          <label>Código HTML
            <textarea name="templates[<?=$key?>][html_body]" rows="28" data-preview-source="<?=$key?>"><?=e($template['html_body'])?></textarea>
          </label>
          <div>
            <small>Vista previa</small>
            <iframe class="template-preview" title="Vista previa <?=e($template['label'])?>" data-preview-frame="<?=$key?>"></iframe>
          </div>
        </div>
      </section>
    <?php endforeach; ?>
    <button class="btn primary">Guardar plantillas</button>
  </form>
</div>
<script>
(function(){
  const sample = <?=json_encode($sample, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)?>;
  const fill = html => Object.entries(sample).reduce((out, pair) => out.split(pair[0]).join(pair[1]), html || '');
  function render(key){
    const source = document.querySelector(`[data-preview-source="${key}"]`);
    const frame = document.querySelector(`[data-preview-frame="${key}"]`);
    if (!source || !frame) return;
    frame.srcdoc = fill(source.value);
  }
  document.querySelectorAll('[data-preview-source]').forEach(el => { render(el.dataset.previewSource); el.addEventListener('input', () => render(el.dataset.previewSource)); });
  document.querySelectorAll('[data-template-tab]').forEach(btn => btn.addEventListener('click', () => {
    document.querySelectorAll('[data-template-tab]').forEach(item => item.classList.remove('active'));
    document.querySelectorAll('[data-template-panel]').forEach(item => item.classList.remove('active'));
    btn.classList.add('active');
    document.querySelector(`[data-template-panel="${btn.dataset.templateTab}"]`).classList.add('active');
  }));
})();
</script>
