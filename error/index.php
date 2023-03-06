<?php
session_start();
require_once "../comons/version_css_js.php";
?>

<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#000066">
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriend" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="robots" content="noindex">
<meta name="description" content="En Servinet realizamos diseños y programacion web en España.">

<link rel="stylesheet" href="../public/css/error.css?ver=<?php echo $ver ?>">
<link rel="stylesheet" href="../public/css/home.css?ver=<?php echo $ver ?>">
<link rel="canonical" href="https://www.servynet.com/">

<link rel="apple-touch-icon" href="/public/icon/favicon.ico">
<link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">

<link rel="icon" href="/public/icon/favicon.ico">
<title>Servynet</title>

<!-- Marcado JSON-LD generado por el Asistente para el marcado de datos estructurados de Google. -->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Servynet",
    "image": "https://www.servynet.com/public/img/...",
    "telephone": ["34 956 941 542"],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "C/ Jose Garzon, 24 11100 San Fernando, Cadiz"
    },
    "url": "https://www.servynet.com/"
  }
</script>
</head>

<body>
  <main>
    

    <!-- Menu Navegacion -->
    <?php
      require_once('../comons/nav.php');
    ?>


    <!-- Seccion del error -->
    <section class="container">
      <div class="content">
        <div class="section_error">
          <header>
            <h1 class="section_error_title">ERROR 404</h1>
          </header>

          <div class="section_error_text">
            <p>La página que buscabas no puede ser encontrada</p>
          </div>

          <a class="btn_error" href="/">Ir al Inicio</a>
        </div>
      </div>
    </section>


    <!-- Section Footer -->
    <?php
      require_once('../comons/footer.php');
      require_once('../comons/btn_top.php');
      require_once('../comons/cookies.php');
    ?>

  </main>

  <script src="../public/js/menu.js?ver=<?php echo $ver ?>"></script>

</body>

</html>