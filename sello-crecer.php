<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sello Crecer | Crecer Acredita</title>
  <meta name="description" content="Sello Crecer de Crecer Acredita." />
  <meta name="theme-color" content="#062B5F" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;450;500;600;700&display=swap" rel="stylesheet">
  <style>
:root{
  --navy:#062B5F;
  --navy-dark:#041D42;
  --navy-2:#0C3A7E;
  --green:#0B8F63;
  --green-2:#0EA573;
  --mustard:#D6A51A;
  --ink:#172033;
  --muted:#667386;
  --line:#E3E9F2;
  --soft:#F7F9FC;
  --soft-2:#EEF4FA;
  --white:#FFFFFF;
  --shadow:0 14px 36px rgba(6,43,95,.10);
  --shadow-sm:0 7px 22px rgba(6,43,95,.07);
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
  min-height:40px;padding:9px 15px;border-radius:10px;border:1px solid transparent;
  font-size:13.5px;font-weight:650;cursor:pointer;transition:.2s ease;white-space:nowrap
}
.btn:hover{transform:translateY(-1px)}
.btn-primary{background:linear-gradient(135deg,var(--green),var(--green-2));color:#fff;box-shadow:0 10px 22px rgba(11,143,99,.16)}
.btn-outline{background:#fff;color:var(--navy);border-color:var(--line)}
.btn-navy{background:var(--navy);color:#fff}
.btn-mustard{background:var(--mustard);color:#172033}
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
.brand-mark img{width:214px;height:auto;max-height:48px;object-fit:contain;object-position:left center;filter:drop-shadow(0 2px 3px rgba(6,43,95,.05))}
.brand-placeholder,.footer-logo-placeholder{background:#fff;border:1px solid var(--line);border-radius:12px;color:var(--navy);font-weight:900;letter-spacing:.02em;display:flex;align-items:center;justify-content:center;text-align:center}
.brand-placeholder{font-size:17px;line-height:1.05;padding:4px 14px;box-shadow:0 2px 3px rgba(6,43,95,.05)}
.footer-logo-placeholder{width:220px;min-height:52px;margin-bottom:10px;padding:8px 14px;font-size:18px}
.menu{display:flex;align-items:center;gap:1px;list-style:none;padding:0;margin:0}
.menu a{display:block;padding:8px 9px;border-radius:9px;font-size:12.8px;font-weight:600;color:#29364E}
.menu a:hover,.menu a.active{background:var(--soft);color:var(--navy)}
.nav-actions{display:flex;align-items:center;gap:8px}
.hamb{display:none;background:#fff;border:1px solid var(--line);border-radius:10px;padding:8px 10px;color:var(--navy);cursor:pointer}
.page-hero{
  position:relative;overflow:hidden;color:#fff;
  background:
    linear-gradient(90deg,rgba(4,29,66,.96),rgba(6,43,95,.82)),
    var(--hero-img);
  background-size:cover;background-position:center;background-attachment:fixed;
  padding:72px 0 64px
}
.page-hero:after{
  content:"";position:absolute;right:-120px;top:-80px;width:310px;height:310px;border-radius:50%;
  border:42px solid rgba(214,165,26,.15)
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
  background:linear-gradient(135deg,rgba(11,143,99,.10),rgba(214,165,26,.14));margin-bottom:13px
}
.icon svg{width:22px;height:22px;stroke:currentColor;stroke-width:1.9;fill:none;stroke-linecap:round;stroke-linejoin:round}
.image-card{border-radius:20px;overflow:hidden;min-height:420px;box-shadow:var(--shadow);position:relative;background:#ddd}
.image-card img{width:100%;height:100%;object-fit:cover;position:absolute;inset:0}
.image-card:after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(6,43,95,0) 35%,rgba(6,43,95,.85) 100%)}
.image-card-caption{position:absolute;z-index:2;inset:auto 0 0 0;padding:22px;color:#fff}
.image-card-caption strong{display:block;margin-bottom:4px;font-weight:650}
.image-card-caption span{color:rgba(255,255,255,.80);font-size:13px}
.values-list{display:grid;grid-template-columns:repeat(5,1fr);gap:12px}
.value{background:#fff;border:1px solid var(--line);border-radius:15px;padding:18px;box-shadow:var(--shadow-sm)}
.value b{display:block;color:var(--navy);margin-bottom:5px;font-weight:650}
.timeline{display:grid;gap:12px}
.timeline-item{display:grid;grid-template-columns:40px 1fr;gap:12px;align-items:start}
.timeline-num{width:40px;height:40px;border-radius:50%;background:var(--navy);color:#fff;display:grid;place-items:center;font-size:13px;font-weight:700;box-shadow:0 8px 16px rgba(6,43,95,.14)}
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
    linear-gradient(90deg,rgba(4,29,66,.94),rgba(6,43,95,.80)),
    url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&w=1800&q=80');
  background-size:cover;background-position:center;background-attachment:fixed
}
.parallax-mining h2,.parallax-mining h3{color:#fff}
.parallax-mining .lead{color:rgba(255,255,255,.80)}
.glass{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:16px;padding:20px;backdrop-filter:blur(8px)}
.glass ul{color:rgba(255,255,255,.80);padding-left:18px;margin:10px 0 0}
.glass li{margin:5px 0}
.level-card{display:grid;grid-template-columns:auto 1fr;gap:14px;align-items:center;background:linear-gradient(180deg,#fff,var(--soft));border:1px solid var(--line);border-radius:15px;padding:18px;box-shadow:var(--shadow-sm)}
.medal{width:44px;height:44px;border-radius:50%;display:grid;place-items:center;color:#fff;font-weight:700}
.bronze{background:#B77D3B}.silver{background:#A8AFB8}.gold{background:var(--mustard);color:#172033}
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
.field input:focus,.field select:focus,.field textarea:focus{border-color:var(--green);box-shadow:0 0 0 4px rgba(11,143,99,.10)}
.span-2{grid-column:span 2}
.cta{
  background:var(--navy);color:#fff;border-radius:22px;box-shadow:var(--shadow);padding:30px;
  display:grid;grid-template-columns:1fr auto;gap:18px;align-items:center;position:relative;overflow:hidden
}
.cta:before{content:"";position:absolute;inset:0 0 auto 0;height:4px;background:linear-gradient(90deg,var(--green),var(--mustard))}
.cta h2{color:#fff;margin-bottom:8px}
.cta p{color:rgba(255,255,255,.76);margin-bottom:0}
footer{background:#071E41;color:rgba(255,255,255,.74);padding:32px 0}
.footer-grid{display:grid;grid-template-columns:1.2fr .8fr .8fr;gap:22px}
.footer-logo img{width:220px;background:#fff;border-radius:10px;padding:3px;margin-bottom:10px}
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
  .brand-placeholder{font-size:15px;padding:4px 10px}
  .section{padding:42px 0}
  .page-hero{padding:54px 0 48px}
  .grid-4,.grid-3,.values-list,.form-grid{grid-template-columns:1fr}
  .span-2{grid-column:auto}
  .image-card{min-height:300px}
  .cta{padding:20px;border-radius:18px}
}
</style>
  <style>.page-hero{--hero-img:url('https://images.unsplash.com/photo-1560472355-536de3962603?auto=format&fit=crop&w=1800&q=80');}</style>
</head>
<body>

  <?php $activePage = 'sello'; include __DIR__ . '/includes/site-header.php'; ?>

<main>

    <section class="page-hero" id="sello">
      <div class="wrap">
        <span class="eyebrow">Sello Crecer</span>
        <h1>Cumplimiento que genera confianza.</h1>
        <p class="lead">El Sello Crecer reconoce a empresas contratistas que mantienen estándares superiores en materias laborales, previsionales, documentales y de gestión preventiva.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="contacto.php">Solicitar información</a>
          <a class="btn btn-mustard" href="servicios.php">Ver servicios</a>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="wrap grid-2">
        <div class="card-feature">
          <span class="eyebrow">Qué es el Sello Crecer</span>
          <h2>Una certificación de cumplimiento para empresas contratistas.</h2>
          <p class="lead">Su propósito es generar confianza y diferenciar a aquellas empresas comprometidas con la excelencia y el cumplimiento.</p>
          <p class="text-muted">Permite a contratistas fortalecer su posicionamiento y a empresas mandantes identificar proveedores de menor riesgo.</p>
        </div>
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1560472355-536de3962603?auto=format&fit=crop&w=1200&q=80" alt="Certificación y confianza empresarial">
          <div class="image-card-caption">
            <strong>Cumplimiento que diferencia</strong>
            <span>Reconocimiento de buenas prácticas para contratistas confiables.</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="wrap">
        <span class="eyebrow">Áreas evaluadas</span>
        <h2>Evaluación integral del cumplimiento.</h2>
        <div class="grid-3">
          <div class="card"><h3>Cumplimiento Laboral</h3><p class="text-muted">Contratos, anexos, jornadas y obligaciones laborales.</p></div>
          <div class="card"><h3>Cumplimiento Previsional</h3><p class="text-muted">Cotizaciones previsionales y obligaciones de seguridad social.</p></div>
          <div class="card"><h3>Cumplimiento Documental</h3><p class="text-muted">Actualización y vigencia de antecedentes.</p></div>
          <div class="card"><h3>Gestión Preventiva</h3><p class="text-muted">Capacidad para anticipar riesgos y mantener controles efectivos.</p></div>
          <div class="card"><h3>Historial de Cumplimiento</h3><p class="text-muted">Seguimiento de observaciones e incumplimientos.</p></div>
          <div class="card"><h3>Confianza Operacional</h3><p class="text-muted">Información útil para empresas mandantes y procesos de licitación.</p></div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="wrap grid-2">
        <div>
          <span class="eyebrow">Categorías</span>
          <h2>Tres niveles de reconocimiento.</h2>
          <div class="level-card"><div class="medal bronze">B</div><div><h3>Sello Crecer Bronce</h3><p class="text-muted">Cumplimiento básico acreditado.</p></div></div>
          <div style="height:10px"></div>
          <div class="level-card"><div class="medal silver">P</div><div><h3>Sello Crecer Plata</h3><p class="text-muted">Cumplimiento consistente y controlado.</p></div></div>
          <div style="height:10px"></div>
          <div class="level-card"><div class="medal gold">O</div><div><h3>Sello Crecer Oro</h3><p class="text-muted">Excelencia en cumplimiento y gestión preventiva.</p></div></div>
        </div>
        <div class="card-feature">
          <span class="eyebrow">Beneficios</span>
          <h2>Valor para contratistas y empresas mandantes.</h2>
          <div class="accordion">
            <div class="accordion-item active">
              <button class="accordion-btn" type="button"><span>Para contratistas <small>Diferenciación competitiva y mayor credibilidad.</small></span><b class="accordion-icon">+</b></button>
              <div class="accordion-panel"><div class="accordion-panel-inner">Mejor posicionamiento en licitaciones, reconocimiento de buenas prácticas y mayor confianza frente a empresas mandantes.</div></div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" type="button"><span>Para empresas mandantes <small>Identificación rápida de proveedores confiables.</small></span><b class="accordion-icon">+</b></button>
              <div class="accordion-panel"><div class="accordion-panel-inner">Menor exposición a riesgos, mejor toma de decisiones y reducción de contingencias asociadas a la cadena de contratistas.</div></div>
            </div>
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
