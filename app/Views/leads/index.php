<?php
$title='Gestión de leads';
$totalLeads=count($leads ?? []);
$highRisk=count(array_filter($leads ?? [], fn($lead)=>($lead['risk_level'] ?? '') === 'Riesgo alto'));
$pending=count(array_filter($leads ?? [], fn($lead)=>in_array($lead['risk_status'] ?? '', ['Nuevo','Contactado','En seguimiento'], true)));
$avg=$totalLeads ? round(array_sum(array_map(fn($lead)=>(float)($lead['risk_score'] ?? 0), $leads)) / $totalLeads, 1) : 0;
?>
<section class="leads-hero">
  <div>
    <span class="eyebrow">Pipeline comercial</span>
    <h2>Leads y empresas evaluadas</h2>
    <p>Gestiona el seguimiento comercial con filtros claros, prioridades de riesgo y datos clave de cada autoevaluación.</p>
  </div>
  <div class="lead-metrics">
    <span><strong><?=$totalLeads?></strong> resultados</span>
    <span><strong><?=$highRisk?></strong> alto riesgo</span>
    <span><strong><?=$pending?></strong> pendientes</span>
    <span><strong><?=$avg?>%</strong> promedio</span>
  </div>
</section>
<div class="panel leads-panel">
  <form class="filters leads-filters">
    <label><small>Buscar</small><input name="search" placeholder="Empresa, RUT, contacto, correo o ciudad" value="<?=e($filters['search']??'')?>"></label>
    <label><small>Industria</small><input name="industry" placeholder="Ej: Minería" value="<?=e($filters['industry']??'')?>"></label>
    <label><small>Riesgo</small><select name="risk_level"><option value="">Todos</option><?php foreach(['Riesgo bajo','Riesgo medio','Riesgo alto'] as $r): ?><option <?=($filters['risk_level']??'')===$r?'selected':''?>><?=$r?></option><?php endforeach; ?></select></label>
    <label><small>Desde</small><input type="date" name="date_from" value="<?=e($filters['date_from']??'')?>"></label>
    <label><small>Hasta</small><input type="date" name="date_to" value="<?=e($filters['date_to']??'')?>"></label>
    <div class="filter-actions"><button class="btn primary">Filtrar</button><a class="btn ghost" href="<?=url('/leads')?>">Limpiar</a></div>
  </form>
  <?php require __DIR__.'/table.php'; ?>
</div>
