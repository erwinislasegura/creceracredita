<?php
$menuItems = [
  'inicio' => ['label' => 'Inicio', 'href' => 'index.php'],
  'nosotros' => ['label' => 'Nosotros', 'href' => 'nosotros.php'],
  'servicios' => ['label' => 'Servicios', 'href' => 'servicios.php'],
  'mineria' => ['label' => 'Crecer Acredita Minería', 'href' => 'mineria.php'],
  'academia' => ['label' => 'Academia Crecer', 'href' => 'academiacrecer.php'],
  'sello' => ['label' => 'Sello Crecer', 'href' => 'sello-crecer.php'],
  'contacto' => ['label' => 'Contacto', 'href' => 'contacto.php'],
];
$activePage = $activePage ?? 'inicio';
?>
<style>
  /* Shared site chrome: this include owns the header styling for every page. */
  .topbar { background:#071E41 !important; color:rgba(255,255,255,.78) !important; font-size:12px !important; border-bottom:1px solid rgba(255,255,255,.10) !important; }
  .topbar .wrap { display:flex !important; justify-content:space-between !important; align-items:center !important; gap:12px !important; padding:7px 0 !important; }
  .topbar strong { color:#fff !important; font-weight:650 !important; }
  .header { position:sticky !important; top:0 !important; z-index:80 !important; background:rgba(255,255,255,.96) !important; backdrop-filter:blur(14px) !important; border-bottom:1px solid rgba(227,233,242,.95) !important; }
  .nav { height:78px !important; display:flex !important; align-items:center !important; justify-content:space-between !important; gap:20px !important; }
  .brand { display:flex !important; align-items:center !important; justify-content:flex-start !important; flex:0 0 276px !important; min-width:0 !important; }
  .brand-mark { width:260px !important; height:58px !important; display:flex !important; align-items:center !important; justify-content:flex-start !important; overflow:hidden !important; }
  .brand-logo { width:100% !important; height:100% !important; object-fit:contain !important; display:block !important; }
  .brand .logo-placeholder,
  .brand .brand-placeholder,
  .brand .brand-logo-placeholder { width:100% !important; height:46px !important; min-height:46px !important; padding:0 14px !important; border:1px solid rgba(6,43,95,.16) !important; border-radius:12px !important; background:#fff !important; color:var(--navy) !important; box-shadow:0 2px 8px rgba(6,43,95,.06) !important; display:flex !important; align-items:center !important; justify-content:center !important; font-size:16px !important; font-weight:750 !important; letter-spacing:-.01em !important; line-height:1 !important; text-transform:none !important; text-align:center !important; }
  .menu-group { display:flex !important; align-items:center !important; justify-content:center !important; flex:1 1 auto !important; min-width:0 !important; }
  .menu-heading { position:absolute !important; width:1px !important; height:1px !important; padding:0 !important; margin:-1px !important; overflow:hidden !important; clip:rect(0,0,0,0) !important; white-space:nowrap !important; border:0 !important; }
  .header .menu { display:flex !important; align-items:center !important; justify-content:center !important; gap:5px !important; list-style:none !important; padding:0 !important; margin:0 !important; }
  .header .menu a { display:block !important; padding:10px 12px !important; border-radius:10px !important; color:#29364E !important; font-size:13.4px !important; font-weight:700 !important; letter-spacing:-.012em !important; line-height:1.15 !important; text-decoration:none !important; white-space:nowrap !important; }
  .header .menu a:hover { background:var(--soft) !important; color:var(--navy) !important; }
  .header .menu a.active { background:rgba(11,143,99,.10) !important; color:var(--green) !important; box-shadow:inset 0 0 0 1px rgba(11,143,99,.14) !important; }
  .nav-actions { display:flex !important; align-items:center !important; justify-content:flex-end !important; gap:8px !important; flex:0 0 auto !important; }
  .header .btn-outline { background:#fff !important; color:var(--navy) !important; border-color:rgba(6,43,95,.16) !important; box-shadow:0 8px 18px rgba(6,43,95,.06) !important; white-space:nowrap !important; }
  .hamb { display:none !important; background:#fff !important; border:1px solid var(--line) !important; border-radius:10px !important; padding:8px 10px !important; color:var(--navy) !important; cursor:pointer !important; }
  @media (max-width: 900px) {
    .topbar .wrap { flex-direction:column !important; align-items:flex-start !important; }
    .nav { height:72px !important; }
    .brand { flex:0 1 auto !important; }
    .brand-mark { width:210px !important; height:50px !important; }
    .brand .logo-placeholder,
    .brand .brand-placeholder,
    .brand .brand-logo-placeholder { height:42px !important; min-height:42px !important; font-size:15px !important; }
    .menu-group { flex:0 0 auto !important; }
    .header .menu { display:none !important; position:absolute !important; top:100% !important; left:17px !important; right:17px !important; background:#fff !important; border:1px solid var(--line) !important; border-radius:14px !important; padding:10px !important; box-shadow:var(--shadow) !important; flex-direction:column !important; align-items:stretch !important; }
    .header .menu.active { display:flex !important; }
    .header .menu a { padding:12px 13px !important; font-size:14px !important; }
    .nav-actions .btn-outline { display:none !important; }
    .hamb { display:inline-flex !important; }
  }
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
      <span class="brand-mark"><img class="brand-logo" src="logo/logo.png" alt="Crecer Acredita"></span>
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
      <button class="hamb" id="hamb" type="button" aria-label="Abrir menú" aria-controls="menu" aria-expanded="false">☰</button>
    </div>
  </nav>
</header>

<script>
  (() => {
    const hamb = document.getElementById('hamb');
    const menu = document.getElementById('menu');
    if (!hamb || !menu) return;

    hamb.addEventListener('click', (event) => {
      event.preventDefault();
      event.stopImmediatePropagation();
      const isOpen = menu.classList.toggle('active');
      hamb.setAttribute('aria-expanded', String(isOpen));
    }, true);
  })();
</script>
