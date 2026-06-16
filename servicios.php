<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Servicios | Crecer Acredita</title>
  <meta name="description" content="Servicios de Crecer Acredita." />
  <meta name="theme-color" content="#002060" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;450;500;600;700&display=swap" rel="stylesheet">
  <style>
:root{
  --navy:#002060;
  --navy-dark:#001846;
  --navy-2:#173B78;
  --green:#830A3D;
  --green-2:#A3164E;
  --mustard:#B0174F;
  --ink:#172033;
  --muted:#667386;
  --line:#E3E9F2;
  --soft:#F7F9FC;
  --soft-2:#EEF4FA;
  --white:#FFFFFF;
  --shadow:0 14px 36px rgba(0,32,96,.10);
  --shadow-sm:0 7px 22px rgba(0,32,96,.07);
  --radius:16px;
  --max:1140px;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  margin:0;
  font-family:'Inter',Arial,sans-serif;
  color:var(--ink);
  background:#fff;
  line-height:1.5;
  font-size:15px;
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
  text-rendering:optimizeLegibility;
}
img{max-width:100%;display:block}
a{color:inherit;text-decoration:none}
button,input,textarea,select{font:inherit}
.wrap{width:min(var(--max),calc(100% - 34px));margin-inline:auto}
.section{padding:56px 0;position:relative}
.section-soft{background:var(--soft)}
.section-tight{padding:42px 0}
.eyebrow{
  display:inline-flex;align-items:center;gap:9px;
  font-size:10.5px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;
  color:var(--green);margin-bottom:9px
}
.eyebrow:before{content:"";width:22px;height:2px;background:var(--mustard);border-radius:2px;display:block}
h1,h2,h3,p{margin-top:0}
h1{
  font-size:clamp(29px,4vw,42px);
  line-height:1.04;letter-spacing:-.038em;font-weight:650;color:var(--navy);
  margin-bottom:14px;max-width:760px
}
h2{
  font-size:clamp(22px,2.7vw,29px);
  line-height:1.1;letter-spacing:-.026em;font-weight:650;color:var(--navy);
  margin-bottom:11px;max-width:780px
}
h3{font-size:15.5px;line-height:1.25;letter-spacing:-.01em;font-weight:650;color:var(--navy);margin-bottom:7px}
p:last-child{margin-bottom:0}
.lead{font-size:clamp(14.5px,1.5vw,16px);color:var(--muted);max-width:720px;margin-bottom:17px}
.text-muted{color:var(--muted)}
.divider{height:1px;background:var(--line);margin:22px 0}
.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:8px;
  min-height:40px;padding:9px 15px;border-radius:9px;border:1px solid transparent;
  font-size:13.5px;font-weight:650;cursor:pointer;transition:.2s ease;white-space:nowrap
}
.btn:hover{transform:translateY(-1px)}
.btn-primary{background:var(--green);color:#fff;box-shadow:0 12px 22px rgba(131,10,61,.22),0 2px 5px rgba(15,23,42,.10)}
.btn-outline{background:#fff;color:var(--navy);border-color:var(--line);box-shadow:0 10px 18px rgba(0,32,96,.09),0 2px 4px rgba(15,23,42,.06)}
.btn-navy{background:var(--navy);color:#fff;box-shadow:0 12px 22px rgba(0,32,96,.22),0 2px 5px rgba(15,23,42,.10)}
.btn-mustard{background:var(--mustard);color:#fff;box-shadow:0 12px 22px rgba(176,23,79,.22),0 2px 5px rgba(15,23,42,.10)}
.topbar{background:var(--navy-dark);color:rgba(255,255,255,.78);font-size:12px;border-bottom:1px solid rgba(255,255,255,.10)}
.topbar .wrap{display:flex;justify-content:space-between;align-items:center;gap:12px;padding:7px 0}
.topbar strong{color:#fff;font-weight:650}
.header{
  position:sticky;top:0;z-index:80;background:rgba(255,255,255,.95);
  backdrop-filter:blur(14px);border-bottom:1px solid rgba(227,233,242,.95)
}
.nav{height:68px;display:flex;align-items:center;justify-content:space-between;gap:18px}
.brand{display:flex;align-items:center;justify-content:flex-start;flex:0 0 228px;min-width:0}
.brand-mark{display:flex;align-items:center;justify-content:flex-start;width:214px;height:48px;overflow:hidden}
.brand-mark img{width:214px;height:auto;max-height:48px;object-fit:contain;object-position:left center;filter:drop-shadow(0 2px 3px rgba(0,32,96,.05))}
.brand-placeholder{width:214px;height:48px;border-radius:10px;background:linear-gradient(135deg,var(--navy),var(--green));color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;letter-spacing:.02em;box-shadow:0 2px 3px rgba(0,32,96,.05)}
.menu{display:flex;align-items:center;gap:1px;list-style:none;padding:0;margin:0}
.menu a{display:block;padding:8px 9px;border-radius:9px;font-size:12.8px;font-weight:600;color:#29364E}
.menu a:hover,.menu a.active{background:var(--soft);color:var(--navy)}
.nav-actions{display:flex;align-items:center;gap:8px}
.hamb{display:none;background:#fff;border:1px solid var(--line);border-radius:9px;padding:8px 10px;color:var(--navy);cursor:pointer;box-shadow:0 10px 18px rgba(0,32,96,.09),0 2px 4px rgba(15,23,42,.06)}
.page-hero{
  position:relative;overflow:hidden;color:#fff;
  background:
    linear-gradient(90deg,rgba(0,24,70,.96),rgba(0,32,96,.82)),
    var(--hero-img);
  background-size:cover;background-position:center;background-attachment:fixed;
  padding:72px 0 64px
}
.page-hero:after{
  content:"";position:absolute;right:-120px;top:-80px;width:310px;height:310px;border-radius:50%;
  border:42px solid rgba(176,23,79,.15)
}
.page-hero h1{color:#fff}
.page-hero .lead{color:rgba(255,255,255,.78)}
.hero-actions{display:flex;gap:10px;flex-wrap:wrap;margin-top:20px}
.grid-2{display:grid;grid-template-columns:1fr 1fr;gap:26px;align-items:start}
.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
.card{background:#fff;border:1px solid var(--line);border-radius:var(--radius);box-shadow:var(--shadow-sm);padding:20px}
.card-feature{
  background:#fff;border:1px solid var(--line);border-radius:20px;box-shadow:var(--shadow);padding:26px;
  position:relative;overflow:hidden
}
.card-feature:before{content:"";position:absolute;inset:0 0 auto 0;height:4px;background:linear-gradient(90deg,var(--green),var(--mustard),var(--navy))}
.icon{
  width:42px;height:42px;border-radius:13px;display:grid;place-items:center;color:var(--green);
  background:linear-gradient(135deg,rgba(131,10,61,.10),rgba(176,23,79,.14));margin-bottom:13px
}
.icon svg{width:22px;height:22px;stroke:currentColor;stroke-width:1.9;fill:none;stroke-linecap:round;stroke-linejoin:round}
.image-card{border-radius:20px;overflow:hidden;min-height:420px;box-shadow:var(--shadow);position:relative;background:#ddd}
.image-card img{width:100%;height:100%;object-fit:cover;position:absolute;inset:0}
.image-card:after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,32,96,0) 35%,rgba(0,32,96,.85) 100%)}
.image-card-caption{position:absolute;z-index:2;inset:auto 0 0 0;padding:22px;color:#fff}
.image-card-caption strong{display:block;margin-bottom:4px;font-weight:650}
.image-card-caption span{color:rgba(255,255,255,.80);font-size:13px}
.values-list{display:grid;grid-template-columns:repeat(5,1fr);gap:12px}
.value{background:#fff;border:1px solid var(--line);border-radius:15px;padding:18px;box-shadow:var(--shadow-sm)}
.value b{display:block;color:var(--navy);margin-bottom:5px;font-weight:650}
.timeline{display:grid;gap:12px}
.timeline-item{display:grid;grid-template-columns:40px 1fr;gap:12px;align-items:start}
.timeline-num{width:40px;height:40px;border-radius:50%;background:var(--navy);color:#fff;display:grid;place-items:center;font-size:13px;font-weight:700;box-shadow:0 8px 16px rgba(0,32,96,.14)}
.timeline-body{background:#fff;border:1px solid var(--line);border-radius:15px;padding:16px;box-shadow:var(--shadow-sm)}
.service-card{
  background:#fff;border:1px solid var(--line);border-radius:15px;padding:20px;box-shadow:var(--shadow-sm);
  position:relative;overflow:hidden;min-height:270px
}
.service-card:before{content:"";position:absolute;inset:0 0 auto 0;height:4px;background:linear-gradient(90deg,var(--green),var(--mustard))}
.service-card ul{padding-left:18px;color:var(--muted);margin:12px 0 0}
.service-card li{margin:5px 0}
.accordion{display:grid;gap:10px;margin-top:18px}
.accordion-item{background:#fff;border:1px solid var(--line);border-radius:15px;overflow:hidden;box-shadow:var(--shadow-sm)}
.accordion-btn{
  width:100%;border:0;background:#fff;cursor:pointer;padding:16px 18px;display:flex;
  align-items:center;justify-content:space-between;gap:16px;text-align:left;color:var(--navy)
}
.accordion-btn span{display:block;font-size:14.5px;font-weight:650}
.accordion-btn small{display:block;margin-top:3px;color:var(--muted);font-size:12.5px;font-weight:450}
.accordion-icon{
  width:26px;height:26px;border-radius:50%;display:grid;place-items:center;background:var(--soft);
  color:var(--green);font-weight:700;flex:0 0 26px;transition:.2s ease
}
.accordion-item.active .accordion-icon{background:var(--green);color:#fff;transform:rotate(45deg)}
.accordion-panel{max-height:0;overflow:hidden;transition:max-height .28s ease;border-top:1px solid transparent}
.accordion-panel-inner{padding:0 18px 18px;color:var(--muted);font-size:14px}
.accordion-panel-inner ul{margin:10px 0 0;padding-left:18px}
.accordion-panel-inner li{margin:5px 0}
.parallax-mining{
  color:#fff;
  background:
    linear-gradient(90deg,rgba(0,24,70,.94),rgba(0,32,96,.80)),
    var(--section-accent-img);
  background-size:cover;background-position:center;background-attachment:fixed
}
.parallax-mining h2,.parallax-mining h3{color:#fff}
.parallax-mining .lead{color:rgba(255,255,255,.80)}
.glass{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:16px;padding:20px;backdrop-filter:blur(8px)}
.glass ul{color:rgba(255,255,255,.80);padding-left:18px;margin:10px 0 0}
.glass li{margin:5px 0}
.level-card{display:grid;grid-template-columns:auto 1fr;gap:14px;align-items:center;background:linear-gradient(180deg,#fff,var(--soft));border:1px solid var(--line);border-radius:15px;padding:18px;box-shadow:var(--shadow-sm)}
.medal{width:44px;height:44px;border-radius:50%;display:grid;place-items:center;color:#fff;font-weight:700}
.bronze{background:#B77D3B}.silver{background:#A8AFB8}.gold{background:var(--mustard);color:#fff}
.contact-grid{display:grid;grid-template-columns:.9fr 1.1fr;gap:26px;align-items:start}
.contact-card{background:var(--navy);color:#fff;border-radius:20px;padding:26px;box-shadow:var(--shadow);position:relative;overflow:hidden}
.contact-card:before{content:"";position:absolute;inset:0 0 auto 0;height:4px;background:linear-gradient(90deg,var(--green),var(--mustard))}
.contact-card h2{color:#fff}
.contact-item{display:flex;gap:12px;align-items:flex-start;padding:14px 0;border-top:1px solid rgba(255,255,255,.12);color:rgba(255,255,255,.82)}
.contact-item b{color:#fff;display:block;margin-bottom:2px}
.contact-dot{width:28px;height:28px;border-radius:10px;display:grid;place-items:center;background:rgba(255,255,255,.09);color:var(--mustard);flex:0 0 28px}
.form-box{background:#fff;border:1px solid var(--line);border-radius:20px;padding:24px;box-shadow:var(--shadow)}
.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.field label{display:block;font-size:12px;font-weight:650;color:var(--navy);margin-bottom:5px}
.field input,.field select,.field textarea{width:100%;border:1px solid var(--line);border-radius:10px;padding:10px 11px;min-height:42px;outline:none;color:var(--ink);background:#fff}
.field textarea{min-height:120px;resize:vertical}
.field input:focus,.field select:focus,.field textarea:focus{border-color:var(--green);box-shadow:0 0 0 4px rgba(131,10,61,.10)}
.span-2{grid-column:span 2}
.cta{
  background:var(--navy);color:#fff;border-radius:22px;box-shadow:var(--shadow);padding:30px;
  display:grid;grid-template-columns:1fr auto;gap:18px;align-items:center;position:relative;overflow:hidden
}
.cta:before{content:"";position:absolute;inset:0 0 auto 0;height:4px;background:linear-gradient(90deg,var(--green),var(--mustard))}
.cta h2{color:#fff;margin-bottom:8px}
.cta p{color:rgba(255,255,255,.76);margin-bottom:0}
footer{background:#001846;color:rgba(255,255,255,.74);padding:32px 0}
.footer-grid{display:grid;grid-template-columns:1.2fr .8fr .8fr;gap:22px}
.footer-logo img{width:220px;background:#fff;border-radius:10px;padding:3px;margin-bottom:10px}
.footer-logo-placeholder{width:220px;min-height:54px;background:#fff;color:var(--navy);border-radius:10px;padding:12px 14px;margin-bottom:10px;display:flex;align-items:center;justify-content:center;font-weight:700;letter-spacing:.02em}
footer h4{color:#fff;margin:0 0 8px;font-size:14.5px;font-weight:650}
footer a{display:block;margin:5px 0;color:rgba(255,255,255,.74)}
footer a:hover{color:#fff}
@media(max-width:1060px){
  .menu,.nav-actions .btn-outline{display:none}
  .hamb{display:inline-flex}
  .brand{flex-basis:auto}
}
@media(max-width:960px){
  .grid-2,.contact-grid,.cta,.footer-grid{grid-template-columns:1fr}
  .grid-4,.grid-3,.values-list{grid-template-columns:repeat(2,1fr)}
  .page-hero,.parallax-mining{background-attachment:scroll}
}
@media(max-width:680px){
  .wrap{width:min(100% - 24px,var(--max))}
  .topbar .wrap{flex-direction:column;align-items:flex-start;gap:3px}
  .nav{height:66px}
  .brand-mark{width:188px;height:44px}
  .brand-mark img{width:188px;max-height:44px}
  .section{padding:42px 0}
  .page-hero{padding:54px 0 48px}
  .grid-4,.grid-3,.values-list,.form-grid{grid-template-columns:1fr}
  .span-2{grid-column:auto}
  .image-card{min-height:300px}
  .cta{padding:20px;border-radius:18px}
}
</style>
  <style>.page-hero{--hero-img:url('imagenes/2.png');--section-accent-img:url('imagenes/3.png');}</style>
</head>
<body>

  <?php $activePage = 'servicios'; include __DIR__ . '/includes/site-header.php'; ?>

<main>

    <section class="page-hero" id="servicios">
      <div class="wrap">
        <span class="eyebrow">Servicios</span>
        <h1>Soluciones para fortalecer el cumplimiento y reducir contingencias.</h1>
        <p class="lead">Acompañamos a organizaciones y contratistas con procesos de acreditación, monitoreo, reportabilidad, auditoría y soporte especializado.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="contacto.php">Solicitar información</a>
          <a class="btn btn-mustard" href="mineria.php">Ver línea minería</a>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="wrap">
        <span class="eyebrow">Soluciones principales</span>
        <h2>Un modelo preventivo, claro y orientado a resultados.</h2>
        <div class="grid-4">
          <article class="service-card" id="acreditacion">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M7 3h7l4 4v14H7z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h6"/></svg></div>
            <h3>Acreditación de Contratistas</h3>
            <p class="text-muted">Administración y validación de documentación requerida para empresas contratistas y subcontratistas.</p>
            <ul><li>Control documental</li><li>Alertas de vencimiento</li><li>Gestión de regularizaciones</li></ul>
          </article>
          <article class="service-card" id="riesgo">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z"/><path d="M9 12l2 2 4-5"/></svg></div>
            <h3>Gestión Integral del Riesgo</h3>
            <p class="text-muted">Evaluación de riesgo laboral, previsional, documental, legal, operacional y reputacional.</p>
            <ul><li>Alertas preventivas</li><li>Indicadores de riesgo</li><li>Planes de mitigación</li></ul>
          </article>
          <article class="service-card" id="auditorias">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><path d="M8 9h8M8 13h8M8 17h5"/></svg></div>
            <h3>Auditorías y Cumplimiento Legal</h3>
            <p class="text-muted">Revisión de antecedentes laborales y previsionales para detectar incumplimientos oportunamente.</p>
            <ul><li>Prevenir multas</li><li>Reducir contingencias</li><li>Fortalecer fiscalización</li></ul>
          </article>
          <article class="service-card" id="plataforma">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M4 5h16v12H4z"/><path d="M8 21h8"/><path d="M12 17v4"/><path d="M8 9h8"/></svg></div>
            <h3>Plataforma y Soporte</h3>
            <p class="text-muted">Acceso centralizado a información, monitoreo permanente y mesa de ayuda especializada.</p>
            <ul><li>Reportabilidad ejecutiva</li><li>Seguimiento en línea</li><li>Acompañamiento permanente</li></ul>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="wrap grid-2">
        <div>
          <span class="eyebrow">Detalle de servicios</span>
          <h2>Procesos diseñados para prevenir, controlar y mejorar.</h2>
          <p class="lead">Cada servicio se orienta a entregar claridad, orden documental, alertas preventivas y apoyo especializado para reducir la exposición a riesgos.</p>
        </div>

        <div class="accordion" aria-label="Detalle de servicios">
          <div class="accordion-item active">
            <button class="accordion-btn" type="button"><span>Acreditación de Contratistas <small>Control documental permanente, alertas y seguimiento.</small></span><b class="accordion-icon">+</b></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">Permite administrar, validar y monitorear documentos de empresas contratistas y subcontratistas, reduciendo rechazos, vencimientos y observaciones pendientes.</div></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-btn" type="button"><span>Gestión Integral del Riesgo <small>Evaluación preventiva de contingencias laborales y operacionales.</small></span><b class="accordion-icon">+</b></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">Analizamos riesgos laborales, previsionales, documentales, legales, operacionales y reputacionales, entregando indicadores, alertas, reportes ejecutivos y planes de mitigación.</div></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-btn" type="button"><span>Auditorías y Cumplimiento Legal <small>Preparación frente a fiscalizaciones y revisión de antecedentes.</small></span><b class="accordion-icon">+</b></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">Detectamos incumplimientos oportunamente, ayudando a reducir contingencias legales, prevenir multas y fortalecer procesos internos de cumplimiento.</div></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-btn" type="button"><span>Plataforma y Soporte Especializado <small>Información centralizada, reportes y acompañamiento.</small></span><b class="accordion-icon">+</b></button>
            <div class="accordion-panel"><div class="accordion-panel-inner">Facilita reportabilidad ejecutiva, indicadores de gestión, seguimiento en línea, mesa de ayuda especializada y acompañamiento permanente.</div></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-tight">
      <div class="wrap">
        <div class="cta">
          <div>
            <h2>Transformamos el cumplimiento en confianza.</h2>
            <p>Ayudamos a las empresas a fortalecer el cumplimiento, reducir contingencias y tomar decisiones más seguras respecto de sus contratistas.</p>
          </div>
          <a class="btn btn-mustard" href="https://wa.me/56921816236" target="_blank" rel="noopener">Hablar por WhatsApp</a>
        </div>
      </div>
    </section>

</main>

  <?php include __DIR__ . '/includes/site-footer.php'; ?>


<script>
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

  function refreshAccordionHeights() {
    accordionItems.forEach(item => {
      const panel = item.querySelector('.accordion-panel');
      if (item.classList.contains('active')) {
        panel.style.maxHeight = panel.scrollHeight + 'px';
      }
    });
  }

  accordionItems.forEach(item => {
    const btn = item.querySelector('.accordion-btn');
    const panel = item.querySelector('.accordion-panel');

    if (item.classList.contains('active')) {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    }

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

  window.addEventListener('resize', refreshAccordionHeights);
</script>

</body>
</html>
