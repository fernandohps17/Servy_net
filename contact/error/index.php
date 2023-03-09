<?php
session_start();
require_once "../comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/main.css?ver=<?php echo $ver ?>">
  <link rel="stylesheet" href="../public/css/error.css?ver=<?php echo $ver ?>">

  <link rel="canonical" href="https://www.hmvrefrigeracion.es/error/">
  <meta name="theme-color" content="#0097dd">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriend" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
  <link rel="apple-touch-startup-image" href="./public/icon/favicon.ico">
  <meta name="description" content="En HMVREFRIGERACION realizamos Servicio Técnico de Reparaciones e Instalación de Aire Acondicionado en España.">

  <link rel="icon" href="/public/icon/favicon.ico">
  <title>HMV Refrigeración</title>

  <!-- Marcado JSON-LD generado por el Asistente para el marcado de datos estructurados de Google. -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "HMV Refrigeración",
      "image": "https://www.hmvrefrigeracion.es/public/img/hmv-suminstro-reparacion-mantenimiento-aire-acondicionado-frio-industrial-logo.png",
      "telephone": ["34 956 941 542"],
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "C/ Jose Garzon, 24 11100 San Fernando, Cadiz"
      },
      "url": "https://www.hmvrefrigeracion.es/"
    }
  </script>
</head>

<body>
  <main>
    <!-- Google Tag Manager (noscript) -->
    <noscript id="tagmanager">
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GDXQMB" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <div class="container">
      <div class="content">
        <!-- Header - Logo -->
        <div class="container_logo" id="home">
          <a href="/" class="container_logo_img">
            <picture>
              <img src="../public/img/hmv-suminstro-reparacion-mantenimiento-aire-acondicionado-frio-industrial-logo.png" alt="Mejor empresa en refrigeración en España" title="Mejor empresa en refrigeración en España" width="100" header="100">
            </picture>
          </a>
          <div class="container_logo_contact">
            <div class="container_header_contact_phone">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M39.75 42q-6.1 0-12.125-3T16.8 31.2Q12 26.4 9 20.375 6 14.35 6 8.25q0-.95.65-1.6Q7.3 6 8.25 6h7q.7 0 1.225.475.525.475.675 1.275l1.35 6.3q.1.7-.025 1.275t-.525.975l-5 5.05q2.8 4.65 6.275 8.1Q22.7 32.9 27.1 35.3l4.75-4.9q.5-.55 1.15-.775.65-.225 1.3-.075l5.95 1.3q.75.15 1.25.75T42 33v6.75q0 .95-.65 1.6-.65.65-1.6.65Zm-28.3-23.4 4.05-4.1L14.35 9H9q0 1.95.6 4.275t1.85 5.325ZM29.9 36.75q2.05.95 4.45 1.55 2.4.6 4.65.7v-5.35l-5.15-1.05ZM11.45 18.6ZM29.9 36.75Z" />
              </svg>
              <p>
                LLÁMANOS: <a href="tel:34956941542" onclick="gtag('event', 'telefonos')"><b>956 94 15 42</b></a>
              </p>
            </div>
            <div class="container_contact_button">
              <picture>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
              </picture>
              <a href="https://api.whatsapp.com/send?phone=956941542" target="_blank" onclick="gtag('event', 'whatsapp')">Enviar Whatsapp</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header - Menu Navegacion -->
    <div class="container bg_blue">
      <div class="content">
        <div class="container_nav">
          <div class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
              <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
            </svg>
          </div>
          <nav class="container_nav_enlaces" id="menuMobile">
            <p class="closeMenu" id="closeMenu">X</p>
            <a href="../index.php#aire">AIRE ACONDICIONADO</a>
            <a href="../index.php#frio">FRÍO INDUSTRIAL</a>
            <a href="../index.php#services">SERVICIO 24H</a>
            <a href="../index.php#tecnologia">TECNOLOGÍA Y MATERIAS PRIMAS</a>
          </nav>
          <div class="container_nav_social">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg></a>

            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
              </svg></a>

            <a href="#"><svg class="icon_facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>


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
    <div class="footer">

      <div class="container bg_footer1">
        <div class="content">
          <div class="section_footer_politicas ">
            <nav class="section_footer_politicas_enlaces">
              <a href="/aviso-legal/" target="_blank">Aviso Legal</a>
              <a href="/politicas-de-cookies/" target="_blank">Políticas de Cookies</a>
              <a href="/politicas-de-privacidad/" target="_blank">Política de Privacidad</a>
            </nav>
          </div>
        </div>
      </div>
  
      <div class="container bg_footer2">
        <div class="content">
          <footer class="section_footer">
            <div class="section_footer_derechos">
              <p class="p1">© 2023 HMV Refrigeración. Todos los derechos reservados.</p>
              <p class="p2">Pagina creada por <a href="https://servynet.es" target="_blank">Servynet</a></p>
            </div>
          </footer>
  
          
        </div>
      </div>
    </div>
    <div class="boton_up">
      <a href="#home"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#0097dd">
          <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zm11.3-395.3l112 112c4.6 4.6 5.9 11.5 3.5 17.4s-8.3 9.9-14.8 9.9H304v96c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V256H144c-6.5 0-12.3-3.9-14.8-9.9s-1.1-12.9 3.5-17.4l112-112c6.2-6.2 16.4-6.2 22.6 0z" />
        </svg></a>
    </div>

    <?php
    require_once('../comons/cookies.php');
    ?>

  </main>

  <script src="../public/js/menu.js?ver=<?php echo $ver ?>"></script>

</body>

</html>