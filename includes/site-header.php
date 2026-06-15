<?php
$menuItems = [
  'inicio' => ['label' => 'Inicio', 'href' => 'index.php'],
  'nosotros' => ['label' => 'Nosotros', 'href' => 'nosotros.php'],
  'servicios' => ['label' => 'Servicios', 'href' => 'servicios.php'],
  'mineria' => ['label' => 'Crecer Acredita Minería', 'href' => 'mineria.php'],
  'sello' => ['label' => 'Sello Crecer', 'href' => 'sello-crecer.php'],
  'contacto' => ['label' => 'Contacto', 'href' => 'contacto.php'],
];
$activePage = $activePage ?? 'inicio';
?>
<style>
  .menu-group { display:flex; align-items:center; min-width:0; }
  .menu-heading { position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap; border:0; }
  .header .menu { gap:4px; }
  .header .menu a { letter-spacing:-.01em; padding:9px 11px; }
  .header .menu a.active { background:rgba(11,143,99,.10); color:var(--green); box-shadow:inset 0 0 0 1px rgba(11,143,99,.14); }
  .header .btn-outline { border-color:rgba(6,43,95,.16); box-shadow:0 8px 18px rgba(6,43,95,.06); }
  @media (max-width: 900px) { .menu-group { align-items:flex-end; } }
</style>
<div class="topbar">
  <div class="wrap">
    <span><strong>Crecer Acredita</strong> · Reducimos el riesgo de tu cadena de contratistas</span>
    <span>creceracredita@crecerconsultores.cl · +56 9 2181 6236</span>
  </div>
</div>

<header class="header">
  <nav class="nav wrap" aria-label="MENÚ PRINCIPAL">
    <a class="brand" href="index.php" aria-label="Crecer Acredita">
      <span class="brand-mark"><span class="logo-placeholder brand-placeholder brand-logo-placeholder" role="img" aria-label="Crecer Acredita">Crecer Acredita</span></span>
    </a>
    <div class="menu-group">
      <span class="menu-heading">MENÚ PRINCIPAL</span>
      <ul class="menu" id="menu">
        <?php foreach ($menuItems as $key => $item): ?>
          <li><a href="<?= $item['href'] ?>" class="<?= $activePage === $key ? 'active' : '' ?>"><?= $item['label'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="nav-actions">
      <a class="btn btn-outline" href="https://wa.me/56921816236" target="_blank" rel="noopener">WhatsApp</a>
      <button class="hamb" id="hamb" aria-label="Abrir menú">☰</button>
    </div>
  </nav>
</header>
