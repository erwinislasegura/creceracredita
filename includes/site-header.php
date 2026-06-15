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
  .menu-group { display:flex; flex-direction:column; align-items:center; gap:2px; min-width:0; }
  .menu-heading { color:var(--navy); font-size:10px; font-weight:800; letter-spacing:.12em; text-transform:uppercase; line-height:1; }
  @media (max-width: 900px) { .menu-group { align-items:flex-end; } .menu-heading { display:none; } }
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
      <ol class="menu" id="menu">
        <?php $menuIndex = 1; ?>
        <?php foreach ($menuItems as $key => $item): ?>
          <li><a href="<?= $item['href'] ?>" class="<?= $activePage === $key ? 'active' : '' ?>"><?= $menuIndex ?>. <?= $item['label'] ?></a></li>
          <?php $menuIndex++; ?>
        <?php endforeach; ?>
      </ol>
    </div>
    <div class="nav-actions">
      <a class="btn btn-outline" href="https://wa.me/56921816236" target="_blank" rel="noopener">WhatsApp</a>
      <button class="hamb" id="hamb" aria-label="Abrir menú">☰</button>
    </div>
  </nav>
</header>
