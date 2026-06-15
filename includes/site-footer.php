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
  .footer-menu { margin:0; padding-left:20px; }
  .footer-menu li { margin:5px 0; }
  .footer-menu a { display:inline; }
</style>
<footer>
  <div class="wrap footer-grid">
    <div class="footer-logo">
      <span class="logo-placeholder footer-logo-placeholder" role="img" aria-label="Crecer Acredita">Crecer Acredita</span>
      <p>Transformamos el cumplimiento en confianza. Más de 20 años de experiencia respaldando soluciones de cumplimiento para empresas.</p>
    </div>
    <div>
      <h4>MENÚ PRINCIPAL</h4>
      <ol class="footer-menu">
        <?php foreach ($menuItems as $item): ?>
          <li><a href="<?= $item['href'] ?>"><?= $item['label'] ?></a></li>
        <?php endforeach; ?>
      </ol>
    </div>
    <div>
      <h4>Contacto</h4>
      <a href="mailto:creceracredita@crecerconsultores.cl">creceracredita@crecerconsultores.cl</a>
      <a href="https://wa.me/56921816236" target="_blank" rel="noopener">+56 9 2181 6236</a>
      <span>Santiago, Chile</span>
    </div>
  </div>
</footer>
