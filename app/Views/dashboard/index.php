<?php
$title='Dashboard';
$modules=$stats['modules'] ?? [];
$lowestModule=$modules ? array_reduce($modules, fn($carry,$item)=>$carry===null || (float)$item['avg_score'] < (float)$carry['avg_score'] ? $item : $carry) : null;
?>
<section class="dashboard-hero">
  <div>
    <span class="eyebrow">CRM Crecer Acredita</span>
    <h2>Panel ejecutivo de cumplimiento y oportunidades</h2>
    <p>Vista compacta basada en las respuestas de autoevaluación del modal web para priorizar brechas, riesgos y seguimiento comercial.</p>
  </div>
  <img src="<?=url('/../logo/logo.png')?>" alt="Crecer Acredita">
</section>
<section class="cards kpi-cards">
  <div class="card"><span>Empresas</span><b><?=$stats['total']?></b><small>Leads capturados</small></div>
  <div class="card"><span>Evaluaciones</span><b><?=$stats['evaluations']?></b><small>Formulario web</small></div>
  <div class="card accent"><span>Promedio cumplimiento</span><b><?=$stats['avg']?>%</b><small><?=e($lowestModule['module_name'] ?? 'Sin datos')?> requiere foco</small></div>
  <div class="card danger"><span>Riesgo alto / pendientes</span><b><?=($stats['high_risk']??0)?> / <?=($stats['pending']??0)?></b><small>Prioridad comercial</small></div>
</section>
<section class="dashboard-grid">
  <div class="panel panel-compact"><h2>Riesgo</h2><canvas data-chart='<?=json_encode($stats['risk'])?>'></canvas></div>
  <div class="panel panel-compact"><h2>Industrias</h2><canvas data-chart='<?=json_encode($stats['industry'])?>'></canvas></div>
  <div class="panel panel-compact"><h2>Pipeline</h2><canvas data-chart-type="bar" data-chart='<?=json_encode($stats['funnel'])?>'></canvas></div>
</section>
<section class="grid2 insights-grid">
  <div class="panel"><h2>Desempeño por módulo</h2><div class="module-list"><?php foreach($modules as $m): $score=(float)($m['avg_score'] ?? 0); ?><div class="module-row"><div><strong><?=e($m['module_name'])?></strong><small><?=number_format($score,1,',','.')?>% promedio</small></div><span><i style="width:<?=$score?>%"></i></span></div><?php endforeach; ?></div></div>
  <div class="panel"><h2>Brechas críticas detectadas</h2><div class="gap-list"><?php foreach(($stats['gaps'] ?? []) as $g): ?><article><small><?=e($g['module_name'])?> · <?=number_format((float)$g['compliance_score'],1,',','.')?>%</small><strong><?=e($g['question_text'])?></strong><span>No: <?=$g['no_count']?> · Parcial: <?=$g['partial_count']?></span></article><?php endforeach; if(empty($stats['gaps'])): ?><p class="empty">Aún no hay respuestas suficientes para detectar brechas.</p><?php endif; ?></div></div>
</section>
<div class="panel"><h2>Últimos leads</h2><?php $leads=$latest; require __DIR__.'/../leads/table.php'; ?></div>
