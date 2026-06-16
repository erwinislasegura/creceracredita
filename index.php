<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crecer Acredita | Inicio</title>
  <meta name="description" content="Crecer Acredita: gestión de riesgos de contratistas, acreditación, cumplimiento laboral, previsional y documental." />
  <meta name="theme-color" content="#002060" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;450;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --navy:#002060;
      --navy-2:#173B78;
      --green:#830A3D;
      --green-2:#A3164E;
      --mustard:#B0174F;
      --ink:#172033;
      --muted:#687386;
      --line:#E3E9F2;
      --soft:#F7F9FC;
      --white:#FFFFFF;
      --danger:#C83A3A;
      --shadow:0 14px 36px rgba(0,32,96,.10);
      --shadow-sm:0 7px 22px rgba(0,32,96,.07);
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
      border-radius:9px;
      border:1px solid transparent;
      font-size:13.5px;
      font-weight:650;
      cursor:pointer;
      transition:.2s ease;
      white-space:nowrap;
    }
    .btn:hover { transform:translateY(-1px); }
    .btn-primary { background:var(--green); color:#fff; box-shadow:0 12px 22px rgba(131,10,61,.22), 0 2px 5px rgba(15,23,42,.10); }
    .btn-outline { background:#fff; color:var(--navy); border-color:var(--line); box-shadow:0 10px 18px rgba(0,32,96,.09), 0 2px 4px rgba(15,23,42,.06); }
    .btn-navy { background:var(--navy); color:#fff; box-shadow:0 12px 22px rgba(0,32,96,.22), 0 2px 5px rgba(15,23,42,.10); }
    .btn-mustard { background:var(--mustard); color:#fff; box-shadow:0 12px 22px rgba(176,23,79,.22), 0 2px 5px rgba(15,23,42,.10); }

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
      border:1px solid rgba(0,32,96,.14);
      border-radius:12px;
      background:#F8FAFC;
      color:var(--navy);
      font-weight:700;
      letter-spacing:-.02em;
      text-align:center;
      box-shadow:0 2px 3px rgba(0,32,96,.05);
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
      border-radius:9px;
      padding:8px 10px;
      color:var(--navy);
      cursor:pointer;
      box-shadow:0 10px 18px rgba(0,32,96,.09), 0 2px 4px rgba(15,23,42,.06);
    }

    .hero {
      position:relative;
      overflow:visible;
      isolation:isolate;
      min-height:588px;
      background:#001846;
      color:#fff;
    }
    .hero-bg-rotator,
    .hero-bg-rotator span {
      position:absolute;
      inset:0;
    }
    .hero-bg-rotator {
      z-index:-4;
      overflow:hidden;
      pointer-events:none;
    }
    .hero-bg-rotator span {
      opacity:0;
      background-size:cover;
      background-position:center;
      transform:scale(1.04);
      filter:saturate(.94) contrast(1.05);
      animation:heroBgSwap 24s infinite;
    }
    .hero-bg-rotator span:nth-child(1) { background-image:url('imagenes/6.png'); animation-delay:0s; }
    .hero-bg-rotator span:nth-child(2) { background-image:url('imagenes/9.png'); animation-delay:6s; }
    .hero-bg-rotator span:nth-child(3) { background-image:url('imagenes/1.png'); animation-delay:12s; }
    .hero-bg-rotator span:nth-child(4) { background-image:url('imagenes/5.png'); animation-delay:18s; }
    @keyframes heroBgSwap {
      0% { opacity:1; transform:scale(1.04); }
      8% { opacity:1; }
      25% { opacity:1; }
      33% { opacity:0; transform:scale(1.09); }
      100% { opacity:0; transform:scale(1.09); }
    }
    .hero::before {
      content:"";
      position:absolute;
      inset:0;
      z-index:-2;
      background:
        radial-gradient(circle at 52% 36%, rgba(131,10,61,.22), transparent 26%),
        linear-gradient(90deg, rgba(2,10,29,.90) 0%, rgba(0,24,70,.86) 47%, rgba(0,32,96,.92) 100%);
    }
    .hero-bg-fade {
      position:absolute;
      inset:0;
      z-index:-1;
      pointer-events:none;
      background:
        linear-gradient(180deg, rgba(0,24,70,.02) 0%, rgba(0,24,70,.18) 58%, rgba(0,24,70,.96) 100%),
        radial-gradient(circle at 82% 15%, rgba(255,255,255,.08), transparent 28%);
    }
    .hero-grid {
      position:relative;
      z-index:2;
      min-height:588px;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:70px 0 108px;
      text-align:center;
    }
    .hero-copy {
      position:relative;
      width:min(760px, 100%);
      margin-inline:auto;
    }
    .hero-copy .eyebrow {
      color:#fff;
      background:rgba(255,255,255,.10);
      border:1px solid rgba(255,255,255,.18);
      border-radius:999px;
      padding:8px 16px;
      margin-bottom:26px;
      letter-spacing:.01em;
      text-transform:none;
      font-size:12px;
      backdrop-filter:blur(8px);
    }
    .hero-copy .eyebrow::before { display:none; }
    .hero-copy h1 {
      color:#fff;
      max-width:760px;
      margin:0 auto 18px;
      font-size:clamp(28px, 3.4vw, 44px);
      line-height:1.05;
      font-weight:650;
      letter-spacing:-.048em;
    }
    .hero-copy h1::after {
      content:"";
      display:block;
      width:72px;
      height:3px;
      margin:24px auto 0;
      border-radius:999px;
      background:linear-gradient(90deg, #56d48c, #2f75ff);
    }
    .hero-copy .lead {
      color:rgba(255,255,255,.86);
      max-width:780px;
      margin:0 auto 28px;
      font-size:clamp(16px, 1.55vw, 18px);
      line-height:1.65;
    }
    .hero-actions { display:flex; gap:12px; flex-wrap:wrap; justify-content:center; margin-bottom:24px; }
    .hero-actions .btn {
      min-height:50px;
      padding:13px 26px;
      border-radius:9px;
      box-shadow:0 16px 30px rgba(0,0,0,.22), 0 3px 8px rgba(0,0,0,.16);
      animation-duration:.72s;
      animation-timing-function:cubic-bezier(.22,1,.36,1);
      animation-fill-mode:both;
    }
    .hero-actions .btn-primary {
      background:linear-gradient(135deg,#fff 0%,#fff7fb 100%);
      color:#001846;
      border:1px solid rgba(255,255,255,.28);
      box-shadow:0 18px 36px rgba(0,0,0,.24), 0 0 0 6px rgba(255,255,255,.16), 0 3px 8px rgba(0,0,0,.16);
      font-weight:850;
      font-size:15px;
      transform-origin:center;
      animation-name:heroBtnInLeft;
    }
    .hero-actions .btn-primary:hover {
      box-shadow:0 22px 42px rgba(0,0,0,.28), 0 4px 10px rgba(0,0,0,.18);
    }
    .hero-actions .btn-outline {
      background:rgba(255,255,255,.08);
      color:#fff;
      border-color:rgba(255,255,255,.54);
      animation-name:heroBtnInRight;
    }
    @keyframes heroBtnInLeft {
      from { opacity:0; transform:translateX(-72px); }
      to { opacity:1; transform:translateX(0); }
    }
    @keyframes heroBtnInRight {
      from { opacity:0; transform:translateX(72px); }
      to { opacity:1; transform:translateX(0); }
    }
    @media (prefers-reduced-motion: reduce) {
      .hero-bg-rotator span,
      .hero-actions .btn {
        animation:none;
      }
      .hero-bg-rotator span:first-child { opacity:1; }
    }
    .hero-kpis { display:flex; justify-content:center; gap:20px; flex-wrap:wrap; }
    .kpi {
      display:flex;
      align-items:center;
      gap:8px;
      background:transparent;
      border:0;
      border-radius:0;
      padding:0;
      color:rgba(255,255,255,.82);
    }
    .kpi::before { content:""; width:8px; height:8px; border-radius:50%; background:#6ee7b7; box-shadow:0 0 0 4px rgba(110,231,183,.12); }
    .kpi strong {
      display:inline;
      color:#fff;
      font-size:14px;
      line-height:1.2;
      font-weight:750;
      margin:0;
    }
    .kpi span { color:rgba(255,255,255,.82); font-size:13px; font-weight:650; }

    .hero-slider {
      display:none;
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
      background:rgba(0,32,96,.78);
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

    .risk-strip { margin-top:-31px; position:relative; z-index:4; }
    .risk-box {
      background:#fff;
      border:1px solid var(--line);
      border-radius:20px;
      box-shadow:var(--shadow);
      padding:22px;
      display:grid;
      grid-template-columns:repeat(4,1fr);
      gap:12px;
      align-items:center;
      padding:20px 30px;
    }
    .risk-box > div:first-child { display:none; }
    .risk-card-mini { display:grid; grid-template-columns:repeat(3,1fr); gap:9px; }
    .risk-pill {
      min-height:88px;
      background:var(--soft);
      border:0;
      border-radius:14px;
      padding:18px 20px;
    }
    .risk-pill i { display:block; width:9px; height:9px; border-radius:50%; margin-bottom:9px; }
    .risk-pill:nth-child(1) i { background:var(--green); }
    .risk-pill:nth-child(2) i { background:var(--mustard); }
    .risk-pill:nth-child(3) i { background:var(--danger); }
    .risk-pill strong { display:block; color:var(--navy); font-size:13px; margin-bottom:1px; font-weight:650; }
    .risk-pill span { color:var(--muted); font-size:11.5px; }
    .hero-proof {
      min-height:88px;
      background:var(--soft);
      border-radius:14px;
      padding:18px 20px;
    }
    .hero-proof strong {
      display:block;
      color:var(--navy);
      font-size:clamp(25px, 2.4vw, 30px);
      line-height:1;
      letter-spacing:-.04em;
      margin-bottom:10px;
    }
    .hero-proof span { color:#4b5567; font-size:12.5px; font-weight:700; }

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
      background-color:rgba(0,32,96,.88);
      background-image:url('imagenes/17.png');
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
      background:rgba(131,10,61,.12);
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
      background:rgba(0,32,96,.78);
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
      background:rgba(0,32,96,.78);
      color:#fff;
      font-size:12.5px;
      font-weight:600;
    }

    .mining {
      background-color:rgba(0,32,96,.90);
      background-image:url('imagenes/18.png');
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
      background:#001846;
      min-height:390px;
      display:flex;
      align-items:center;
      isolation:isolate;
    }
    .mid-cta-parallax::before {
      content:"";
      position:absolute;
      inset:-12% 0;
      background:
        linear-gradient(90deg, rgba(0,24,70,.97) 0%, rgba(0,32,96,.90) 42%, rgba(0,32,96,.58) 100%),
        url('imagenes/6.png') center right / cover no-repeat;
      background-attachment:fixed;
      z-index:-2;
    }
    .mid-cta-parallax::after {
      content:"";
      position:absolute;
      inset:0;
      background:
        linear-gradient(90deg, transparent 0 68%, rgba(176,23,79,.88) 68% 69%, transparent 69%),
        radial-gradient(circle at 83% 22%, rgba(131,10,61,.22), transparent 30%);
      z-index:-1;
      pointer-events:none;
    }
    .mid-cta-grid {
      display:grid;
      grid-template-columns:minmax(0, .96fr) minmax(280px, .58fr);
      gap:24px;
      align-items:center;
    }
    .mid-cta-card {
      max-width:650px;
      padding:32px 0;
    }
    .mid-cta-card .eyebrow { color:#7DE0B8; }
    .mid-cta-card h2 {
      color:#fff;
      font-size:clamp(24px, 3vw, 34px);
      max-width:620px;
    }
    .mid-cta-card .lead { color:rgba(255,255,255,.80); }
    .mid-cta-actions { display:flex; gap:10px; flex-wrap:wrap; margin-top:20px; }
    .mid-cta-panel {
      background:#fff;
      color:var(--ink);
      border-radius:22px;
      padding:22px;
      box-shadow:0 22px 55px rgba(0,0,0,.24);
      border:1px solid rgba(255,255,255,.50);
      position:relative;
      overflow:hidden;
    }
    .mid-cta-panel::before {
      content:"";
      position:absolute;
      inset:0 0 auto 0;
      height:4px;
      background:linear-gradient(90deg,var(--green),var(--mustard));
    }
    .mid-cta-panel h3 { margin-top:4px; }
    .mid-cta-proof { display:grid; gap:10px; margin-top:14px; }
    .mid-cta-proof span {
      display:flex;
      align-items:flex-start;
      gap:9px;
      padding:11px 12px;
      border-radius:13px;
      background:var(--soft);
      border:1px solid var(--line);
      color:var(--muted);
      font-size:13px;
      font-weight:550;
    }
    .mid-cta-proof b { color:var(--green); }

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



    .seal-preview {
      background:linear-gradient(180deg,#fff 0%, var(--soft) 100%);
      overflow:hidden;
    }
    .seal-preview-grid {
      display:grid;
      grid-template-columns:minmax(0,.95fr) minmax(320px,1.05fr);
      gap:28px;
      align-items:center;
    }
    .seal-preview-visual {
      position:relative;
      min-height:430px;
      border-radius:24px;
      overflow:hidden;
      box-shadow:var(--shadow);
      background:var(--navy);
    }
    .seal-preview-visual img { width:100%; height:100%; object-fit:cover; position:absolute; inset:0; }
    .seal-preview-visual::after {
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(180deg,rgba(0,32,96,.10),rgba(0,24,70,.72));
    }
    .seal-preview-caption {
      position:absolute;
      left:22px;
      right:22px;
      bottom:22px;
      z-index:2;
      padding:18px;
      border-radius:18px;
      background:rgba(255,255,255,.92);
      border:1px solid rgba(255,255,255,.62);
      box-shadow:0 18px 42px rgba(0,0,0,.18);
    }
    .seal-preview-caption strong { display:block; color:var(--navy); margin-bottom:5px; }
    .seal-preview-caption span { color:var(--muted); font-size:13px; }
    .recognition-levels { display:grid; gap:11px; margin:20px 0 0; }
    .recognition-level {
      display:grid;
      grid-template-columns:auto 1fr;
      gap:14px;
      align-items:center;
      background:#fff;
      border:1px solid var(--line);
      border-radius:16px;
      padding:16px;
      box-shadow:var(--shadow-sm);
    }
    .medal-icon {
      width:64px;
      height:64px;
      display:grid;
      place-items:center;
      filter:drop-shadow(0 10px 18px rgba(0,32,96,.12));
    }
    .medal-icon img { width:100%; height:100%; object-fit:contain; display:block; }

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
      background:#001846;
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
    .motion-card:hover { transform:translateY(-4px); box-shadow:var(--shadow); border-color:rgba(131,10,61,.24); }
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
    .score.medium { background:var(--mustard); color:#fff; }
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
      .seal-preview-grid,
      .mining-grid,
      .contact-cta,
      .mid-cta-grid,
      .footer-grid { grid-template-columns:1fr; }
      .grid-4 { grid-template-columns:repeat(2,1fr); }
      .risk-box { grid-template-columns:repeat(2,1fr); }
      .why-list, .image-band { grid-template-columns:1fr; }
      .modal-layout { grid-template-columns:1fr; }
      .modal-aside { display:none; }
      .hero::before { opacity:1; }
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
      .hero-copy, .risk-box, .contact-cta, .seal-card, .mid-cta-panel { padding:18px; border-radius:17px; }
      .mid-cta-parallax { min-height:420px; }
      .mid-cta-card { padding:8px 0; }
      .hero-kpis, .risk-card-mini, .grid-4, .form-grid, .image-stack { grid-template-columns:1fr; }
      .risk-box { grid-template-columns:1fr; padding:16px; }
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
      <div class="hero-bg-rotator" aria-hidden="true">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="hero-bg-fade" aria-hidden="true"></div>
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
            <div class="slide-img" style="background-image:url('imagenes/14.png');"></div>
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
            <div class="slide-img" style="background-image:url('imagenes/15.png');"></div>
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
            <div class="slide-img" style="background-image:url('imagenes/16.png');"></div>
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

    <section class="section seal-preview" id="sello-resumen">
      <div class="wrap seal-preview-grid">
        <div class="reveal-card">
          <span class="eyebrow">Sello Crecer</span>
          <h2>Reconocimiento visible para empresas contratistas confiables.</h2>
          <p class="lead">El Sello Crecer comunica estándares de cumplimiento laboral, previsional, documental y de gestión preventiva frente a clientes y empresas mandantes.</p>
          <div class="recognition-levels" aria-label="Tres niveles de reconocimiento del Sello Crecer">
            <article class="recognition-level">
              <span class="medal-icon" aria-hidden="true"><img src="sello/oro.png" alt=""></span>
              <div><h3>Sello Crecer Oro</h3><p class="text-muted">Excelencia en cumplimiento y gestión preventiva para diferenciarse.</p></div>
            </article>
            <article class="recognition-level">
              <span class="medal-icon" aria-hidden="true"><img src="sello/plata.png" alt=""></span>
              <div><h3>Sello Crecer Plata</h3><p class="text-muted">Cumplimiento consistente, controlado y con procesos preventivos activos.</p></div>
            </article>
            <article class="recognition-level">
              <span class="medal-icon" aria-hidden="true"><img src="sello/bronce.png" alt=""></span>
              <div><h3>Sello Crecer Bronce</h3><p class="text-muted">Cumplimiento básico acreditado y brechas principales bajo seguimiento.</p></div>
            </article>
          </div>
          <div class="mid-cta-actions"><a class="btn btn-primary" href="sello-crecer.php#sello">Conocer Sello Crecer</a></div>
        </div>
        <div class="seal-preview-visual reveal-card">
          <img src="imagenes/13.png" alt="Reconocimiento y certificación del Sello Crecer">
          <div class="seal-preview-caption"><strong>Tres niveles de reconocimiento</strong><span>Medallas Bronce, Plata y Oro para comunicar confianza operacional.</span></div>
        </div>
      </div>
    </section>

    <section class="risk-strip" id="evaluacion">
      <div class="wrap">
        <div class="risk-box">
          <div class="risk-intro">
            <span class="eyebrow">Autoevaluación de Riesgo Crecer</span>
            <h2>Diagnóstico preliminar en pocos minutos.</h2>
            <p class="lead">Evalúa de forma inicial el cumplimiento laboral, previsional, documental y de seguridad de tu organización.</p>
            <button class="btn btn-primary" data-open-eval>Iniciar evaluación gratuita</button>
          </div>
          <div class="hero-proof"><strong>20+</strong><span>años de experiencia</span></div>
          <div class="hero-proof"><strong>360°</strong><span>cumplimiento y riesgo</span></div>
          <div class="hero-proof"><strong>100%</strong><span>diagnóstico trazable</span></div>
          <div class="hero-proof"><strong>0-100</strong><span>score inicial</span></div>
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
      <div class="wrap mid-cta-grid">
        <div class="mid-cta-card reveal-card">
          <span class="eyebrow">Control preventivo para contratistas</span>
          <h2>Acredita, ordena y anticipa riesgos antes de que impacten la operación.</h2>
          <p class="lead">Te ayudamos a convertir documentos, alertas e indicadores en decisiones claras para sostener cumplimiento laboral, previsional y documental.</p>
          <div class="mid-cta-actions">
            <a class="btn btn-primary" href="contacto.php#contacto">Agendar una reunión</a>
            <a class="btn btn-mustard" href="servicios.php#acreditacion">Ver acreditación</a>
          </div>
        </div>
        <aside class="mid-cta-panel reveal-card" aria-label="Beneficios del acompañamiento Crecer Acredita">
          <h3>Más control, menos contingencias</h3>
          <p class="text-muted">Un acompañamiento alineado con el enfoque de Crecer Acredita: simple, trazable y preventivo.</p>
          <div class="mid-cta-proof">
            <span><b>01</b> Revisión documental y seguimiento de observaciones.</span>
            <span><b>02</b> Alertas para anticipar incumplimientos críticos.</span>
            <span><b>03</b> Reportabilidad ejecutiva para empresas mandantes.</span>
          </div>
        </aside>
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

  </script>
</body>
</html>
