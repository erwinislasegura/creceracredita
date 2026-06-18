<?php
$title='Dashboard';
$modules=$stats['modules'] ?? [];
$answerSummary=$stats['answer_summary'] ?? [];
$questionStats=$stats['question_stats'] ?? [];
$lowestModule=$answerSummary ? array_reduce($answerSummary, fn($carry,$item)=>$carry===null || (float)$item['compliance_score'] < (float)$carry['compliance_score'] ? $item : $carry) : null;
?>
<section class="dashboard-hero clean-hero">
  <div>
    <span class="eyebrow">CRM Crecer Acredita</span>
    <h2>Dashboard de autoevaluaciones</h2>
    <p>Indicadores ordenados por riesgo, avance comercial y respuestas del formulario para detectar prioridades por pregunta y módulo.</p>
  </div>
  <img src="<?=url('/../logo/logo.png')?>" alt="Crecer Acredita">
</section>
<section class="cards kpi-cards">
  <div class="card"><span>Empresas</span><b><?=$stats['total']?></b><small>Leads capturados</small></div>
  <div class="card"><span>Evaluaciones</span><b><?=$stats['evaluations']?></b><small>Respuestas recibidas</small></div>
  <div class="card accent"><span>Cumplimiento promedio</span><b><?=$stats['avg']?>%</b><small>Foco: <?=e($lowestModule['module_name'] ?? 'Sin datos')?></small></div>
  <div class="card danger"><span>Alto riesgo / pendientes</span><b><?=($stats['high_risk']??0)?> / <?=($stats['pending']??0)?></b><small>Seguimiento prioritario</small></div>
</section>
<section class="dashboard-grid ordered-grid">
  <div class="panel panel-compact"><h2>1. Distribución de riesgo</h2><canvas data-chart='<?=json_encode($stats['risk'])?>'></canvas></div>
  <div class="panel panel-compact"><h2>2. Industrias principales</h2><canvas data-chart='<?=json_encode($stats['industry'])?>'></canvas></div>
  <div class="panel panel-compact"><h2>3. Estado comercial</h2><canvas data-chart-type="bar" data-chart='<?=json_encode($stats['funnel'])?>'></canvas></div>
</section>
<section class="grid2 insights-grid">
  <div class="panel"><h2>4. Resumen de respuestas por módulo</h2><div class="answer-summary"><?php foreach($answerSummary as $m): $score=(float)($m['compliance_score'] ?? 0); ?><article><div><strong><?=e($m['module_name'])?></strong><small><?=$m['total_answers']?> respuestas · <?=number_format($score,1,',','.')?>% cumplimiento</small></div><div class="answer-pills"><span>Sí <?=$m['yes_count']?></span><span>Parcial <?=$m['partial_count']?></span><span>No <?=$m['no_count']?></span></div><em><i style="width:<?=$score?>%"></i></em></article><?php endforeach; if(empty($answerSummary)): ?><p class="empty">Aún no hay respuestas para resumir.</p><?php endif; ?></div></div>
  <div class="panel"><h2>5. Brechas críticas detectadas</h2><div class="gap-list"><?php foreach(($stats['gaps'] ?? []) as $g): ?><article><small><?=e($g['module_name'])?> · <?=number_format((float)$g['compliance_score'],1,',','.')?>%</small><strong><?=e($g['question_text'])?></strong><span>No: <?=$g['no_count']?> · Parcial: <?=$g['partial_count']?> · Total: <?=$g['total_answers']?></span></article><?php endforeach; if(empty($stats['gaps'])): ?><p class="empty">Aún no hay respuestas suficientes para detectar brechas.</p><?php endif; ?></div></div>
</section>
<div class="panel"><h2>6. Detalle de preguntas y respuestas</h2><div class="qa-table"><table><thead><tr><th>Pregunta</th><th>Módulo</th><th>Sí</th><th>Parcial</th><th>No</th><th>Cumpl.</th></tr></thead><tbody><?php foreach($questionStats as $q): ?><tr><td><strong><?=e($q['question_text'])?></strong></td><td><small><?=e($q['module_name'])?></small></td><td><?=$q['yes_count']?></td><td><?=$q['partial_count']?></td><td><?=$q['no_count']?></td><td><span class="badge"><?=number_format((float)$q['compliance_score'],1,',','.')?>%</span></td></tr><?php endforeach; ?></tbody></table><?php if(empty($questionStats)): ?><p class="empty">Sin respuestas registradas.</p><?php endif; ?></div></div>
<div class="panel"><h2>Últimos leads</h2><?php $leads=$latest; require __DIR__.'/../leads/table.php'; ?></div>
