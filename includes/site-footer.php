<?php
$menuItems = $menuItems ?? [
  'inicio' => ['label' => 'Inicio', 'href' => 'index.php'],
  'nosotros' => ['label' => 'Nosotros', 'href' => 'nosotros.php'],
  'servicios' => ['label' => 'Servicios', 'href' => 'servicios.php'],
  'mineria' => ['label' => 'Crecer Acredita Minería', 'href' => 'mineria.php'],
  'academia' => ['label' => 'Academia Crecer', 'href' => 'academiacrecer.php'],
  'sello' => ['label' => 'Sello Crecer', 'href' => 'sello-crecer.php'],
  'contacto' => ['label' => 'Contacto', 'href' => 'contacto.php'],
];

$crmAccessUrl = $crmAccessUrl ?? 'public/login';
?>

<style>
  :root {
    --navy:#001846;
    --green:#830A3D;
    --line:#e5eaf0;
    --soft:#f6f8fb;
    --muted:#687589;
    --ink:#1f2937;
    --shadow:0 18px 45px rgba(0,24,70,.12);
  }

  footer {
    background:#001846 !important;
    color:rgba(255,255,255,.74) !important;
    padding:32px 0 !important;
  }

  .footer-grid {
    display:grid !important;
    grid-template-columns:1.2fr .8fr .8fr !important;
    gap:22px !important;
  }

  .footer-brand-logo {
    width:220px !important;
    height:auto !important;
    margin-bottom:10px !important;
    padding:8px !important;
    background:#fff !important;
    border:1px solid rgba(255,255,255,.12) !important;
    border-radius:12px !important;
    display:block !important;
  }

  .footer-logo .logo-placeholder,
  .footer-logo-placeholder {
    width:220px !important;
    min-height:52px !important;
    margin-bottom:10px !important;
    padding:8px 14px !important;
    background:#fff !important;
    border:1px solid rgba(255,255,255,.12) !important;
    border-radius:12px !important;
    color:var(--navy) !important;
    display:flex !important;
    align-items:center !important;
    justify-content:center !important;
    font-size:18px !important;
    font-weight:750 !important;
    letter-spacing:-.01em !important;
    text-align:center !important;
    text-transform:none !important;
  }

  footer h4 {
    color:#fff !important;
    margin:0 0 8px !important;
    font-size:14.5px !important;
    font-weight:650 !important;
  }

  footer a {
    display:block !important;
    margin:5px 0 !important;
    color:rgba(255,255,255,.74) !important;
    text-decoration:none !important;
  }

  footer a:hover {
    color:#fff !important;
  }

  footer span {
    display:block !important;
    margin:5px 0 !important;
  }

  .footer-access {
    margin-top:14px !important;
    padding-top:12px !important;
    border-top:1px solid rgba(255,255,255,.14) !important;
  }

  .footer-access-link {
    display:inline-flex !important;
    align-items:center !important;
    gap:8px !important;
    width:auto !important;
    margin-top:8px !important;
    padding:9px 12px !important;
    border:1px solid rgba(255,255,255,.22) !important;
    border-radius:999px !important;
    background:rgba(255,255,255,.06) !important;
    color:#fff !important;
    font-weight:650 !important;
  }

  .footer-access-link:hover {
    background:#830A3D !important;
    border-color:#830A3D !important;
    color:#fff !important;
  }

  .footer-menu {
    margin:0 !important;
    padding:0 !important;
    list-style:none !important;
  }

  .footer-menu li {
    margin:5px 0 !important;
  }

  .footer-menu a {
    display:block !important;
  }

  @media (max-width:900px) {
    .footer-grid {
      grid-template-columns:1fr !important;
    }
  }

  .floating-eval-btn {
    position:fixed !important;
    right:22px !important;
    bottom:22px !important;
    z-index:110 !important;
    min-height:48px !important;
    padding:13px 20px !important;
    border:0 !important;
    border-radius:999px !important;
    background:linear-gradient(135deg,#830A3D,#B0174F) !important;
    color:#fff !important;
    box-shadow:0 18px 38px rgba(131,10,61,.34),0 0 0 6px rgba(131,10,61,.12) !important;
    font-weight:850 !important;
    font-size:14px !important;
    display:inline-flex !important;
    align-items:center !important;
    justify-content:center !important;
    cursor:pointer !important;
    transition:.22s ease !important;
  }

  .floating-eval-btn:hover {
    transform:translateY(-2px) !important;
  }

  @media (max-width:680px) {
    .floating-eval-btn {
      left:14px !important;
      right:14px !important;
      bottom:14px !important;
      width:calc(100% - 28px) !important;
      justify-content:center !important;
    }

    body {
      padding-bottom:72px;
    }
  }

  .modal {
    position:fixed;
    inset:0;
    z-index:120;
    display:none;
    background:rgba(7,22,45,.72);
    backdrop-filter:blur(12px);
    padding:18px;
    overflow:auto;
  }

  .modal.open {
    display:block;
  }

  .modal-card {
    width:min(980px, 100%);
    margin:18px auto;
    background:#fff;
    border-radius:26px;
    overflow:hidden;
    box-shadow:0 34px 95px rgba(4,17,37,.34);
    border:1px solid rgba(255,255,255,.36);
  }

  .modal-layout {
    display:grid;
    grid-template-columns:300px 1fr;
    min-height:620px;
  }

  .modal-aside {
    position:relative;
    display:flex;
    flex-direction:column;
    justify-content:flex-start;
    padding:28px 24px;
    background-color:#002060;
    background-image:url('imagenes/19.png');
    background-size:cover;
    background-position:center;
    color:#fff;
    overflow:hidden;
    isolation:isolate;
  }

  .modal-aside::before {
    content:"";
    position:absolute;
    inset:0;
    z-index:-1;
    background:
      linear-gradient(160deg, rgba(0,32,96,.98) 0%, rgba(0,32,96,.9) 44%, rgba(23,59,120,.78) 100%),
      radial-gradient(circle at 20% 12%, rgba(255,255,255,.24), transparent 32%),
      rgba(0,32,96,.82);
    backdrop-filter:saturate(1.2) blur(1px);
  }

  .modal-aside::after {
    content:"";
    position:absolute;
    right:-52px;
    bottom:-70px;
    width:190px;
    height:190px;
    border-radius:50%;
    border:24px solid rgba(255,255,255,.10);
    z-index:-1;
  }

  .modal-aside .logo-placeholder {
    width:100%;
    min-height:40px;
    background:rgba(255,255,255,.96);
    border:1px solid rgba(255,255,255,.58);
    box-shadow:0 12px 28px rgba(0,0,0,.18);
    color:#001846;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:800;
    padding:10px 14px;
  }

  .modal-aside h2 {
    color:#fff;
    font-size:25px;
    font-weight:750;
    line-height:1.1;
    margin:28px 0 12px;
    text-shadow:0 2px 14px rgba(0,0,0,.28);
  }

  .modal-aside p {
    color:rgba(255,255,255,.96);
    font-size:14.5px;
    line-height:1.55;
    margin-bottom:20px;
    text-shadow:0 1px 10px rgba(0,0,0,.22);
  }

  .modal-benefits {
    display:grid;
    gap:10px;
    margin-top:22px;
    position:relative;
    z-index:2;
  }

  .modal-benefit {
    display:flex;
    gap:10px;
    align-items:flex-start;
    padding:10px;
    border:1px solid rgba(255,255,255,.18);
    border-radius:14px;
    background:rgba(255,255,255,.10);
    box-shadow:0 12px 28px rgba(0,0,0,.10);
    font-size:13.5px;
    line-height:1.35;
    color:#fff;
    backdrop-filter:blur(6px);
  }

  .modal-benefit i {
    width:18px;
    height:18px;
    border-radius:50%;
    background:rgba(176,23,79,.95);
    color:#fff;
    display:grid;
    place-items:center;
    flex:0 0 18px;
    font-style:normal;
    font-size:11px;
    font-weight:700;
    margin-top:1px;
  }

  .modal-main {
    padding:0;
    background:linear-gradient(180deg,#fff 0%, #fbfdff 100%);
  }

  .modal-head {
    padding:22px 24px 18px;
    border-bottom:1px solid var(--line);
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:18px;
  }

  .modal-head h2 {
    font-size:22px;
    font-weight:650;
    margin:0 0 5px;
    color:var(--navy);
  }

  .modal-head p {
    margin:0;
    color:var(--muted);
    font-size:14px;
  }

  .close {
    width:38px;
    height:38px;
    border-radius:9px;
    border:1px solid var(--line);
    background:#fff;
    color:var(--navy);
    font-size:22px;
    cursor:pointer;
    box-shadow:0 10px 18px rgba(0,32,96,.09), 0 2px 4px rgba(15,23,42,.06);
  }

  .close:hover {
    background:var(--soft);
  }

  .modal-body {
    padding:22px 24px 24px;
  }

  .steps {
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:8px;
    margin-bottom:18px;
  }

  .step {
    height:6px;
    border-radius:999px;
    background:var(--line);
    overflow:hidden;
  }

  .step.active {
    background:var(--green);
  }

  .form-grid {
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:11px;
  }

  .field label {
    display:block;
    font-size:12px;
    font-weight:650;
    color:var(--navy);
    margin-bottom:5px;
  }

  .field input,
  .field select {
    width:100%;
    min-height:42px;
    padding:9px 10px;
    border:1px solid var(--line);
    border-radius:10px;
    outline:none;
    background:#fff;
    font-size:13.5px;
    color:var(--ink);
  }

  .field input:focus,
  .field select:focus {
    border-color:var(--green);
    box-shadow:0 0 0 4px rgba(131,10,61,.10);
  }

  .question-group {
    background:var(--soft);
    border:1px solid var(--line);
    border-radius:15px;
    padding:14px;
    margin-bottom:11px;
  }

  .question-group h3 {
    font-size:14.5px;
    margin:0 0 9px;
    color:var(--navy);
  }

  .question {
    display:grid;
    grid-template-columns:1fr auto;
    gap:10px;
    align-items:center;
    background:#fff;
    border:1px solid var(--line);
    border-radius:12px;
    padding:10px 11px;
    margin:7px 0;
    font-size:13.5px;
  }

  .answers {
    display:flex;
    gap:6px;
    flex-wrap:wrap;
  }

  .answers label {
    border:1px solid var(--line);
    border-radius:999px;
    padding:6px 8px;
    font-size:11.5px;
    font-weight:650;
    color:var(--muted);
    cursor:pointer;
    user-select:none;
  }

  .answers input {
    display:none;
  }

  .answers label:has(input:checked) {
    background:var(--green);
    border-color:var(--green);
    color:#fff;
  }

  .modal-actions {
    display:flex;
    justify-content:space-between;
    gap:10px;
    margin-top:18px;
    padding-top:14px;
    border-top:1px solid var(--line);
  }

  .modal .btn {
    min-height:42px;
    border-radius:9px;
    padding:10px 16px;
    font-size:13.5px;
    font-weight:750;
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border:1px solid transparent;
    cursor:pointer;
    transition:.2s ease;
  }

  .modal .btn-primary {
    background:linear-gradient(135deg,#830A3D,#B0174F);
    color:#fff;
    box-shadow:0 14px 28px rgba(131,10,61,.24);
  }

  .modal .btn-primary:hover {
    transform:translateY(-1px);
  }

  .modal .btn-outline {
    background:#fff;
    color:#001846;
    border-color:var(--line);
  }

  .modal .btn-outline:hover {
    background:#f6f8fb;
  }

  .result-card {
    background:
      radial-gradient(circle at 50% 0%, rgba(131,10,61,.08), transparent 34%),
      linear-gradient(180deg,#fff 0%,#fbfdff 100%);
    border:1px solid var(--line);
    border-radius:18px;
    padding:24px;
    text-align:center;
    box-shadow:0 18px 40px rgba(0,24,70,.08);
  }

  .risk-meter-wrap {
    width:min(380px, 100%);
    margin:0 auto 28px;
    padding:18px 16px 22px;
    border-radius:24px;
    background:#fff;
    border:1px solid rgba(229,234,240,.95);
    box-shadow:
      0 24px 44px rgba(0,24,70,.10),
      inset 0 1px 0 rgba(255,255,255,.9);
  }

  .risk-meter {
    --risk-percent:0;
    --needle-angle:calc(-180deg + (var(--risk-percent) * 1.8deg));
    --needle-color:#8fd400;
    position:relative;
    width:min(320px, 78vw);
    height:198px;
    margin:0 auto;
    isolation:isolate;
  }

  .risk-meter.medium {
    --needle-color:#f4b424;
  }

  .risk-meter.high {
    --needle-color:#e54330;
  }

  .risk-meter-arc {
    position:absolute;
    left:50%;
    bottom:50px;
    width:290px;
    height:145px;
    transform:translateX(-50%);
    border-radius:290px 290px 0 0;
    background:
      conic-gradient(from 270deg at 50% 100%,
        #91db0b 0deg 58deg,
        #d7e624 58deg 92deg,
        #f6d72e 92deg 122deg,
        #f59a28 122deg 150deg,
        #e8442e 150deg 180deg,
        transparent 180deg 360deg);
    -webkit-mask:radial-gradient(circle at 50% 100%, transparent 0 56px, #000 57px);
    mask:radial-gradient(circle at 50% 100%, transparent 0 56px, #000 57px);
    box-shadow:inset 0 12px 28px rgba(255,255,255,.32);
  }

  .risk-meter-arc::before {
    content:"";
    position:absolute;
    inset:0;
    border-radius:300px 300px 0 0;
    background:linear-gradient(180deg,rgba(255,255,255,.48),rgba(255,255,255,0));
    pointer-events:none;
  }

  .risk-meter-base {
    position:absolute;
    left:50%;
    bottom:46px;
    width:140px;
    height:70px;
    transform:translateX(-50%);
    border-radius:140px 140px 0 0;
    background:#fff;
    z-index:2;
  }

  .risk-meter-needle {
    position:absolute;
    left:calc(50% - 11px);
    bottom:66px;
    width:116px;
    height:14px;
    border-radius:999px;
    background:linear-gradient(90deg,#273142 0 68%, var(--needle-color) 68% 100%);
    transform-origin:11px 50%;
    transform:rotate(var(--needle-angle));
    z-index:5;
    box-shadow:0 6px 12px rgba(31,41,55,.25);
    transition:transform .8s cubic-bezier(.2,.8,.2,1);
  }

  .risk-meter-hub {
    position:absolute;
    left:50%;
    bottom:55px;
    width:34px;
    height:34px;
    border-radius:50%;
    background:#fff;
    border:9px solid #273142;
    transform:translateX(-50%);
    z-index:7;
    box-shadow:0 7px 16px rgba(31,41,55,.28);
  }

  .risk-meter-label {
    position:absolute;
    z-index:4;
    font-size:9px;
    font-weight:800;
    letter-spacing:.08em;
    color:#9aa3af;
    text-transform:uppercase;
  }

  .risk-meter-label.low {
    left:18px;
    bottom:78px;
    transform:rotate(-70deg);
  }

  .risk-meter-label.medium {
    left:50%;
    top:3px;
    transform:translateX(-50%);
  }

  .risk-meter-label.high {
    right:16px;
    bottom:78px;
    transform:rotate(70deg);
  }

  .risk-note {
    position:absolute;
    left:50%;
    bottom:-12px;
    transform:translateX(-50%);
    z-index:8;
    min-width:184px;
    padding:10px 17px 10px;
    border-radius:20px;
    background:#fff;
    border:1px solid rgba(229,234,240,.95);
    box-shadow:
      0 16px 30px rgba(0,24,70,.14),
      inset 0 1px 0 rgba(255,255,255,.95);
  }

  .risk-note > span {
    display:block;
    color:#687589;
    font-size:11px;
    font-weight:850;
    text-transform:uppercase;
    letter-spacing:.08em;
    line-height:1;
    margin-bottom:5px;
  }

  .risk-note strong span {
    display:inline;
    color:inherit;
    font-size:inherit;
    font-weight:inherit;
    text-transform:none;
    letter-spacing:inherit;
    line-height:inherit;
    margin:0;
  }

  .risk-note strong {
    display:flex;
    justify-content:center;
    align-items:baseline;
    gap:4px;
    font-size:60px;
    line-height:.88;
    font-weight:950;
    letter-spacing:-.075em;
    color:#252b35;
  }

  .risk-note small {
    font-size:27px;
    font-weight:950;
    color:#252b35;
  }

  .risk-subcaption {
    margin-top:22px;
    color:#687589;
    font-size:12px;
    line-height:1.35;
  }

  .result-card h2 {
    color:var(--navy);
    font-size:24px;
    font-weight:750;
    margin:0 0 10px;
  }

  .result-card .lead {
    max-width:620px;
    color:#5d6878;
    font-size:15px;
    line-height:1.55;
    margin:0 auto 12px;
  }

  .result-note-card {
    text-align:left;
    border:1px solid var(--line);
    background:#fff;
    border-radius:14px;
    padding:14px 15px;
    box-shadow:0 12px 26px rgba(0,24,70,.06);
  }

  .result-note-card strong {
    display:block;
    color:var(--navy);
    font-size:14px;
    margin-bottom:4px;
  }

  .result-note-card .text-muted {
    color:var(--muted);
    font-size:13.5px;
    line-height:1.45;
  }

  @media (max-width:960px) {
    .modal-layout {
      grid-template-columns:1fr;
    }

    .modal-aside {
      display:none;
    }
  }

  @media (max-width:680px) {
    .modal {
      padding:10px;
    }

    .modal-card {
      border-radius:18px;
    }

    .modal-head,
    .modal-body {
      padding:18px;
    }

    .form-grid {
      grid-template-columns:1fr;
    }

    .question {
      grid-template-columns:1fr;
    }

    .modal-actions {
      flex-direction:column-reverse;
    }

    .modal-actions .btn {
      width:100%;
    }

    .risk-meter-wrap {
      padding:14px 8px 20px;
    }

    .risk-meter {
      width:280px;
      max-width:100%;
      height:192px;
    }

    .risk-meter-arc {
      width:252px;
      height:126px;
      bottom:50px;
    }

    .risk-meter-needle {
      width:104px;
      bottom:64px;
    }

    .risk-note {
      min-width:168px;
      padding:9px 15px 9px;
      bottom:-10px;
    }

    .risk-note strong {
      font-size:52px;
    }

    .risk-note small {
      font-size:23px;
    }
  }
</style>

<footer>
  <div class="wrap footer-grid">
    <div class="footer-logo">
      <img class="footer-brand-logo" src="logo/logo.png" alt="Crecer Acredita">
      <p>Transformamos el cumplimiento en confianza. Más de 20 años de experiencia respaldando soluciones de cumplimiento para empresas.</p>
    </div>

    <div>
      <h4>MENÚ PRINCIPAL</h4>
      <ul class="footer-menu">
        <?php foreach ($menuItems as $item): ?>
          <li>
            <a href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8') ?>">
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8') ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div>
      <h4>Contacto</h4>
      <a href="mailto:creceracredita@crecerconsultores.cl">creceracredita@crecerconsultores.cl</a>
      <a href="https://wa.me/56921816236" target="_blank" rel="noopener">+56 9 2181 6236</a>
      <span>Santiago, Chile</span>

      <div class="footer-access">
        <h4>Acceso interno</h4>
        <a class="footer-access-link" href="<?= htmlspecialchars($crmAccessUrl, ENT_QUOTES, 'UTF-8') ?>" aria-label="Acceder al CRM Crecer Acredita">
          CRM Crecer Acredita →
        </a>
      </div>
    </div>
  </div>
</footer>

<button class="floating-eval-btn" type="button" data-open-eval>
  Iniciar evaluación gratuita
</button>

<div class="modal" id="evalModal" aria-hidden="true">
  <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="evalTitle">
    <div class="modal-layout">

      <aside class="modal-aside">
        <span class="logo-placeholder" role="img" aria-label="Crecer Acredita">Crecer Acredita</span>

        <h2>Autoevaluación de Riesgo Crecer</h2>
        <p>Diagnóstico preliminar para identificar brechas laborales, previsionales, documentales y de seguridad.</p>

        <div class="modal-benefits">
          <div class="modal-benefit">
            <i>✓</i>
            <span>Resultado inmediato de 0 a 100 puntos.</span>
          </div>

          <div class="modal-benefit">
            <i>✓</i>
            <span>Semáforo de riesgo bajo, medio o alto.</span>
          </div>

          <div class="modal-benefit">
            <i>✓</i>
            <span>Recomendaciones generales de mejora.</span>
          </div>
        </div>
      </aside>

      <div class="modal-main">
        <div class="modal-head">
          <div>
            <h2 id="evalTitle">Evaluación gratuita</h2>
            <p>Completa los datos y responde el cuestionario. Tiempo estimado: menos de 5 minutos.</p>
          </div>

          <button class="close" id="closeModal" aria-label="Cerrar">×</button>
        </div>

        <div class="modal-body">
          <div class="steps">
            <span class="step active"></span>
            <span class="step" id="stepBar2"></span>
            <span class="step" id="stepBar3"></span>
          </div>

          <form id="riskForm">
            <div id="leadStep">
              <h3>1. Registro inicial</h3>

              <div class="form-grid">
                <div class="field">
                  <label>Nombre Empresa</label>
                  <input name="empresa" required>
                </div>

                <div class="field">
                  <label>RUT Empresa</label>
                  <input name="rut" required>
                </div>

                <div class="field">
                  <label>Nombre Contacto</label>
                  <input name="contacto" required>
                </div>

                <div class="field">
                  <label>Cargo</label>
                  <input name="cargo" required>
                </div>

                <div class="field">
                  <label>Correo Electrónico</label>
                  <input type="email" name="correo" required>
                </div>

                <div class="field">
                  <label>Teléfono</label>
                  <input name="telefono" required>
                </div>

                <div class="field">
                  <label>Cantidad de Trabajadores</label>
                  <input type="number" min="1" name="trabajadores" required>
                </div>

                <div class="field">
                  <label>Industria</label>
                  <select name="industria" required>
                    <option value="">Seleccionar</option>
                    <option>Minería</option>
                    <option>Construcción</option>
                    <option>Servicios</option>
                    <option>Industria</option>
                    <option>Otra</option>
                  </select>
                </div>

                <div class="field">
                  <label>Ciudad</label>
                  <input name="ciudad" required>
                </div>
              </div>

              <div class="modal-actions">
                <span></span>
                <button type="button" class="btn btn-primary" id="toQuestions">Continuar</button>
              </div>
            </div>

            <div id="questionsStep" style="display:none;">
              <h3>2. Cuestionario de autoevaluación</h3>
              <div id="questions"></div>

              <div class="modal-actions">
                <button type="button" class="btn btn-outline" id="backLead">Volver</button>
                <button type="submit" class="btn btn-primary">Ver resultado</button>
              </div>
            </div>

            <div id="resultStep" style="display:none;">
              <div class="result-card">

                <div class="risk-meter-wrap">
                  <div class="risk-meter" id="scoreCircle" role="img" aria-label="Nota final 0 de 100" style="--risk-percent:0;">
                    <span class="risk-meter-arc" aria-hidden="true"></span>
                    <span class="risk-meter-base" aria-hidden="true"></span>

                    <span class="risk-meter-label low">Bajo</span>
                    <span class="risk-meter-label medium">Medio</span>
                    <span class="risk-meter-label high">Alto</span>

                    <span class="risk-meter-needle" aria-hidden="true"></span>
                    <span class="risk-meter-hub" aria-hidden="true"></span>

                    <span class="risk-note">
                      <span>Nota final</span>
                      <strong><span id="scoreValue">0</span><small>%</small></strong>
                    </span>
                  </div>

                  <div class="risk-subcaption">Indicador visual del nivel de riesgo detectado</div>
                </div>

                <h2 id="riskTitle">Resultado</h2>
                <p id="riskMsg" class="lead"></p>

                <div id="specialMsg" style="margin:16px 0;"></div>

                <div style="display:flex; justify-content:center; gap:10px; flex-wrap:wrap;">
                  <a id="resultCta" class="btn btn-primary" href="contacto.php#contacto">Solicitar asesoría</a>
                  <button type="button" class="btn btn-outline" id="restartEval">Realizar nuevamente</button>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  const slides = [...document.querySelectorAll('.slide')];
  const dots = [...document.querySelectorAll('.dot')];
  let activeSlide = 0;

  function showSlide(i) {
    if (!slides.length || !dots.length || !slides[i] || !dots[i]) return;

    slides.forEach(s => s.classList.remove('active'));
    dots.forEach(d => d.classList.remove('active'));

    activeSlide = i;
    slides[i].classList.add('active');
    dots[i].classList.add('active');
  }

  if (slides.length && dots.length) {
    dots.forEach(dot => {
      dot.addEventListener('click', () => showSlide(Number(dot.dataset.slide)));
    });

    setInterval(() => {
      showSlide((activeSlide + 1) % slides.length);
    }, 6500);
  }

  const hamb = document.getElementById('hamb');
  const menu = document.getElementById('menu');

  if (hamb && menu) {
    hamb.addEventListener('click', () => {
      const visible = getComputedStyle(menu).display !== 'none';

      menu.style.display = visible ? 'none' : 'flex';
      menu.style.position = 'absolute';
      menu.style.left = '12px';
      menu.style.right = '12px';
      menu.style.top = '66px';
      menu.style.background = '#fff';
      menu.style.border = '1px solid var(--line)';
      menu.style.borderRadius = '14px';
      menu.style.padding = '10px';
      menu.style.flexDirection = 'column';
      menu.style.alignItems = 'stretch';
      menu.style.boxShadow = 'var(--shadow)';
    });
  }

  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const btn = item.querySelector('.accordion-btn');
    const panel = item.querySelector('.accordion-panel');

    if (!btn || !panel) return;

    if (item.classList.contains('active')) {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    }

    btn.addEventListener('click', () => {
      const parent = item.parentElement;

      parent.querySelectorAll('.accordion-item').forEach(other => {
        if (other !== item) {
          other.classList.remove('active');

          const otherPanel = other.querySelector('.accordion-panel');
          if (otherPanel) otherPanel.style.maxHeight = null;
        }
      });

      item.classList.toggle('active');
      panel.style.maxHeight = item.classList.contains('active') ? panel.scrollHeight + 'px' : null;
    });
  });

  const revealCards = document.querySelectorAll('.reveal-card');

  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold:0.16 });

    revealCards.forEach(card => revealObserver.observe(card));
  } else {
    revealCards.forEach(card => card.classList.add('is-visible'));
  }

  const parallaxCards = document.querySelectorAll('.js-parallax-card');

  function updateParallaxCards() {
    const vh = window.innerHeight || 800;

    parallaxCards.forEach(card => {
      const rect = card.getBoundingClientRect();
      const speed = Number(card.dataset.speed || 0.03);
      const progress = (rect.top - vh * 0.5) * speed;
      const y = Math.max(-18, Math.min(18, progress));

      card.style.setProperty('--parallax-y', y.toFixed(1) + 'px');
    });
  }

  window.addEventListener('scroll', updateParallaxCards, { passive:true });
  window.addEventListener('resize', updateParallaxCards);
  updateParallaxCards();

  const modal = document.getElementById('evalModal');

  if (modal) {
    document.querySelectorAll('[data-open-eval]').forEach(btn => {
      btn.addEventListener('click', () => {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
      });
    });

    const closeBtn = document.getElementById('closeModal');

    if (closeBtn) {
      closeBtn.addEventListener('click', closeModal);
    }

    modal.addEventListener('click', e => {
      if (e.target === modal) closeModal();
    });

    document.addEventListener('keydown', e => {
      if (e.key === 'Escape' && modal.classList.contains('open')) {
        closeModal();
      }
    });

    function closeModal() {
      modal.classList.remove('open');
      modal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    const modules = [
      {
        title:'Cumplimiento Laboral · 30%',
        weight:.30,
        qs:[
          '¿Todos los trabajadores cuentan con contrato firmado?',
          '¿Los anexos de contrato se encuentran actualizados?',
          '¿La empresa mantiene registro de asistencia actualizado?',
          '¿Las liquidaciones de sueldo se encuentran disponibles y respaldadas?',
          '¿Existe control documental de la información laboral?'
        ]
      },
      {
        title:'Cumplimiento Previsional · 25%',
        weight:.25,
        qs:[
          '¿Las cotizaciones previsionales se pagan oportunamente?',
          '¿La empresa dispone de respaldo de pagos previsionales?',
          '¿Cuenta con certificados previsionales vigentes?',
          '¿Existe control periódico de obligaciones previsionales?'
        ]
      },
      {
        title:'Seguridad y Salud Ocupacional · 25%',
        weight:.25,
        qs:[
          '¿Los trabajadores cuentan con ODI?',
          '¿Se realizan inducciones formales?',
          '¿Existe registro de entrega de EPP?',
          '¿Los exámenes ocupacionales se encuentran vigentes?',
          '¿La empresa mantiene registros de capacitación?'
        ]
      },
      {
        title:'Control Documental · 10%',
        weight:.10,
        qs:[
          '¿La documentación requerida se encuentra vigente?',
          '¿Existe seguimiento de vencimientos?',
          '¿Hay responsables asignados para el control documental?'
        ]
      },
      {
        title:'Gestión de Contratistas · 10%',
        weight:.10,
        qs:[
          '¿La empresa cuenta con procedimientos de gestión de contratistas?',
          '¿Se realizan revisiones periódicas de cumplimiento?',
          '¿Existe seguimiento de observaciones y hallazgos?'
        ]
      }
    ];

    const assessmentEndpoint = 'public/api/assessment/store';

    function questionId(moduleIndex, questionIndex) {
      return modules
        .slice(0, moduleIndex)
        .reduce((total, module) => total + module.qs.length, 0) + questionIndex + 1;
    }

    const qWrap = document.getElementById('questions');

    if (qWrap) {
      qWrap.innerHTML = modules.map((m, mi) => `
        <section class="question-group">
          <h3>${m.title}</h3>
          ${m.qs.map((q, qi) => `
            <div class="question">
              <span>${q}</span>
              <div class="answers">
                <label>
                  <input type="radio" name="m${mi}q${qi}" data-question-id="${questionId(mi, qi)}" value="10" required>
                  <span>Sí</span>
                </label>
                <label>
                  <input type="radio" name="m${mi}q${qi}" data-question-id="${questionId(mi, qi)}" value="5" required>
                  <span>Parcial</span>
                </label>
                <label>
                  <input type="radio" name="m${mi}q${qi}" data-question-id="${questionId(mi, qi)}" value="0" required>
                  <span>No</span>
                </label>
              </div>
            </div>
          `).join('')}
        </section>
      `).join('');
    }

    const leadStep = document.getElementById('leadStep');
    const questionsStep = document.getElementById('questionsStep');
    const resultStep = document.getElementById('resultStep');
    const stepBar2 = document.getElementById('stepBar2');
    const stepBar3 = document.getElementById('stepBar3');
    const toQuestionsBtn = document.getElementById('toQuestions');
    const backLeadBtn = document.getElementById('backLead');
    const riskForm = document.getElementById('riskForm');
    const restartEvalBtn = document.getElementById('restartEval');

    if (toQuestionsBtn && leadStep && questionsStep && stepBar2) {
      toQuestionsBtn.addEventListener('click', () => {
        const required = [...leadStep.querySelectorAll('[required]')];

        if (!required.every(i => i.reportValidity())) return;

        leadStep.style.display = 'none';
        questionsStep.style.display = 'block';
        stepBar2.classList.add('active');
      });
    }

    if (backLeadBtn && leadStep && questionsStep && stepBar2) {
      backLeadBtn.addEventListener('click', () => {
        questionsStep.style.display = 'none';
        leadStep.style.display = 'block';
        stepBar2.classList.remove('active');
      });
    }

    if (riskForm) {
      riskForm.addEventListener('submit', async e => {
        e.preventDefault();

        const submitButton = e.target.querySelector('button[type="submit"]');
        const originalSubmitText = submitButton ? submitButton.textContent : '';

        if (submitButton) {
          submitButton.disabled = true;
          submitButton.textContent = 'Guardando...';
        }

        try {
          const formData = new FormData(e.target);
          const answers = {};

          modules.forEach((m, mi) => {
            m.qs.forEach((_, qi) => {
              const selected = document.querySelector(`input[name="m${mi}q${qi}"]:checked`);

              if (selected) {
                answers[questionId(mi, qi)] = Number(selected.value);
              }
            });
          });

          const payload = {
            company_name: formData.get('empresa') || '',
            company_rut: formData.get('rut') || '',
            contact_name: formData.get('contacto') || '',
            position: formData.get('cargo') || '',
            email: formData.get('correo') || '',
            phone: formData.get('telefono') || '',
            workers_count: formData.get('trabajadores') || '',
            industry: formData.get('industria') || '',
            city: formData.get('ciudad') || '',
            answers
          };

          const response = await fetch(assessmentEndpoint, {
            method:'POST',
            headers:{
              'Content-Type':'application/json',
              'Accept':'application/json'
            },
            body:JSON.stringify(payload)
          });

          const saved = await response.json();

          if (!response.ok || !saved.success) {
            throw new Error(saved.message || 'No fue posible guardar la autoevaluación.');
          }

          const final = Math.max(0, Math.min(100, Math.round(Number(saved.final_score || 0))));
          const result = buildResult(final, payload.industry, saved.recommendation, saved.risk_level);

          const riskPercent = Math.max(0, Math.min(100, 100 - final));

          localStorage.setItem('crecerAcreditaLead', JSON.stringify({
            ...payload,
            client_id:saved.client_id,
            puntaje:final,
            nivel:saved.risk_level,
            fecha:new Date().toISOString()
          }));

          const scoreCircle = document.getElementById('scoreCircle');

          if (scoreCircle) {
            scoreCircle.className = 'risk-meter ' + result.className;
            scoreCircle.style.setProperty('--risk-percent', riskPercent);
            scoreCircle.setAttribute('aria-label', `Nota final ${final} de 100. ${result.title}`);
          }

          document.getElementById('scoreValue').textContent = final;
          document.getElementById('riskTitle').textContent = result.title;
          document.getElementById('riskMsg').textContent = result.message;
          document.getElementById('resultCta').textContent = result.cta;
          document.getElementById('resultCta').href = result.href;
          document.getElementById('specialMsg').innerHTML = result.extra;

          questionsStep.style.display = 'none';
          resultStep.style.display = 'block';
          stepBar3.classList.add('active');
        } catch (error) {
          alert(error.message || 'No fue posible guardar la autoevaluación en el CRM.');
        } finally {
          if (submitButton) {
            submitButton.disabled = false;
            submitButton.textContent = originalSubmitText;
          }
        }
      });
    }

    function buildResult(score, industry, serverRecommendation = null, serverRiskLevel = null) {
      let r;

      if (score >= 85) {
        r = {
          className:'',
          title:'Riesgo bajo',
          message:'Tu empresa presenta un adecuado nivel de cumplimiento y control. Se recomienda mantener los controles actuales y avanzar hacia procesos de mejora continua.',
          cta:'Quiero conocer el Sello Crecer',
          href:'sello-crecer.php#sello',
          extra:`
            <div class="result-note-card">
              <strong>Tu organización demuestra un alto nivel de cumplimiento.</strong>
              <span class="text-muted">Te invitamos a conocer los beneficios del Sello Crecer y diferenciarte frente a tus clientes y empresas mandantes.</span>
            </div>
          `
        };
      } else if (score >= 60) {
        r = {
          className:'medium',
          title:'Riesgo medio',
          message:'Se identifican oportunidades de mejora que podrían transformarse en incumplimientos futuros. Se recomienda fortalecer los procesos de control y cumplimiento.',
          cta:'Solicitar asesoría',
          href:'contacto.php#contacto',
          extra:''
        };
      } else {
        r = {
          className:'high',
          title:'Riesgo alto',
          message:'Se detectan brechas relevantes que podrían generar riesgos laborales, previsionales o documentales. Se recomienda implementar un plan de regularización y apoyo especializado.',
          cta:'Agendar reunión con un especialista',
          href:'contacto.php#contacto',
          extra:''
        };
      }

      if (serverRiskLevel) {
        r.title = serverRiskLevel;
      }

      if (serverRecommendation) {
        r.message = serverRecommendation;
      }

      if ((industry || '').toLowerCase().includes('minería')) {
        r.href = 'mineria.php#mineria';
        r.extra += `
          <div class="result-note-card" style="margin-top:10px;">
            <strong>Crecer Acredita Minería.</strong>
            <span class="text-muted">Conoce nuestra línea especializada para empresas que prestan servicios a compañías mineras y requieren altos estándares de acreditación y control documental.</span>
          </div>
        `;
      }

      return r;
    }

    if (restartEvalBtn) {
      restartEvalBtn.addEventListener('click', () => {
        riskForm.reset();

        resultStep.style.display = 'none';
        leadStep.style.display = 'block';

        stepBar2.classList.remove('active');
        stepBar3.classList.remove('active');

        const scoreCircle = document.getElementById('scoreCircle');

        if (scoreCircle) {
          scoreCircle.className = 'risk-meter';
          scoreCircle.style.setProperty('--risk-percent', 0);
        }

        document.getElementById('scoreValue').textContent = '0';
      });
    }
  }
</script>
