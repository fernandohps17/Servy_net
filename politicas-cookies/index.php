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
<meta name="description" content="Servinet Politicas de Cookies.">
<link rel="stylesheet" href="../public/css/mantenimiento.css?ver=<?php echo $ver ?>">
<link rel="stylesheet" href="../public/css/modal_contratar.css?ver=<?php echo $ver ?>">
<link rel="icon" href="../public/icon/favicon.ico">
<link rel="canonical" href="https://www.servynet.es/politicas-cookies">
<link rel="apple-touch-icon" href="../public/icon/favicon.ico">
<link rel="apple-touch-startup-image" href="../public/icon/favicon.ico">
<title>Servynet | Politicas de Cookies</title>

<!-- Marcado JSON-LD generado por el Asistente para el marcado de datos estructurados de Google. -->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "Servynet",
    "image": "https://www.servynet.es/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-logo-servynet.webp",
    "telephone": ["34 856 500 700"],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "C/ Jose Garzon, 24 11100 San Fernando, Cadiz"
    },
    "url": "https://www.servynet.es/politicas-cookies"
  }
</script>
</head>

<body>

  <main>
    <!-- Seccion del menu de navegacion -->
    <?php
    require_once('../comons/nav.php');
    ?>

    






<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>







    <?php
    require_once('../comons/footer.php');
    require_once('../comons/btn_top.php');
    require_once('../comons/cookies.php');
    require_once('../comons/modal.php');
    require_once('../comons/btn_call_phone.php');
    require_once('../comons/modal_contratar.php');
    ?>
  </main>

  <script src="../public/js/components/call_phone.js"></script>
  <script src="../public/js/menu.js?ver=<?php echo $ver ?>"></script>
  <script src="../public/js/recatpcha.js?ver=<?php echo $ver ?>"></script>
  <script src="../public/js/carga_diferida.js?ver=<?php echo $ver ?>"></script>
</body>

</html>