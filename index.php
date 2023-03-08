<?php
session_start();
require_once "./comons/version_css_js.php";
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

<link rel="stylesheet" href="./public/css/home.css?ver=<?php echo $ver ?>">
<link rel="canonical" href="https://www.servynet.es/inicio">

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
    "image": "https://www.servynet.es/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-logo-servynet.webp",
    "telephone": ["34 856 500 700"],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "C/ Jose Garzon, 24 11100 San Fernando, Cadiz"
    },
    "url": "https://www.servynet.es/inicio"
  }
</script>
</head>

<body>
  <main>
    <!-- Seccion del menu de navegacion -->
    <?php
    require_once('./comons/nav.php');
    ?>

    <!-- Seccion del header -->
    <div class="banner">
      <div class="header">
        <h1>Diseñamos tu página web. <br> La mantenemos optimizada </h1>
        <p>desde 35€/mes</p>
      </div>
      <div class="header_img">
        <picture>
          <source id="sourceMobile" media="(max-width: 600px)" srcset="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio-mobile.webp">
          <source id="sourceDes" type='image/webp' srcset="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp">
          <img id="imageDes" class="imageSlider" src="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
        </picture>
      </div>
    </div>

    <!-- Seccion de los iconos principales -->
    <div class="container bg_light_blue">
      <div class="content">
        <div class="header_icons">
          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M0 816v-53q0-39.464 42-63.232T150.398 676q12.158 0 23.38.5T196 678.727q-8 17.273-12 34.842-4 17.57-4 37.431v65H0Zm240 0v-65q0-65 66.5-105T480 606q108 0 174 40t66 105v65H240Zm540 0v-65q0-19.861-3.5-37.431Q773 696 765 678.727q11-1.727 22.171-2.227 11.172-.5 22.829-.5 67.5 0 108.75 23.768T960 763v53H780ZM479.8 666Q400 666 350 690q-50 24-50 61v5h360v-6q0-36-49.5-60t-130.7-24Zm-330.233-20Q121 646 100.5 625.438 80 604.875 80 576q0-29 20.562-49.5Q121.125 506 150 506q29 0 49.5 20.5t20.5 49.933Q220 605 199.5 625.5T149.567 646Zm660 0Q781 646 760.5 625.438 740 604.875 740 576q0-29 20.562-49.5Q781.125 506 810 506q29 0 49.5 20.5t20.5 49.933Q880 605 859.5 625.5T809.567 646ZM480 576q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600 456q0 50-34.5 85T480 576Zm.351-180Q455 396 437.5 413.149t-17.5 42.5Q420 481 437.351 498.5t43 17.5Q506 516 523 498.649t17-43Q540 430 522.851 413t-42.5-17ZM480 756Zm0-300Z" />
            </svg>
            <div>
              <h2>Experiencia</h2>
              <p>Más de 15 años</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M640 536q17 0 28.5-11.5T680 496q0-17-11.5-28.5T640 456q-17 0-28.5 11.5T600 496q0 17 11.5 28.5T640 536ZM320 436h200v-60H320v60ZM180 936q-34-114-67-227.5T80 476q0-92 64-156t156-64h200q29-38 70.5-59t89.5-21q25 0 42.5 17.5T720 236q0 6-1.5 12t-3.5 11q-4 11-7.5 22.5T702 305l91 91h87v279l-113 37-67 224H480v-80h-80v80H180Zm45-60h115v-80h200v80h115l63-210 102-35V456h-52L640 328q1-25 6.5-48.5T658 232q-38 10-72 29.5T534 316H300q-66.286 0-113.143 46.857T140 476q0 103.158 29 201.579T225 876Zm255-322Z" />
            </svg>
            <div>
              <h2>Ahorro</h2>
              <p>Optimizamos los costes</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="m346 996-76-130-151-31 17-147-96-112 96-111-17-147 151-31 76-131 134 62 134-62 77 131 150 31-17 147 96 111-96 112 17 147-150 31-77 130-134-62-134 62Zm27-79 107-45 110 45 67-100 117-30-12-119 81-92-81-94 12-119-117-28-69-100-108 45-110-45-67 100-117 28 12 119-81 94 81 92-12 121 117 28 70 100Zm107-341Zm-43 133 227-225-45-41-182 180-95-99-46 45 141 140Z" />
            </svg>
            <div>
              <h2>Garantía</h2>
              <p>Calidad certificada</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M517 525 353 361l43-43 121 122 234-233 42 41-276 277Zm49 469-311-89v57H40V568h309l255 96q27 10 45.5 32.5T668 761h114q42 0 70 30t28 81v26l-314 96Zm-466-92h94V628h-94v274Zm462 30 256-78q-6-19-15-26t-21-7H575q-30 0-55.5-4T471 806l-81-25 22-58 73 24q25 8 47.5 11t71.5 3q0-12-4.5-23.5T584 721l-245-93h-84v214l307 90ZM194 765Zm410-4Zm-410 4Zm61 0Z" />
            </svg>
            <div>
              <h2>Calidad</h2>
              <p>Controles de nivel</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M120 936v-76l60-60v136h-60Zm165 0V700l60-60v296h-60Zm165 0V640l60 61v235h-60Zm165 0V701l60-60v295h-60Zm165 0V540l60-60v456h-60ZM120 700v-85l280-278 160 160 280-281v85L560 582 400 422 120 700Z" />
            </svg>
            <div>
              <h2>Eficiencia</h2>
              <p>Campañas que funcionan</p>
            </div>
          </article>
        </div>
      </div>
    </div>

    <!-- Seccion de Nosotros -->
    <div class="container">
      <div class="content">
        <section class="section_us">
          <div class="section_us_content">
            <header>
              <h2>
                SERVYNET
              </h2>
              <h3>
                Agencia de Marketing Digital
              </h3>
            </header>
            <p>
              ¿Quieres <strong>aumentar tus ventas y el crecimiento de tu negocio?</strong> Somos especialistas en Diseño y Mantenimiento Web, Adwords, Social Media y Posicionamiento WEB. En <strong> Servynet, Agencia de Marketing Digital</strong>, te ayudamos a conseguir las metas que deseas para tu negocio. Lo hacemos mediante la consultoría estratégica y la correcta combinación de todas las herramientas de marketing online.
            </p>

            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="m419 735 289-289-43-43-246 246-119-119-43 43 162 162ZM180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600V276H180v600Zm0-600v600-600Z" />
              </svg>
              <p><strong>Diseñamos tu WEB a medida, tal y como te gusta</strong></p>
            </div>
            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="m419 735 289-289-43-43-246 246-119-119-43 43 162 162ZM180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600V276H180v600Zm0-600v600-600Z" />
              </svg>
              <p><strong>Mantenemos tu WEB optimizada para un mejor rendimiento</strong></p>
            </div>
            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="m419 735 289-289-43-43-246 246-119-119-43 43 162 162ZM180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600V276H180v600Zm0-600v600-600Z" />
              </svg>
              <p><strong>Adaptamos nuestros servicios según tus necesidades</strong></p>
            </div>
            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="m419 735 289-289-43-43-246 246-119-119-43 43 162 162ZM180 936q-24 0-42-18t-18-42V276q0-24 18-42t42-18h600q24 0 42 18t18 42v600q0 24-18 42t-42 18H180Zm0-60h600V276H180v600Zm0-600v600-600Z" />
              </svg>
              <p><strong>Convierte las visitas de tu WEB en más conversiones de ventas</strong></p>
            </div>
          </div>

          <picture class="picture-defer">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-inicio-agencia.jpg">
            <img class="image" src="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-inicio-agencia.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
        </section>
      </div>
    </div>

    <!-- Seccion de Plan -->
    <div class="container">
      <div class="content">
        <header class="plan_title linea-efecto">
          <h2>Nuestros Planes Básicos</h2>
        </header>

        <div class="plan_card">
          <div class="planes position">
            <picture class="picture-defer position_img">
              <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/plan-mantenimiento-basico-web.webp">
              <img class="image" src="/public/img/default.png" data-img="./public/img/plan-mantenimiento-basico-web.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
            </picture>

            <div class="plan_content">
              <header>
                <h3>CMS WEB <br> CORPORATIVA</h3>
                <h4>Desde 35,00 € al mes</h4>
              </header>
              <p>(Impuestos no incluidos)</p>
              <a href="/mantenimiento/">Más Info</a>
            </div>
          </div>

          <div class="planes position">
            <picture class="picture-defer position_img">
              <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/plan-basico-google-ads.webp">
              <img class="image" src="/public/img/default.png" data-img="./public/img/plan-basico-google-ads.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
            </picture>

            <div class="plan_content">
              <header>
                <h3>GOOGLE ADS</h3>
                <h4>Desde 75,00 € al mes</h4>
              </header>
              <p>(Impuestos no incluidos)</p>
              <a href="/google-ads/">Más Info</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Seccion del formulario -->
    <?php
    require_once('./comons/form.php');
    ?>

    <!-- Seccion de grilla -->
    <div class="container bg_grilla">
      <div class="content">
        <div class="section_us">
          <picture class="picture-defer imagen--show">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-inicio-exito.webp">
            <img class="image" src="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-inicio-exito.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
          <section class="section_us_content">
            <header>
              <h2>
                EL ÉXITO DE NUESTROS CLIENTES NOS AVALA
              </h2>
              <h3>
                Agencia de Marketing Digital de Calidad
              </h3>
            </header>
            <p>
              En nuestra <strong>Agencia de Marketing Digital</strong> ofrecemos un <strong>servicio integral</strong> adaptado a las necesidades de cada negocio. Estamos en constante renovación adaptando nuestros procesos y estrategias a los cambios del mercado. De este modo, podemos garantizar que nuestros servicios tienen el <strong> éxito asegurado. </strong>
            </p>
            <p>
              En <strong>Servynet</strong>, ofrecemos un <strong>servicio completo y de calidad</strong> de creación, mantenimiento, posicionamiento y campañas de publicidad de tu sitio WEB.
            </p>
          </section>
        </div>

        <div class="section_us">
          <section class="section_us_content show">
            <header>
              <h2>
                EN NUESTRA AGENCIA DE MARKETING DIGITAL
              </h2>
              <h3>
                Ofrecemos un servicio completo y de calidad
              </h3>
            </header>
            <p>
              La <strong>calidad en el servicio</strong> es nuestra prioridad, y ha sido nuestro principal esfuerzo durante años, consiguiendo ofrecer una experiencia muy satisfactoria para nuestros cliente. Debido a este <strong>compromiso de calidad</strong> con el cliente, ofrecemos un servicio integral de <strong>desarrollo WEB y publicidad en internet.</strong>
            </p>
          </section>

          <picture class="picture-defer">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-inicio-mesa.png">
            <img class="image" src="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-inicio-mesa.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
        </div>
      </div>
    </div>

    <!-- Seccion de la Barra -->
    <div class="container bg_section_bar">
      <div class="content">
        <section class="section_bar">
          <div class="section_bar_title">
            <header>
              <h2>UNA ESTRATEGIA A TU MEDIDA</h2>
            </header>
            <p>
              <strong>Adaptada a tu negocio</strong>
            </p>
          </div>
        </section>
      </div>
    </div>

    <!-- Seccion de servicios -->
    <div class="container">
      <div class="content">
        <section class="services">
          <header>
            <h2>Nuestros Servicios</h2>
          </header>
          <!-- PRIMER SERVICIO - DISEÑO Y MANTENIMIENTO WEB -->
          <article class="services_agencia">
            <div class="services_agencia_image">
              <picture class="picture-defer">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-fondo-diseno-y-mantenimiento.png">
                <img class="image" src="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-fondo-diseno-y-mantenimiento.webp" alt="Expertos en marketing" title="Servynet agencia de programacion" width="100" height="100">
              </picture>
              <header>
                <h2>Diseño y <br> Mantenimiento Web</h2>
              </header>
            </div>
            <div class="services_agencia_content">
              <p>La <strong>creación, diseño y mantenimiento de páginas WEB</strong>, actualmente es una necesidad para cualquier negocio, y desde nuestra Agencia de Marketing Digital, ofrecemos un servicio profesional y de calidad a todas las empresas que desean expandir sus productos o servicios en internet.</p>
              <p>Ofrecemos un servicio de <strong>creación de páginas web</strong> y landing pages integral y completo, con una experiencia de más de 15 años en el sector. Creamos su página web no solo con un diseño y funcionalidad adaptado tus necesidades, sino también orientada al posicionamiento WEB en los buscadores más relevantes y a las campañas de publicidad optimizadas para Google.</p>
              <p>Ofrecemos en conjunto un <strong>servicio global</strong> y completo para tu negocio y optimizamos su buen funcionamiento en la red.</p>
              <p>Nuestro equipo de programadores con más de 15 años de experiencia, se encargarán de la creación y mantenimiento de tu página WEB con la <strong>máxima calidad y profesionalidad</strong>.</p>
              <div class="enlace_servicios">
                <a href="/mantenimiento/">MÁS INFO</a>
              </div>
            </div>
          </article>
          <!-- SEGUNDO SERVICIO -  -->
          <article class="services_agencia">
            <div class="services_agencia_image">
              <picture class="picture-defer">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-fondo-posicionamiento.png">
                <img class="image" src="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-fondo-posicionamiento.webp" alt="Expertos en marketing" title="Servynet agencia de programacion" width="100" height="100">
              </picture>
              <header>
                <h2>Posicionamiento Web</h2>
              </header>
            </div>
            <div class="services_agencia_content">
              <p>El <strong>SEO</strong> es el <strong>posicionamiento WEB en buscadores u optimización</strong> de los motores de búsqueda para mejorar la visibilidad de tu página web o Langing Page en los buscadores más relevantes. De esta forma, tus resultados orgánicos serán más visibles y conseguirás posicionar en los primeros lugares tu página web, y por lo tanto, tu negocio.</p>
              <p>En nuestra Agencia de Marketing Digital, ofrecemos un servicio de posicionamiento WEB, con dos grandes grupos diferenciados:</p>
              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>SEO On-page asegura que tu web está optimizada para que los motores de búsqueda entiendan sus contenidos. En este método se trabaja la optimización de las palabras claves o "keywords", los tiempos de carga del sitio o página WEB o "pagespeed", experiencia del usuario en cuanto a accesibilidad y usabilidad, optimización del código, y formato de las URLs.</p>
              </div>
              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>El SEO Off-page se centra en la optimización de los factores externos a tu página web, en la que trabajamos el número de enlaces, la calidad de los mismos, y menciones en medios locales.</p>
              </div>
              <div class="enlace_servicios">
                <a href="/posicionamiento/">MÁS INFO</a>
              </div>
            </div>
          </article>
          <!-- TERCER SERVICIO -  -->
          <article class="services_agencia" id="aire">
            <div class="services_agencia_image">
              <picture class="picture-defer">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-fondo-sem.png">
                <img class="image" src="/public/img/default.png" data-img="./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-fondo-sem.webp" alt="Expertos en marketing" title="Servynet agencia de programacion" width="100" height="100">
              </picture>
              <header>
                <h2>SEM</h2>
              </header>
            </div>
            <div class="services_agencia_content">
              <p>El <strong>SEM o Marketing de buscadores</strong>, consiste en campañas de anuncios de pago en buscadores. Su definición engloba a las acciones de marketing que tienen lugar dentro de un determinado buscador.</p>
              <p>En Servynet, diseñamos y gestionamos tus campañas de <strong>Google Ads</strong> para aumentar la visibilidad de tu negocio. En nuestra Agencia de Marketing Digital, nos comprometemos con los resultados. En el amplio mundo del Marketing online, nos encargamos de ayudar a las empresas a vender sus servicios o productos de forma que los resultados sean efectivos a corto plazo.</p>
              <p>En la actualidad, el <strong>SEM</strong> es necesario para todas las empresas que ofrecen tanto servicios como productos. En nuestra Agencia de Marketing Digital, durante estos más de 10 años de experiencia, hemos desarrollado una serie de estrategias de marketing que ofrecen al cliente resultados garantizados para el crecimiento de su negocio.</p>
              <div class="enlace_servicios">
                <a href="/google-ads/">MÁS INFO</a>
              </div>
            </div>
          </article>
        </section>
      </div>
    </div>

    <?php
    require_once('./comons/footer.php');
    require_once('./comons/btn_top.php');
    ?>
  </main>

  <script src="./public/js/menu.js?ver=<?php echo $ver ?>"></script>
  <script src="./public/js/slide.js?ver=<?php echo $ver ?>"></script>
  <script src="./public/js/recatpcha.js?ver=<?php echo $ver ?>"></script>
  <script src="./public/js/carga_diferida.js?ver=<?php echo $ver ?>"></script>
</body>
</html>