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
  /* Shared site chrome: this include owns the footer styling for every page. */
  footer { background:#001846 !important; color:rgba(255,255,255,.74) !important; padding:32px 0 !important; }
  .footer-grid { display:grid !important; grid-template-columns:1.2fr .8fr .8fr !important; gap:22px !important; }
  .footer-brand-logo { width:220px !important; height:auto !important; margin-bottom:10px !important; padding:8px !important; background:#fff !important; border:1px solid rgba(255,255,255,.12) !important; border-radius:12px !important; display:block !important; }
  .footer-logo .logo-placeholder,
  .footer-logo-placeholder { width:220px !important; min-height:52px !important; margin-bottom:10px !important; padding:8px 14px !important; background:#fff !important; border:1px solid rgba(255,255,255,.12) !important; border-radius:12px !important; color:var(--navy) !important; display:flex !important; align-items:center !important; justify-content:center !important; font-size:18px !important; font-weight:750 !important; letter-spacing:-.01em !important; text-align:center !important; text-transform:none !important; }
  footer h4 { color:#fff !important; margin:0 0 8px !important; font-size:14.5px !important; font-weight:650 !important; }
  footer a { display:block !important; margin:5px 0 !important; color:rgba(255,255,255,.74) !important; text-decoration:none !important; }
  footer a:hover { color:#fff !important; }
  footer span { display:block !important; margin:5px 0 !important; }
  .footer-access { margin-top:14px !important; padding-top:12px !important; border-top:1px solid rgba(255,255,255,.14) !important; }
  .footer-access-link { display:inline-flex !important; align-items:center !important; gap:8px !important; width:auto !important; margin-top:8px !important; padding:9px 12px !important; border:1px solid rgba(255,255,255,.22) !important; border-radius:999px !important; background:rgba(255,255,255,.06) !important; color:#fff !important; font-weight:650 !important; }
  .footer-access-link:hover { background:#830A3D !important; border-color:#830A3D !important; color:#fff !important; }
  .footer-menu { margin:0 !important; padding:0 !important; list-style:none !important; }
  .footer-menu li { margin:5px 0 !important; }
  .footer-menu a { display:block !important; }
  @media (max-width: 900px) { .footer-grid { grid-template-columns:1fr !important; } }
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
          <li><a href="<?= $item['href'] ?>"><?= $item['label'] ?></a></li>
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
        <a class="footer-access-link" href="<?= $crmAccessUrl ?>" aria-label="Acceder al CRM Crecer Acredita">CRM Crecer Acredita →</a>
      </div>
    </div>
  </div>
</footer>

<style>
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
  }
  .floating-eval-btn:hover { transform:translateY(-2px) !important; }
  @media (max-width:680px) {
    .floating-eval-btn { left:14px !important; right:14px !important; bottom:14px !important; width:calc(100% - 28px) !important; justify-content:center !important; }
    body { padding-bottom:72px; }
  }

    /* MODAL PREMIUM */
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
    .modal.open { display:block; }
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
    .modal-aside img {
      width:190px;
      background:#fff;
      border-radius:12px;
      padding:4px;
      margin-bottom:28px;
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
    .modal-aside .logo-placeholder {
      width:100%;
      min-height:40px;
      background:rgba(255,255,255,.96);
      border-color:rgba(255,255,255,.58);
      box-shadow:0 12px 28px rgba(0,0,0,.18);
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
    .close:hover { background:var(--soft); }
    .modal-body { padding:22px 24px 24px; }
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
    .step.active { background:var(--green); }
    .form-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:11px; }
    .field label {
      display:block;
      font-size:12px;
      font-weight:650;
      color:var(--navy);
      margin-bottom:5px;
    }
    .field input, .field select {
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
    .field input:focus, .field select:focus {
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
      margin-bottom:9px;
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
    .answers { display:flex; gap:6px; flex-wrap:wrap; }
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
    .answers input { display:none; }
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
    .result-card {
      background:#fff;
      border:1px solid var(--line);
      border-radius:18px;
      padding:24px;
      text-align:center;
    }
    .score {
      --score-percent:0;
      --needle-angle:calc(-90deg + (var(--score-percent) * 1.8deg));
      --risk-color:#74c900;
      position:relative;
      width:min(250px, 82vw);
      height:154px;
      margin:0 auto 18px;
      color:var(--ink);
      filter:drop-shadow(0 16px 22px rgba(0,32,96,.12));
    }
    .score.medium { --risk-color:#f3c623; }
    .score.high { --risk-color:#ee432f; }
    .score::before {
      content:"";
      position:absolute;
      left:0;
      right:0;
      bottom:0;
      height:125px;
      border-radius:125px 125px 0 0;
      background:
        conic-gradient(from 270deg at 50% 100%,
          #b9ef00 0deg 64deg,
          #f2df25 64deg 116deg,
          #f59d26 116deg 150deg,
          #e9442e 150deg 180deg,
          transparent 180deg 360deg);
      -webkit-mask:radial-gradient(circle at 50% 100%, transparent 0 49px, #000 50px);
      mask:radial-gradient(circle at 50% 100%, transparent 0 49px, #000 50px);
    }
    .score::after {
      content:"";
      position:absolute;
      left:50%;
      bottom:39px;
      width:97px;
      height:12px;
      border-radius:999px;
      background:linear-gradient(90deg, #253041 0 64%, var(--risk-color) 64% 100%);
      transform-origin:7px 50%;
      transform:rotate(var(--needle-angle));
      box-shadow:0 5px 10px rgba(23,32,51,.22);
    }
    .score-label {
      position:absolute;
      bottom:54px;
      font-size:9px;
      font-weight:700;
      letter-spacing:.05em;
      color:#9aa3af;
      text-transform:uppercase;
    }
    .score-label.low { left:20px; transform:rotate(-72deg); }
    .score-label.medium { left:50%; top:5px; bottom:auto; transform:translateX(-50%); }
    .score-label.high { right:18px; transform:rotate(72deg); }
    .score-needle-hub {
      position:absolute;
      left:50%;
      bottom:33px;
      width:30px;
      height:30px;
      border-radius:50%;
      background:#fff;
      border:8px solid #243042;
      transform:translateX(-50%);
      z-index:2;
      box-shadow:0 5px 11px rgba(23,32,51,.25);
    }
    .score-value {
      position:absolute;
      left:50%;
      bottom:0;
      transform:translateX(-50%);
      display:flex;
      align-items:baseline;
      gap:3px;
      font-size:34px;
      line-height:1;
      font-weight:800;
      color:#3f3f3f;
      letter-spacing:-.04em;
      z-index:3;
    }
    .score-value small {
      font-size:16px;
      font-weight:800;
      color:inherit;
    }
    .score-caption {
      position:absolute;
      left:50%;
      bottom:-23px;
      transform:translateX(-50%);
      font-size:25px;
      line-height:1;
      font-weight:900;
      letter-spacing:-.06em;
      color:#3f3f3f;
      text-transform:uppercase;
    }
    @media (max-width:960px) {
      .modal-layout { grid-template-columns:1fr; }
      .modal-aside { display:none; }
    }
    @media (max-width:680px) {
      .modal { padding:10px; }
      .modal-head, .modal-body { padding:18px; }
      .question { grid-template-columns:1fr; }
      .modal-actions { flex-direction:column-reverse; }
      .modal-actions .btn { width:100%; }
    }
</style>
<button class="floating-eval-btn" type="button" data-open-eval>Iniciar evaluación gratuita</button>
  <div class="modal" id="evalModal" aria-hidden="true">
    <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="evalTitle">
      <div class="modal-layout">
        <aside class="modal-aside">
          <span class="logo-placeholder" role="img" aria-label="Crecer Acredita">Crecer Acredita</span>
          <h2>Autoevaluación de Riesgo Crecer</h2>
          <p>Diagnóstico preliminar para identificar brechas laborales, previsionales, documentales y de seguridad.</p>
          <div class="modal-benefits">
            <div class="modal-benefit"><i>✓</i><span>Resultado inmediato de 0 a 100 puntos.</span></div>
            <div class="modal-benefit"><i>✓</i><span>Semáforo de riesgo bajo, medio o alto.</span></div>
            <div class="modal-benefit"><i>✓</i><span>Recomendaciones generales de mejora.</span></div>
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
            <div class="steps"><span class="step active"></span><span class="step" id="stepBar2"></span><span class="step" id="stepBar3"></span></div>

            <form id="riskForm">
              <div id="leadStep">
                <h3>1. Registro inicial</h3>
                <div class="form-grid">
                  <div class="field"><label>Nombre Empresa</label><input name="empresa" required></div>
                  <div class="field"><label>RUT Empresa</label><input name="rut" required></div>
                  <div class="field"><label>Nombre Contacto</label><input name="contacto" required></div>
                  <div class="field"><label>Cargo</label><input name="cargo" required></div>
                  <div class="field"><label>Correo Electrónico</label><input type="email" name="correo" required></div>
                  <div class="field"><label>Teléfono</label><input name="telefono" required></div>
                  <div class="field"><label>Cantidad de Trabajadores</label><input type="number" min="1" name="trabajadores" required></div>
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
                  <div class="field"><label>Ciudad</label><input name="ciudad" required></div>
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
                  <div class="score" id="scoreCircle" role="img" aria-label="Puntaje final 0 de 100" style="--score-percent:0;">
                    <span class="score-label low">Bajo</span>
                    <span class="score-label medium">Medio</span>
                    <span class="score-label high">Alto</span>
                    <span class="score-needle-hub" aria-hidden="true"></span>
                    <span class="score-value"><span id="scoreValue">0</span><small>%</small></span>
                    <span class="score-caption">Risk</span>
                  </div>
                  <h2 id="riskTitle" style="margin-bottom:10px;">Resultado</h2>
                  <p id="riskMsg" class="lead" style="margin-inline:auto;"></p>
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
      slides.forEach(s => s.classList.remove('active'));
      dots.forEach(d => d.classList.remove('active'));
      activeSlide = i;
      slides[i].classList.add('active');
      dots[i].classList.add('active');
    }

    dots.forEach(dot => dot.addEventListener('click', () => showSlide(Number(dot.dataset.slide))));
    setInterval(() => showSlide((activeSlide + 1) % slides.length), 6500);

    const hamb = document.getElementById('hamb');
    const menu = document.getElementById('menu');
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



    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
      const btn = item.querySelector('.accordion-btn');
      const panel = item.querySelector('.accordion-panel');
      if (item.classList.contains('active')) panel.style.maxHeight = panel.scrollHeight + 'px';
      btn.addEventListener('click', () => {
        const parent = item.parentElement;
        parent.querySelectorAll('.accordion-item').forEach(other => {
          if (other !== item) {
            other.classList.remove('active');
            other.querySelector('.accordion-panel').style.maxHeight = null;
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
    document.querySelectorAll('[data-open-eval]').forEach(btn => btn.addEventListener('click', () => {
      modal.classList.add('open');
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    }));
    document.getElementById('closeModal').addEventListener('click', closeModal);
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });

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
      return modules.slice(0, moduleIndex).reduce((total, module) => total + module.qs.length, 0) + questionIndex + 1;
    }

    const qWrap = document.getElementById('questions');
    qWrap.innerHTML = modules.map((m, mi) => `
      <section class="question-group">
        <h3>${m.title}</h3>
        ${m.qs.map((q, qi) => `
          <div class="question">
            <span>${q}</span>
            <div class="answers">
              <label><input type="radio" name="m${mi}q${qi}" data-question-id="${questionId(mi, qi)}" value="10" required><span>Sí</span></label>
              <label><input type="radio" name="m${mi}q${qi}" data-question-id="${questionId(mi, qi)}" value="5" required><span>Parcial</span></label>
              <label><input type="radio" name="m${mi}q${qi}" data-question-id="${questionId(mi, qi)}" value="0" required><span>No</span></label>
            </div>
          </div>
        `).join('')}
      </section>
    `).join('');

    const leadStep = document.getElementById('leadStep');
    const questionsStep = document.getElementById('questionsStep');
    const resultStep = document.getElementById('resultStep');
    const stepBar2 = document.getElementById('stepBar2');
    const stepBar3 = document.getElementById('stepBar3');

    document.getElementById('toQuestions').addEventListener('click', () => {
      const required = [...leadStep.querySelectorAll('[required]')];
      if (!required.every(i => i.reportValidity())) return;
      leadStep.style.display = 'none';
      questionsStep.style.display = 'block';
      stepBar2.classList.add('active');
    });

    document.getElementById('backLead').addEventListener('click', () => {
      questionsStep.style.display = 'none';
      leadStep.style.display = 'block';
      stepBar2.classList.remove('active');
    });

    document.getElementById('riskForm').addEventListener('submit', async e => {
      e.preventDefault();
      const submitButton = e.target.querySelector('button[type="submit"]');
      const originalSubmitText = submitButton.textContent;
      submitButton.disabled = true;
      submitButton.textContent = 'Guardando...';

      try {
        const formData = new FormData(e.target);
        const answers = {};

        modules.forEach((m, mi) => {
          m.qs.forEach((_, qi) => {
            const selected = document.querySelector(`input[name="m${mi}q${qi}"]:checked`);
            if (selected) answers[questionId(mi, qi)] = Number(selected.value);
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
          method: 'POST',
          headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
          body: JSON.stringify(payload)
        });
        const saved = await response.json();

        if (!response.ok || !saved.success) {
          throw new Error(saved.message || 'No fue posible guardar la autoevaluación.');
        }

        const final = Math.round(Number(saved.final_score));
        const result = buildResult(final, payload.industry, saved.recommendation, saved.risk_level);

        localStorage.setItem('crecerAcreditaLead', JSON.stringify({
          ...payload,
          client_id:saved.client_id,
          puntaje:final,
          nivel:saved.risk_level,
          fecha:new Date().toISOString()
        }));

        const scoreCircle = document.getElementById('scoreCircle');
        scoreCircle.className = 'score ' + result.className;
        scoreCircle.style.setProperty('--score-percent', 100 - final);
        scoreCircle.setAttribute('aria-label', `Puntaje final ${final} de 100`);
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
        submitButton.disabled = false;
        submitButton.textContent = originalSubmitText;
      }
    });

    function buildResult(score, industry, serverRecommendation = null, serverRiskLevel = null) {
      let r;

      if (score >= 85) {
        r = {
          className:'',
          title:'Riesgo bajo',
          message:'Tu empresa presenta un adecuado nivel de cumplimiento y control. Se recomienda mantener los controles actuales y avanzar hacia procesos de mejora continua.',
          cta:'Quiero conocer el Sello Crecer',
          href:'sello-crecer.php#sello',
          extra:'<div class="card" style="text-align:left;"><strong>Tu organización demuestra un alto nivel de cumplimiento.</strong><br><span class="text-muted">Te invitamos a conocer los beneficios del Sello Crecer y diferenciarte frente a tus clientes y empresas mandantes.</span></div>'
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

      if (serverRiskLevel) r.title = serverRiskLevel;
      if (serverRecommendation) r.message = serverRecommendation;

      if ((industry || '').toLowerCase().includes('minería')) {
        r.href = 'mineria.php#mineria';
        r.extra += '<div class="card" style="text-align:left; margin-top:10px;"><strong>Crecer Acredita Minería.</strong><br><span class="text-muted">Conoce nuestra línea especializada para empresas que prestan servicios a compañías mineras y requieren altos estándares de acreditación y control documental.</span></div>';
      }

      return r;
    }

    document.getElementById('restartEval').addEventListener('click', () => {
      document.getElementById('riskForm').reset();
      resultStep.style.display = 'none';
      leadStep.style.display = 'block';
      stepBar2.classList.remove('active');
      stepBar3.classList.remove('active');
    });
    }
  </script>
