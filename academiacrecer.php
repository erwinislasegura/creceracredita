<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Academia Crecer | Crecer Acredita</title>
  <meta name="description" content="Academia Crecer: formación para fortalecer competencias, cumplimiento, seguridad y gestión responsable de empresas contratistas y subcontratistas." />
  <meta name="theme-color" content="#002060" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;450;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --navy:#002060;
      --navy-dark:#001846;
      --green:#830A3D;
      --green-2:#A3164E;
      --mustard:#B0174F;
      --ink:#172033;
      --muted:#667386;
      --line:#E3E9F2;
      --soft:#F7F9FC;
      --white:#FFFFFF;
      --shadow:0 14px 36px rgba(0,32,96,.10);
      --shadow-sm:0 7px 22px rgba(0,32,96,.07);
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
    button { font:inherit; }
    .wrap { width:min(var(--max), calc(100% - 34px)); margin-inline:auto; }
    .btn {
      display:inline-flex;
      align-items:center;
      justify-content:center;
      min-height:40px;
      padding:9px 15px;
      border-radius:10px;
      border:1px solid transparent;
      font-size:13.5px;
      font-weight:650;
      text-decoration:none;
      transition:.2s ease;
      cursor:pointer;
    }
    .btn:hover { transform:translateY(-1px); }
  </style>
</head>
<body>
  <?php $activePage = 'academia'; include __DIR__ . '/includes/site-header.php'; ?>
  <?php include __DIR__ . '/academiacrecer.html'; ?>
  <?php include __DIR__ . '/includes/site-footer.php'; ?>
</body>
</html>
