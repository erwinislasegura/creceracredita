<?php
$menuItems = $menuItems ?? [
  'inicio' => ['label' => 'Inicio', 'href' => 'index.php'],
  'nosotros' => ['label' => 'Nosotros', 'href' => 'nosotros.php'],
  'servicios' => ['label' => 'Servicios', 'href' => 'servicios.php'],
  'mineria' => ['label' => 'Crecer Acredita Minería', 'href' => 'mineria.php'],
  'sello' => ['label' => 'Sello Crecer', 'href' => 'sello-crecer.php'],
  'contacto' => ['label' => 'Contacto', 'href' => 'contacto.php'],
];
?>
<style>
  /* Shared site chrome: this include owns the footer styling for every page. */
  footer { background:#071E41 !important; color:rgba(255,255,255,.74) !important; padding:32px 0 !important; }
  .footer-grid { display:grid !important; grid-template-columns:1.2fr .8fr .8fr !important; gap:22px !important; }
  .footer-logo .logo-placeholder,
  .footer-logo-placeholder { width:220px !important; min-height:52px !important; margin-bottom:10px !important; padding:8px 14px !important; background:#fff !important; border:1px solid rgba(255,255,255,.12) !important; border-radius:12px !important; color:var(--navy) !important; display:flex !important; align-items:center !important; justify-content:center !important; font-size:18px !important; font-weight:750 !important; letter-spacing:-.01em !important; text-align:center !important; text-transform:none !important; }
  footer h4 { color:#fff !important; margin:0 0 8px !important; font-size:14.5px !important; font-weight:650 !important; }
  footer a { display:block !important; margin:5px 0 !important; color:rgba(255,255,255,.74) !important; text-decoration:none !important; }
  footer a:hover { color:#fff !important; }
  footer span { display:block !important; margin:5px 0 !important; }
  .footer-menu { margin:0 !important; padding:0 !important; list-style:none !important; }
  .footer-menu li { margin:5px 0 !important; }
  .footer-menu a { display:block !important; }
  @media (max-width: 900px) { .footer-grid { grid-template-columns:1fr !important; } }
</style>
<footer>
  <div class="wrap footer-grid">
    <div class="footer-logo">
      <span class="logo-placeholder footer-logo-placeholder" role="img" aria-label="Crecer Acredita">Crecer Acredita</span>
      <p>Transformamos el cumplimiento en confianza. Más de 20 años de experiencia respaldando soluciones de cumplimiento para empresas.</p>
    </div>
    <div>
      <h4>MENÚ PRINCIPAL</h4>
      <ul class="footer-menu">
        <?php foreach ($menuItems as $item): ?>
          <li><a href="<?= $item['href'] ?>"><?= $item['label'] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div>
      <h4>Contacto</h4>
      <a href="mailto:creceracredita@crecerconsultores.cl">creceracredita@crecerconsultores.cl</a>
      <a href="https://wa.me/56921816236" target="_blank" rel="noopener">+56 9 2181 6236</a>
      <span>Santiago, Chile</span>
    </div>
  </div>
</footer>
