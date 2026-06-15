<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crecer Acredita | Inicio</title>
  <meta name="description" content="Crecer Acredita: gestión de riesgos de contratistas, acreditación, cumplimiento laboral, previsional y documental." />
  <meta name="theme-color" content="#062B5F" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;450;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --navy:#062B5F;
      --navy-2:#0C3A7E;
      --green:#0B8F63;
      --green-2:#0EA573;
      --mustard:#D6A51A;
      --ink:#172033;
      --muted:#687386;
      --line:#E3E9F2;
      --soft:#F7F9FC;
      --white:#FFFFFF;
      --danger:#C83A3A;
      --shadow:0 14px 36px rgba(6,43,95,.10);
      --shadow-sm:0 7px 22px rgba(6,43,95,.07);
      --radius:16px;
      --max:1140px;
    }

    * { box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body {
      margin:0;
      font-family:'Inter', Arial, sans-serif;
      color:var(--ink);
      background:#fff;
      line-height:1.5;
      font-size:15px;
      overflow-x:hidden;
      -webkit-font-smoothing:antialiased;
      text-rendering:optimizeLegibility;
    }
    img { max-width:100%; display:block; }
    a { color:inherit; text-decoration:none; }
    button, input, select { font:inherit; }

    .wrap { width:min(var(--max), calc(100% - 34px)); margin-inline:auto; }
    .section { padding:50px 0; position:relative; }
    .eyebrow {
      display:inline-flex;
      align-items:center;
      gap:9px;
      font-size:10.5px;
      font-weight:700;
      letter-spacing:.12em;
      text-transform:uppercase;
      color:var(--green);
      margin-bottom:9px;
    }
    .eyebrow::before {
      content:"";
      width:22px;
      height:2px;
      background:var(--mustard);
      border-radius:2px;
      display:block;
    }

    h1,h2,h3,p { margin-top:0; }
    h1 {
      font-size:clamp(27px, 3.6vw, 38px);
      line-height:1.04;
      letter-spacing:-.038em;
      font-weight:600;
      color:var(--navy);
      margin-bottom:13px;
      max-width:700px;
    }
    h2 {
      font-size:clamp(20px, 2.35vw, 26px);
      line-height:1.1;
      letter-spacing:-.026em;
      font-weight:650;
      color:var(--navy);
      margin-bottom:11px;
      max-width:780px;
    }
    h3 {
      font-size:15px;
      line-height:1.25;
      letter-spacing:-.01em;
      font-weight:650;
      color:var(--navy);
      margin-bottom:7px;
    }
    .lead {
      font-size:clamp(14.5px, 1.5vw, 16px);
      color:var(--muted);
      max-width:680px;
      margin-bottom:17px;
    }
    .text-muted { color:var(--muted); }

    .btn {
      display:inline-flex;
      align-items:center;
      justify-content:center;
      gap:8px;
      min-height:40px;
      padding:9px 15px;
      border-radius:10px;
      border:1px solid transparent;
      font-size:13.5px;
      font-weight:650;
      cursor:pointer;
      transition:.2s ease;
      white-space:nowrap;
    }
    .btn:hover { transform:translateY(-1px); }
    .btn-primary { background:var(--green); color:#fff; box-shadow:0 10px 22px rgba(11,143,99,.14); }
    .btn-outline { background:#fff; color:var(--navy); border-color:var(--line); }
    .btn-navy { background:var(--navy); color:#fff; }
    .btn-mustard { background:var(--mustard); color:#172033; }

    .topbar {
      background:var(--navy);
      color:rgba(255,255,255,.78);
      font-size:12px;
      border-bottom:1px solid rgba(255,255,255,.10);
    }
    .topbar .wrap {
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:12px;
      padding:7px 0;
    }
    .topbar strong { color:#fff; font-weight:650; }

    .header {
      position:sticky;
      top:0;
      z-index:80;
      background:rgba(255,255,255,.95);
      backdrop-filter:blur(14px);
      border-bottom:1px solid rgba(227,233,242,.95);
    }
    .nav {
      height:68px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:18px;
    }
    .brand {
      display:flex;
      align-items:center;
      justify-content:flex-start;
      flex:0 0 250px;
      min-width:0;
    }
    .brand-mark {
      display:flex;
      align-items:center;
      justify-content:center;
      width:236px;
      height:50px;
      overflow:hidden;
    }
    .logo-placeholder {
      display:flex;
      align-items:center;
      justify-content:center;
      width:100%;
      min-height:44px;
      padding:8px 14px;
      border:1px solid rgba(6,43,95,.14);
      border-radius:12px;
      background:#F8FAFC;
      color:var(--navy);
      font-weight:700;
      letter-spacing:-.02em;
      text-align:center;
      box-shadow:0 2px 3px rgba(6,43,95,.05);
    }
    .menu {
      display:flex;
      align-items:center;
      gap:1px;
      list-style:none;
      padding:0;
      margin:0;
    }
    .menu a {
      display:block;
      padding:8px 9px;
      border-radius:9px;
      font-size:12.8px;
      font-weight:600;
      color:#29364E;
    }
    .menu a:hover { background:var(--soft); color:var(--navy); }
    .nav-actions { display:flex; align-items:center; gap:8px; }
    .hamb {
      display:none;
      background:#fff;
      border:1px solid var(--line);
      border-radius:10px;
      padding:8px 10px;
      color:var(--navy);
      cursor:pointer;
    }

    .hero {
      position:relative;
      overflow:hidden;
      background:#F8FAFC;
    }
    .hero::after {
      content:"";
      position:absolute;
      right:-106px;
      top:0;
      width:300px;
      height:300px;
      background:var(--navy);
      clip-path:polygon(35% 0,100% 0,100% 100%);
      opacity:.92;
    }
    .hero::before {
      content:"";
      position:absolute;
      right:42px;
      top:0;
      width:11px;
      height:215px;
      background:var(--mustard);
      transform:skewX(-35deg);
      z-index:1;
    }
    .hero-grid {
      position:relative;
      z-index:2;
      display:grid;
      grid-template-columns:1fr .98fr;
      gap:32px;
      align-items:center;
      padding:46px 0 56px;
    }
    .hero-copy {
      background:rgba(255,255,255,.9);
      border:1px solid var(--line);
      border-radius:20px;
      box-shadow:var(--shadow);
      padding:24px;
      position:relative;
      overflow:hidden;
    }
    .hero-copy::before {
      content:"";
      position:absolute;
      inset:0 0 auto 0;
      height:4px;
      background:var(--green);
    }
    .hero-actions { display:flex; gap:10px; flex-wrap:wrap; margin-bottom:17px; }
    .hero-kpis { display:grid; grid-template-columns:repeat(3,1fr); gap:9px; }
    .kpi {
      background:#fff;
      border:1px solid var(--line);
      border-radius:13px;
      padding:12px 13px;
    }
    .kpi strong {
      display:block;
      color:var(--navy);
      font-size:20px;
      line-height:1;
      font-weight:650;
      margin-bottom:4px;
    }
    .kpi span { color:var(--muted); font-size:11.2px; font-weight:600; }

    .hero-slider {
      background:var(--navy);
      border-radius:22px;
      overflow:hidden;
      box-shadow:var(--shadow);
      position:relative;
      color:#fff;
    }
    .slide { display:none; min-height:390px; position:relative; }
    .slide.active { display:block; }
    .slide-img {
      position:absolute;
      inset:0;
      background-size:cover;
      background-position:center;
      transform:scale(1.02);
    }
    .slide-overlay {
      position:absolute;
      inset:0;
      background:rgba(6,43,95,.78);
    }
    .slide-content {
      position:relative;
      z-index:2;
      min-height:390px;
      display:flex;
      flex-direction:column;
      justify-content:flex-end;
      padding:24px;
    }
    .slide-tag {
      display:inline-flex;
      align-items:center;
      width:max-content;
      gap:7px;
      padding:6px 10px;
      border-radius:999px;
      background:rgba(255,255,255,.12);
      border:1px solid rgba(255,255,255,.14);
      font-size:10px;
      text-transform:uppercase;
      letter-spacing:.08em;
      font-weight:700;
      margin-bottom:15px;
    }
    .slide-content h2 {
      color:#fff;
      font-size:clamp(20px, 2.35vw, 26px);
      font-weight:650;
      letter-spacing:-.025em;
      margin-bottom:9px;
      max-width:500px;
    }
    .slide-content p {
      color:rgba(255,255,255,.80);
      max-width:500px;
      margin-bottom:15px;
      font-size:14.5px;
    }
    .dots {
      position:absolute;
      left:24px;
      bottom:17px;
      z-index:3;
      display:flex;
      gap:7px;
    }
    .dot {
      width:25px;
      height:4px;
      border:0;
      border-radius:999px;
      background:rgba(255,255,255,.28);
      cursor:pointer;
    }
    .dot.active { background:var(--mustard); }

    .risk-strip { margin-top:-30px; position:relative; z-index:4; }
    .risk-box {
      background:#fff;
      border:1px solid var(--line);
      border-radius:20px;
      box-shadow:var(--shadow);
      padding:22px;
      display:grid;
      grid-template-columns:1.08fr .92fr;
      gap:18px;
      align-items:center;
    }
    .risk-card-mini { display:grid; grid-template-columns:repeat(3,1fr); gap:9px; }
    .risk-pill {
      min-height:88px;
      background:var(--soft);
      border:1px solid var(--line);
      border-radius:13px;
      padding:12px;
    }
    .risk-pill i { display:block; width:9px; height:9px; border-radius:50%; margin-bottom:9px; }
    .risk-pill:nth-child(1) i { background:var(--green); }
    .risk-pill:nth-child(2) i { background:var(--mustard); }
    .risk-pill:nth-child(3) i { background:var(--danger); }
    .risk-pill strong { display:block; color:var(--navy); font-size:13px; margin-bottom:1px; font-weight:650; }
    .risk-pill span { color:var(--muted); font-size:11.5px; }

    .grid-4 { display:grid; grid-template-columns:repeat(4,1fr); gap:13px; }
    .grid-3 { display:grid; grid-template-columns:repeat(3,1fr); gap:13px; }

    .card, .service-card, .why-item {
      background:#fff;
      border:1px solid var(--line);
      border-radius:15px;
      box-shadow:var(--shadow-sm);
    }
    .card { padding:18px; }
    .service-card {
      padding:20px;
      position:relative;
      overflow:hidden;
      min-height:270px;
    }
    .service-card::before {
      content:"";
      position:absolute;
      inset:0 0 auto 0;
      height:4px;
      background:var(--green);
    }
    .service-card ul { margin:11px 0 0; padding-left:17px; color:var(--muted); }
    .service-card li { margin:4px 0; }

    .icon {
      width:42px;
      height:42px;
      border-radius:13px;
      display:grid;
      place-items:center;
      color:var(--green);
      background:#F7FAFC;
      margin-bottom:13px;
    }
    .icon svg {
      width:22px;
      height:22px;
      stroke:currentColor;
      stroke-width:1.9;
      fill:none;
      stroke-linecap:round;
      stroke-linejoin:round;
    }

    .experience {
      background-color:rgba(6,43,95,.88);
      background-image:url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1800&q=80');
      background-size:cover;
      background-position:center;
      background-attachment:fixed;
      color:#fff;
      overflow:hidden;
      position:relative;
    }
    .experience::after {
      content:"20+";
      position:absolute;
      right:5%;
      bottom:-42px;
      font-size:160px;
      line-height:1;
      font-weight:650;
      letter-spacing:-.06em;
      color:rgba(255,255,255,.05);
    }
    .experience h2 { color:#fff; }
    .experience .lead { color:rgba(255,255,255,.77); }
    .exp-grid {
      position:relative;
      z-index:2;
      display:grid;
      grid-template-columns:.76fr 1.24fr;
      gap:28px;
      align-items:center;
    }
    .exp-number {
      background:#fff;
      color:var(--navy);
      border-radius:20px;
      box-shadow:var(--shadow);
      padding:26px;
    }
    .exp-number strong {
      display:block;
      font-size:68px;
      line-height:.8;
      color:var(--green);
      letter-spacing:-.06em;
      font-weight:650;
    }
    .exp-number span {
      display:block;
      margin-top:13px;
      font-size:16px;
      font-weight:650;
    }
    .exp-list { display:grid; grid-template-columns:repeat(2,1fr); gap:9px; margin-top:14px; }
    .exp-list div {
      padding:10px 12px;
      border-radius:12px;
      background:rgba(255,255,255,.06);
      border:1px solid rgba(255,255,255,.14);
      color:rgba(255,255,255,.82);
      font-size:13.5px;
    }

    .split { display:grid; grid-template-columns:1fr 1fr; gap:32px; align-items:center; }
    .visual-list { display:grid; gap:9px; margin-top:10px; }
    .visual-row { display:flex; gap:10px; align-items:flex-start; }
    .check {
      width:21px;
      height:21px;
      flex:0 0 21px;
      border-radius:50%;
      display:grid;
      place-items:center;
      background:rgba(11,143,99,.12);
      color:var(--green);
      font-weight:700;
      margin-top:1px;
    }

    .image-stack { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
    .photo-card {
      border-radius:17px;
      overflow:hidden;
      position:relative;
      min-height:180px;
      box-shadow:var(--shadow);
      background:var(--soft);
      transform:translateY(var(--parallax-y,0));
      transition:transform .12s linear;
    }
    .photo-card.tall { min-height:372px; }
    .photo-card img { width:100%; height:100%; object-fit:cover; }
    .photo-card .overlay {
      position:absolute;
      inset:auto 0 0 0;
      padding:15px;
      background:rgba(6,43,95,.78);
      color:#fff;
    }
    .photo-card .overlay strong { display:block; font-size:13.5px; margin-bottom:3px; font-weight:650; }
    .photo-card .overlay span { font-size:11.8px; color:rgba(255,255,255,.80); }

    .services { background:var(--soft); }
    .image-band {
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:13px;
      margin-top:16px;
    }
    .band-card {
      border-radius:16px;
      overflow:hidden;
      min-height:170px;
      position:relative;
      box-shadow:var(--shadow-sm);
      background:#fff;
      transform:translateY(var(--parallax-y,0));
      transition:transform .12s linear;
    }
    .band-card img { width:100%; height:100%; object-fit:cover; }
    .band-overlay {
      position:absolute;
      inset:auto 0 0 0;
      padding:13px 15px;
      background:rgba(6,43,95,.78);
      color:#fff;
      font-size:12.5px;
      font-weight:600;
    }

    .mining {
      background-color:rgba(6,43,95,.90);
      background-image:url('https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?auto=format&fit=crop&w=1600&q=80');
      background-size:cover;
      background-position:center;
      background-attachment:fixed;
      color:#fff;
    }
    .mining h2 { color:#fff; }
    .mining .lead { color:rgba(255,255,255,.80); }
    .mining-grid { display:grid; grid-template-columns:1fr 1fr; gap:13px; margin-top:17px; }
    .mining-box {
      background:rgba(255,255,255,.08);
      border:1px solid rgba(255,255,255,.14);
      border-radius:15px;
      padding:18px;
      backdrop-filter:blur(7px);
    }
    .mining-box h3 { color:#fff; }
    .mining-box ul { margin:9px 0 0; padding-left:17px; color:rgba(255,255,255,.80); }


    .mid-cta-parallax {
      position:relative;
      overflow:hidden;
      color:#fff;
      background:#071E41;
      min-height:360px;
      display:flex;
      align-items:center;
      isolation:isolate;
    }
    .mid-cta-parallax::before {
      content:"";
      position:absolute;
      inset:-12% 0;
      background:
        linear-gradient(105deg, rgba(6,43,95,.92) 0%, rgba(6,43,95,.78) 47%, rgba(11,143,99,.58) 100%),
        url('imagenes/6.png') center / cover no-repeat;
      background-attachment:fixed;
      z-index:-2;
    }
    .mid-cta-parallax::after {
      content:"";
      position:absolute;
      right:-90px;
      bottom:-130px;
      width:330px;
      height:330px;
      border-radius:50%;
      background:rgba(214,165,26,.22);
      z-index:-1;
    }
    .mid-cta-card {
      max-width:690px;
      padding:34px;
      border-radius:24px;
      background:rgba(255,255,255,.10);
      border:1px solid rgba(255,255,255,.18);
      box-shadow:0 24px 60px rgba(0,0,0,.22);
      backdrop-filter:blur(10px);
    }
    .mid-cta-card h2 { color:#fff; font-size:clamp(24px, 3vw, 34px); }
    .mid-cta-card .lead { color:rgba(255,255,255,.82); }
    .mid-cta-actions { display:flex; gap:10px; flex-wrap:wrap; margin-top:20px; }
    .mid-cta-proof { display:flex; gap:10px; flex-wrap:wrap; margin-top:18px; }
    .mid-cta-proof span {
      display:inline-flex;
      align-items:center;
      gap:7px;
      padding:8px 11px;
      border-radius:999px;
      background:rgba(255,255,255,.12);
      border:1px solid rgba(255,255,255,.16);
      color:rgba(255,255,255,.84);
      font-size:12.5px;
      font-weight:600;
    }

    .seal-grid { display:grid; grid-template-columns:.94fr 1.06fr; gap:24px; align-items:start; }
    .seal-card {
      background:#fff;
      border:1px solid var(--line);
      border-radius:19px;
      padding:26px;
      box-shadow:var(--shadow);
    }
    .seal-levels { display:grid; gap:9px; }
    .level {
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:13px;
      background:#fff;
      border:1px solid var(--line);
      border-radius:14px;
      padding:14px;
    }
    .badge { font-weight:650; color:var(--navy); }
    .badge::before {
      content:"";
      display:inline-block;
      width:12px;
      height:12px;
      border-radius:50%;
      margin-right:7px;
      background:#B77D3B;
    }
    .level:nth-child(2) .badge::before { background:#A8AFB8; }
    .level:nth-child(3) .badge::before { background:var(--mustard); }

    .why { background:#fff; }
    .why-list { display:grid; grid-template-columns:repeat(3,1fr); gap:13px; margin-top:17px; }
    .why-item { padding:17px; }
    .why-item b { display:block; color:var(--navy); margin-bottom:4px; font-size:13.8px; font-weight:650; }

    .contact-cta {
      background:var(--navy);
      color:#fff;
      border-radius:22px;
      box-shadow:var(--shadow);
      padding:30px;
      display:grid;
      grid-template-columns:1fr auto;
      gap:18px;
      align-items:center;
      position:relative;
      overflow:hidden;
    }
    .contact-cta::before {
      content:"";
      position:absolute;
      inset:0 0 auto 0;
      height:4px;
      background:var(--green);
    }
    .contact-cta h2 { color:#fff; margin-bottom:8px; }
    .contact-cta p { color:rgba(255,255,255,.76); margin-bottom:0; }

    footer {
      background:#071E41;
      color:rgba(255,255,255,.74);
      padding:32px 0;
    }
    .footer-grid { display:grid; grid-template-columns:1.2fr .8fr .8fr; gap:22px; }
    .footer-logo .logo-placeholder {
      width:220px;
      min-height:48px;
      margin-bottom:10px;
      background:#fff;
      color:var(--navy);
    }
    footer h4 { color:#fff; margin:0 0 8px; font-size:14.5px; font-weight:650; }
    footer a { display:block; margin:5px 0; color:rgba(255,255,255,.74); }
    footer a:hover { color:#fff; }



    /* ACORDEÓN CORPORATIVO */
    .accordion {
      display:grid;
      gap:10px;
      margin-top:18px;
    }
    .accordion-item {
      background:#fff;
      border:1px solid var(--line);
      border-radius:15px;
      overflow:hidden;
      box-shadow:var(--shadow-sm);
    }
    .accordion-btn {
      width:100%;
      border:0;
      background:#fff;
      cursor:pointer;
      padding:16px 18px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:16px;
      text-align:left;
      color:var(--navy);
    }
    .accordion-btn span { display:block; font-size:14.2px; font-weight:600; }
    .accordion-btn small { display:block; margin-top:3px; color:var(--muted); font-size:12.5px; font-weight:450; }
    .accordion-icon {
      width:26px;
      height:26px;
      border-radius:50%;
      display:grid;
      place-items:center;
      background:var(--soft);
      color:var(--green);
      font-weight:700;
      flex:0 0 26px;
      transition:.2s ease;
    }
    .accordion-item.active .accordion-icon { background:var(--green); color:#fff; transform:rotate(45deg); }
    .accordion-panel {
      max-height:0;
      overflow:hidden;
      transition:max-height .28s ease;
      border-top:1px solid transparent;
    }
    .accordion-panel-inner { padding:0 18px 18px; color:var(--muted); font-size:14px; }
    .accordion-panel-inner ul { margin:10px 0 0; padding-left:18px; }
    .accordion-panel-inner li { margin:5px 0; }
    .motion-card { transition:transform .24s ease, box-shadow .24s ease, border-color .24s ease; }
    .motion-card:hover { transform:translateY(-4px); box-shadow:var(--shadow); border-color:rgba(11,143,99,.24); }
    .reveal-card { opacity:0; transform:translateY(18px); transition:opacity .55s ease, transform .55s ease; }
    .reveal-card.is-visible { opacity:1; transform:translateY(0); }
    .insight-grid { display:grid; grid-template-columns:1fr 1fr; gap:18px; align-items:start; }
    .info-list { display:grid; gap:10px; margin-top:18px; }
    .info-pill { display:flex; gap:12px; align-items:flex-start; background:#fff; border:1px solid var(--line); border-radius:14px; padding:14px; box-shadow:var(--shadow-sm); }
    .info-pill b { color:var(--navy); }
    .info-num { width:30px; height:30px; border-radius:10px; background:var(--navy); color:#fff; display:grid; place-items:center; font-size:12px; font-weight:750; flex:0 0 30px; }
    @media (max-width: 900px) { .insight-grid { grid-template-columns:1fr; } }
    .faq-grid { display:grid; grid-template-columns:.9fr 1.1fr; gap:26px; align-items:start; }

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
      width:min(960px, 100%);
      margin:18px auto;
      background:#fff;
      border-radius:24px;
      overflow:hidden;
      box-shadow:0 30px 90px rgba(0,0,0,.28);
      border:1px solid rgba(255,255,255,.22);
    }
    .modal-layout {
      display:grid;
      grid-template-columns:280px 1fr;
      min-height:620px;
    }
    .modal-aside {
      position:relative;
      padding:26px 24px;
      background-color:rgba(6,43,95,.94);
      background-image:url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=1000&q=80');
      background-size:cover;
      background-position:center;
      color:#fff;
      overflow:hidden;
    }
    .modal-aside::after {
      content:"";
      position:absolute;
      right:-52px;
      bottom:-70px;
      width:190px;
      height:190px;
      border-radius:50%;
      border:24px solid rgba(255,255,255,.08);
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
      font-size:24px;
      font-weight:650;
      line-height:1.12;
      margin-bottom:10px;
    }
    .modal-aside p {
      color:rgba(255,255,255,.78);
      font-size:14px;
      margin-bottom:20px;
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
      gap:9px;
      align-items:flex-start;
      font-size:13px;
      color:rgba(255,255,255,.82);
    }
    .modal-benefit i {
      width:18px;
      height:18px;
      border-radius:50%;
      background:rgba(214,165,26,.24);
      color:var(--mustard);
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
      background:#fff;
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
      border-radius:11px;
      border:1px solid var(--line);
      background:#fff;
      color:var(--navy);
      font-size:22px;
      cursor:pointer;
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
      box-shadow:0 0 0 4px rgba(11,143,99,.10);
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
      width:126px;
      height:126px;
      margin:0 auto 15px;
      display:grid;
      place-items:center;
      border-radius:50%;
      background:var(--green);
      color:#fff;
      font-size:34px;
      font-weight:700;
      box-shadow:var(--shadow);
    }
    .score.medium { background:var(--mustard); color:#1f2937; }
    .score.high { background:var(--danger); }

    @media (max-width:1060px) {
      .menu, .nav-actions .btn-outline { display:none; }
      .hamb { display:inline-flex; }
      .brand { flex-basis:auto; }
    }

    @media (max-width:960px) {
      .hero-grid,
      .risk-box,
      .split,
      .exp-grid,
      .faq-grid,
      .seal-grid,
      .mining-grid,
      .contact-cta,
      .footer-grid { grid-template-columns:1fr; }
      .grid-4 { grid-template-columns:repeat(2,1fr); }
      .why-list, .image-band { grid-template-columns:1fr; }
      .modal-layout { grid-template-columns:1fr; }
      .modal-aside { display:none; }
      .hero::after, .hero::before { opacity:.2; }
      .mid-cta-parallax::before { background-attachment:scroll; }
      .experience, .mining { background-attachment:scroll; }
    }

    @media (max-width:680px) {
      .wrap { width:min(100% - 24px, var(--max)); }
      .topbar .wrap { flex-direction:column; align-items:flex-start; gap:3px; }
      .nav { height:66px; }
      .brand-mark { width:188px; height:44px; }
      .brand-mark .logo-placeholder { min-height:44px; padding:7px 12px; }
      .hero-grid { padding:36px 0 54px; gap:20px; }
      .section { padding:42px 0; }
      .hero-copy, .risk-box, .contact-cta, .seal-card, .mid-cta-card { padding:18px; border-radius:17px; }
      .mid-cta-parallax { min-height:420px; }
      .hero-kpis, .risk-card-mini, .grid-4, .form-grid, .image-stack { grid-template-columns:1fr; }
      .slide, .slide-content { min-height:340px; }
      .modal { padding:10px; }
      .modal-head, .modal-body { padding:18px; }
      .question { grid-template-columns:1fr; }
      .modal-actions { flex-direction:column-reverse; }
      .modal-actions .btn { width:100%; }
    }
  </style>
</head>

<body>
  <?php $activePage = 'inicio'; include __DIR__ . '/includes/site-header.php'; ?>

  <main id="inicio">
    <section class="hero" id="resumen">
      <div class="wrap hero-grid">
        <div class="hero-copy">
          <span class="eyebrow">Cumplimiento · Riesgo · Confianza</span>
          <h1>Control inteligente de contratistas para decisiones más seguras.</h1>
          <p class="lead">Un resumen de nuestras soluciones para acreditar contratistas, prevenir incumplimientos y fortalecer la confianza operacional.</p>

          <div class="hero-actions">
            <button class="btn btn-primary" data-open-eval>Iniciar evaluación gratuita</button>
            <a class="btn btn-outline" href="servicios.php">Ver servicios</a>
          </div>

          <div class="hero-kpis">
            <div class="kpi"><strong>20+</strong><span>años de experiencia</span></div>
            <div class="kpi"><strong>360°</strong><span>cumplimiento y riesgo</span></div>
            <div class="kpi"><strong>0-100</strong><span>diagnóstico inicial</span></div>
          </div>
        </div>

        <div class="hero-slider" aria-label="Mensajes principales">
          <div class="slide active">
            <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1400&q=80');"></div>
            <div class="slide-overlay"></div>
            <div class="slide-content">
              <div>
                <span class="slide-tag">Resumen</span>
                <h2>Cumplimiento simple, preventivo y trazable</h2>
                <p>Conoce las áreas principales y entra a cada página para revisar el detalle.</p>
              </div>
              <a class="btn btn-mustard" href="servicios.php">Explorar servicios</a>
            </div>
          </div>

          <div class="slide">
            <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1400&q=80');"></div>
            <div class="slide-overlay"></div>
            <div class="slide-content">
              <div>
                <span class="slide-tag">Servicios</span>
                <h2>Acreditación y gestión integral del riesgo</h2>
                <p>Revisa soluciones para control documental, auditorías, cumplimiento legal y soporte especializado.</p>
              </div>
              <a class="btn btn-mustard" href="servicios.php#acreditacion">Ver acreditación</a>
            </div>
          </div>

          <div class="slide">
            <div class="slide-img" style="background-image:url('https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1400&q=80');"></div>
            <div class="slide-overlay"></div>
            <div class="slide-content">
              <div>
                <span class="slide-tag">Especialidades</span>
                <h2>Minería y Sello Crecer</h2>
                <p>Accede a la línea especializada para minería o conoce el reconocimiento de buenas prácticas.</p>
              </div>
              <a class="btn btn-mustard" href="mineria.php#mineria">Ver minería</a>
            </div>
          </div>

          <div class="dots">
            <button class="dot active" data-slide="0" aria-label="Slide 1"></button>
            <button class="dot" data-slide="1" aria-label="Slide 2"></button>
            <button class="dot" data-slide="2" aria-label="Slide 3"></button>
          </div>
        </div>
      </div>
    </section>

    <section class="risk-strip" id="evaluacion">
      <div class="wrap">
        <div class="risk-box">
          <div>
            <span class="eyebrow">Autoevaluación de Riesgo Crecer</span>
            <h2>Diagnóstico preliminar en pocos minutos.</h2>
            <p class="lead">Evalúa de forma inicial el cumplimiento laboral, previsional, documental y de seguridad de tu organización.</p>
            <button class="btn btn-primary" data-open-eval>Iniciar evaluación gratuita</button>
          </div>
          <div class="risk-card-mini">
            <div class="risk-pill"><i></i><strong>Riesgo bajo</strong><span>85 a 100 puntos</span></div>
            <div class="risk-pill"><i></i><strong>Riesgo medio</strong><span>60 a 84 puntos</span></div>
            <div class="risk-pill"><i></i><strong>Riesgo alto</strong><span>Menor a 60 puntos</span></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section services" id="servicios-resumen">
      <div class="wrap">
        <span class="eyebrow">Resumen de soluciones</span>
        <h2>Elige el tema que necesitas revisar.</h2>
        <p class="lead">El inicio resume las líneas principales. Cada botón lleva a la página o sección específica con más información.</p>

        <div class="grid-4">
          <article class="service-card motion-card reveal-card">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M7 3h7l4 4v14H7z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h6"/></svg></div>
            <h3>Acreditación de Contratistas</h3>
            <p class="text-muted">Control documental y seguimiento de observaciones.</p>
            <a class="btn btn-outline" href="servicios.php#acreditacion">Ver acreditación</a>
          </article>

          <article class="service-card motion-card reveal-card">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7z"/><path d="M9 12l2 2 4-5"/></svg></div>
            <h3>Gestión Integral del Riesgo</h3>
            <p class="text-muted">Indicadores, alertas preventivas y planes de mitigación.</p>
            <a class="btn btn-outline" href="servicios.php#riesgo">Ver gestión de riesgo</a>
          </article>

          <article class="service-card motion-card reveal-card">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M4 5h16v12H4z"/><path d="M8 21h8"/><path d="M12 17v4"/><path d="M8 9h8"/></svg></div>
            <h3>Crecer Acredita Minería</h3>
            <p class="text-muted">Soporte para exigencias documentales de la industria minera.</p>
            <a class="btn btn-outline" href="mineria.php#mineria">Ver línea minería</a>
          </article>

          <article class="service-card motion-card reveal-card">
            <div class="icon"><svg viewBox="0 0 24 24"><path d="M12 3l7 4v6c0 4-3 7-7 8-4-1-7-4-7-8V7z"/><path d="M9 12l2 2 4-5"/></svg></div>
            <h3>Sello Crecer</h3>
            <p class="text-muted">Reconocimiento para contratistas con mejores estándares.</p>
            <a class="btn btn-outline" href="sello-crecer.php#sello">Conocer el sello</a>
          </article>
        </div>
      </div>
    </section>



    <section class="section mid-cta-parallax" id="cta-ejecutivo">
      <div class="wrap">
        <div class="mid-cta-card reveal-card">
          <span class="eyebrow">Acompañamiento especializado</span>
          <h2>Convierte el control documental en una ventaja operativa.</h2>
          <p class="lead">Usamos información, alertas y seguimiento experto para ayudarte a anticipar incumplimientos, ordenar evidencias y tomar mejores decisiones con tus contratistas.</p>
          <div class="mid-cta-actions">
            <a class="btn btn-primary" href="contacto.php#contacto">Agendar una reunión</a>
            <button class="btn btn-mustard" data-open-eval>Evaluar mi riesgo</button>
          </div>
          <div class="mid-cta-proof" aria-label="Beneficios destacados">
            <span>✓ Gestión preventiva</span>
            <span>✓ Reportabilidad ejecutiva</span>
            <span>✓ Soporte experto</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="secciones">
      <div class="wrap">
        <span class="eyebrow">Referencias del sitio</span>
        <h2>Profundiza por área según tu necesidad.</h2>
        <p class="lead">El inicio presenta una visión ejecutiva. Usa estos accesos para revisar información más completa en cada sección.</p>

        <div class="grid-4">
          <article class="service-card motion-card reveal-card">
            <h3>Nosotros</h3>
            <p class="text-muted">Conoce la experiencia, enfoque preventivo y principios de trabajo de Crecer Acredita.</p>
            <a class="btn btn-outline" href="nosotros.php#nosotros">Ver nosotros</a>
          </article>
          <article class="service-card motion-card reveal-card">
            <h3>Servicios</h3>
            <p class="text-muted">Revisa el modelo de acreditación, auditoría, cumplimiento y soporte operativo.</p>
            <a class="btn btn-outline" href="servicios.php#servicios">Ver servicios</a>
          </article>
          <article class="service-card motion-card reveal-card">
            <h3>Minería</h3>
            <p class="text-muted">Explora soluciones para contratistas que operan bajo estándares de compañías mineras.</p>
            <a class="btn btn-outline" href="mineria.php#mineria">Ver minería</a>
          </article>
          <article class="service-card motion-card reveal-card">
            <h3>Sello Crecer</h3>
            <p class="text-muted">Conoce los niveles de reconocimiento y el valor de certificar buenas prácticas.</p>
            <a class="btn btn-outline" href="sello-crecer.php#sello">Ver sello</a>
          </article>
        </div>
      </div>
    </section>

    <section class="section section-tight" id="orientacion">
      <div class="wrap insight-grid">
        <div class="reveal-card">
          <span class="eyebrow">Orientación rápida</span>
          <h2>Información clave antes de avanzar.</h2>
          <p class="lead">Estas preguntas ayudan a entender qué revisar primero y hacia qué sección del sitio conviene continuar.</p>
          <div class="info-list">
            <div class="info-pill"><span class="info-num">01</span><div><b>Diagnóstico inicial.</b><br><span class="text-muted">Usa la autoevaluación para identificar brechas laborales, previsionales, documentales y de seguridad.</span></div></div>
            <div class="info-pill"><span class="info-num">02</span><div><b>Ruta de mejora.</b><br><span class="text-muted">Si existen observaciones, revisa servicios de acreditación, auditoría y gestión integral del riesgo.</span></div></div>
            <div class="info-pill"><span class="info-num">03</span><div><b>Especialización.</b><br><span class="text-muted">Si operas en minería, entra a la línea especializada para estándares de faena y reportabilidad.</span></div></div>
          </div>
        </div>

        <div class="accordion reveal-card" aria-label="Información frecuente del inicio">
          <div class="accordion-item active">
            <button class="accordion-btn" type="button">
              <span>¿Qué puedo revisar desde el inicio? <small>Resumen ejecutivo y enlaces directos a cada sección importante.</small></span>
              <b class="accordion-icon">+</b>
            </button>
            <div class="accordion-panel"><div class="accordion-panel-inner">Puedes iniciar la autoevaluación, entrar a servicios específicos, revisar la línea minera, conocer Sello Crecer o ir al formulario de contacto.</div></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-btn" type="button">
              <span>¿Cuándo ir a Servicios? <small>Cuando necesitas detalle de acreditación, auditorías, cumplimiento y soporte.</small></span>
              <b class="accordion-icon">+</b>
            </button>
            <div class="accordion-panel"><div class="accordion-panel-inner">La página de Servicios concentra el modelo preventivo: control documental, indicadores, alertas, auditorías y acompañamiento operativo.</div></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-btn" type="button">
              <span>¿Cuándo corresponde Minería? <small>Cuando hay exigencias de ingreso a faena o control multiplataforma.</small></span>
              <b class="accordion-icon">+</b>
            </button>
            <div class="accordion-panel"><div class="accordion-panel-inner">La sección Minería resume servicios especializados para contratistas que requieren acreditación de empresa, trabajadores, documentos y reportabilidad.</div></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-btn" type="button">
              <span>¿Qué aporta Sello Crecer? <small>Reconocimiento de cumplimiento y buenas prácticas.</small></span>
              <b class="accordion-icon">+</b>
            </button>
            <div class="accordion-panel"><div class="accordion-panel-inner">Sello Crecer ayuda a comunicar estándares de cumplimiento laboral, previsional, documental y de gestión preventiva frente a clientes y mandantes.</div></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="contacto">
      <div class="wrap">
        <div class="contact-cta">
          <div>
            <h2>¿Necesitas orientación para partir?</h2>
            <p>Conversemos sobre la solución más adecuada para tu empresa y tus contratistas.</p>
          </div>
          <div style="display:flex; gap:10px; flex-wrap:wrap;">
            <a class="btn btn-primary" href="contacto.php#contacto">Ir a contacto</a>
            <a class="btn btn-mustard" href="https://wa.me/56921816236" target="_blank" rel="noopener">WhatsApp</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/site-footer.php'; ?>

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
                  <div class="score" id="scoreCircle">0</div>
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

    const qWrap = document.getElementById('questions');
    qWrap.innerHTML = modules.map((m, mi) => `
      <section class="question-group">
        <h3>${m.title}</h3>
        ${m.qs.map((q, qi) => `
          <div class="question">
            <span>${q}</span>
            <div class="answers">
              <label><input type="radio" name="m${mi}q${qi}" value="10" required><span>Sí</span></label>
              <label><input type="radio" name="m${mi}q${qi}" value="5" required><span>Parcial</span></label>
              <label><input type="radio" name="m${mi}q${qi}" value="0" required><span>No</span></label>
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

    document.getElementById('riskForm').addEventListener('submit', e => {
      e.preventDefault();
      let final = 0;

      modules.forEach((m, mi) => {
        let raw = 0;
        m.qs.forEach((_, qi) => {
          const selected = document.querySelector(`input[name="m${mi}q${qi}"]:checked`);
          raw += Number(selected?.value || 0);
        });
        final += (raw / (m.qs.length * 10)) * 100 * m.weight;
      });

      final = Math.round(final);
      const data = Object.fromEntries(new FormData(e.target).entries());
      const result = buildResult(final, data.industria);

      localStorage.setItem('crecerAcreditaLead', JSON.stringify({
        ...data,
        puntaje:final,
        nivel:result.title,
        fecha:new Date().toISOString()
      }));

      document.getElementById('scoreCircle').textContent = final;
      document.getElementById('scoreCircle').className = 'score ' + result.className;
      document.getElementById('riskTitle').textContent = result.title;
      document.getElementById('riskMsg').textContent = result.message;
      document.getElementById('resultCta').textContent = result.cta;
      document.getElementById('resultCta').href = result.href;
      document.getElementById('specialMsg').innerHTML = result.extra;

      questionsStep.style.display = 'none';
      resultStep.style.display = 'block';
      stepBar3.classList.add('active');
    });

    function buildResult(score, industry) {
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
  </script>
</body>
</html>
