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
<meta name="description" content="Servinet somos una agencia de programacion en España.">
<meta name="robots" content="noindex">
<link rel="stylesheet" href="../public/css/social_ads.css?ver=<?php echo $ver ?>">
<link rel="canonical" href="https://www.servynet.es/social-ads">
<link rel="icon" href="../public/icon/favicon.ico">
<link rel="apple-touch-icon" href="../public/icon/favicon.ico">
<link rel="apple-touch-startup-image" href="../public/icon/favicon.ico">
<title>Servynet | Social ADS</title>

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
    "url": "https://www.servynet.es/social-ads"
  }
</script>
</head>

<body>

  <main>
    <!-- Seccion del menu de navegacion -->
    <?php
    require_once('../comons/nav.php');
    ?>

    <!-- Seccion del header -->
    <div class="banner">
      <div class="header">
        <h1>Campañas en redes sociales </h1>
        <p>Gestionamos tus anuncios de <br> Facebook, Twitter e Instagram</p>
      </div>
      <div class="header_img">
        <picture class="picture-defer">
          <source type='image/webp' srcset="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads-mobile.webp" media="(max-width: 700px)">
          <img class="image" src="/public/img/default.png" data-img="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
        </picture>
      </div>
    </div>

    <!-- Seccion de los iconos principales -->
    <div class="container bg_light_blue">
      <div class="content">
        <section class="header_icons">
          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
              <path d="M180 236v293-3 390-680 186-186Zm99 400h185q11-17 24-32t29-28H279v60Zm0 170h156q-3-15-4.5-30t-.5-30H279v60Zm-99 170q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v154q-14-7-29-12t-31-8V422H511V236H180v680h315q20 21 44.5 36t53.5 24H180Zm480-110q47 0 78.5-31.5T770 756q0-47-31.5-78.5T660 646q-47 0-78.5 31.5T550 756q0 47 31.5 78.5T660 866Zm204 136L756.837 895Q736 909 711.5 917.5 687 926 660 926q-70.833 0-120.417-49.618Q490 826.765 490 755.882 490 685 539.618 635.5q49.617-49.5 120.5-49.5Q731 586 780.5 635.583 830 685.167 830 756q0 27-8.5 51.5T799 852.837L906 960l-42 42Z" />
            </svg>
            <div>
              <header>
                <h2>Estrategia y monitorización</h2>
              </header>
              <p>¿Quieres aumentar tu presencia en redes? Analizamos tu negocio y te asesoramos sobre la mejor solución.</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
              <path d="M319 806h322v-60H319v60Zm0-170h322v-60H319v60Zm-99 340q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554V236H220v680h520V422H551ZM220 236v186-186 680-680Z" />
            </svg>
            <div>
              <header>
                <h2>Envío de informes</h2>
              </header>
              <p>Al comienzo de cada mes recibirás un informe del rendimiento de tus cuentas.</p>
            </div>
          </article>

          <article class="header_icon ">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
              <path d="M730 606v-60h150v60H730Zm50 290-121-90 36-48 121 90-36 48Zm-82-503-36-48 118-89 36 48-118 89ZM210 856V696h-70q-24.75 0-42.375-17.625T80 636V516q0-24.75 17.625-42.375T140 456h180l200-120v480L320 696h-50v160h-60Zm90-280Zm260 134V442q27 24 43.5 58.5T620 576q0 41-16.5 75.5T560 710ZM140 516v120h196l124 74V442l-124 74H140Z" />
            </svg>
            <div>
              <header>
                <h2>Social Media Ads</h2>
              </header>
              <p>Nosotros te gestionamos las campañas para que tú te olvides de planificarlas, optimizarlas o probarlas.</p>
            </div>
          </article>
        </section>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <header class="card_title linea-efecto">
          <h2>ELIGE TU PLAN</h2>
          <h3>Planes Social Ads</h3>
        </header>

        <div class="cards">

          <div class="card_top">
            <div class="card_content position bg_card_top">
              <picture class="picture-defer position_img">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-mantenimiento-basico-web.webp">
                <img class="image" src="/public/img/default.png" data-img="../public/img/plan-mantenimiento-basico-web.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
              </picture>
              <header class="card_content_title">
                <h2>PACK BÁSICO</h2>
              </header>
              <hr>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Creación u Optimización de perfiles en Facebook <span>.</span></p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Alta y configuración de 2 campañas al mes en Facebook Ads.</p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>2 diseños de Banners publicitarios incluidos*</p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Control y Optimización mensual de la Campaña. <span>.</span></p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Monitorización de resultados y envío de informe mensual.</p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Alta para configuración inicial: 150€</p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Diseño Extra de Banner: 45€</p>
              </div>

              <div class="container_servicio_top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Diseño Extra de Vídeo Publicitario: 75€</p>
              </div>

              <div class="card_footer bg_card_top_footer">
                <p>Desde</p>
                <h2>75,00 €/mes</h2>
                <p class="botton">(Impuestos no incluidos)</p>
                <a href="">CONTRATAR</a>
              </div>
            </div>

            <div class="card_content position bg_morado">
              <picture class="picture-defer position_img">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-avanzado-virtual-global.webp">
                <img class="image" src="/public/img/default.png" data-img="../public/img/plan-avanzado-virtual-global.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
              </picture>
              <header class="card_content_title">
                <h2>PACK AVANZADO</h2>
              </header>
              <hr>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Creación u Optimización de perfiles en Redes <br> Sociales. (Facebook, Instagram y Twitter)</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Alta y configuración de 4 campañas al mes en <br> Facebook Ads.</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>4 diseños de Banners publicitarios incluidos*</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Control y Optimización mensual de la Campaña.</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Monitorización de resultados y envío de informe mensual.</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Alta para configuración inicial: 200€</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Diseño Extra de Banner: 45€</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Diseño Extra de Vídeo Publicitario: 75€</p>
              </div>

              <div class="card_footer_morado bg_morado_footer">
                <p>Desde</p>
                <h2>150,00 €/mes</h2>
                <p class="botton">(Impuestos no incluidos)</p>
                <a href="">CONTRATAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Seccion del formulario -->
    <?php
    require_once('../comons/form.php');
    ?>

    <!-- Seccion de grilla -->
    <div class="container">
      <div class="content">
        <section class="section_us">
          <picture class="picture-defer">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-social-ads-ventajas.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-social-ads-ventajas.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
          <div class="section_us_content">
            <header>
              <h2>
                ¿AÚN NO TIENES PUBLICIDAD EN RRSS?
              </h2>
              <h3>
                Ventajas de los Social Ads para tu negocio
              </h3>
            </header>
            <p>
              Promocionar tu negocio mediante los <strong>Social Ads</strong> es fundamental para dar a conocer tus productos o servicios. Ahora bien, ¿en qué consisten realmente?
            </p>
            <p>
              Se consideran Social Ads aquellas publicaciones en redes sociales que se promocionan, es decir, que se paga por ellas con el fin de llegar a más público, no solamente a tus seguidores. Este público lo puedes segmentar, apuntando hacia los lugares donde se encuentren tus posibles clientes.
            </p>
            <p>
              Al realizar campañas de Social Ads, <strong>conseguiremos más clientes y dar visibilidad a nuestro negocio</strong> por un precio bastante razonable, lo que supondrá un <strong>aumento de ventas</strong> y el retorno de la inversión a corto plazo.
            </p>
          </div>
        </section>

        <section class="section_us">
          <div class="section_us_content">
            <header>
              <h2>
                COMMUNITY MANAGERS EXPERTOS
              </h2>
              <h3>
                Más de 15 años de experiencia
              </h3>
            </header>
            <p>
              En <strong>Servynet</strong> nos encargamos de gestionar los perfiles en las redes sociales que mejor se adecúen a tu empresa. También, si lo prefieres, podemos ofrecerte formación o asesoría para que seas tú mismo quien se encargue de gestionarlas. Desde el primer momento dispondrás de un <strong>Community Manager</strong> Personal que analizará tu negocio y te ayudará a definir una estrategia, cualquiera que sea tu sector.
            </p>

            <div class="section_us_content_botton">
              <picture class="picture-defer">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-rrss.png">
                <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-rrss.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="100" height="100">
              </picture>

              <div class="content_auditoria">
                <header class="content_auditoria_title">
                  <h2><b>Auditoría Gratis</b> de tus redes sociales</h2><br>
                </header>

                <div class="content_auditoria_lista">
                  <div class="content_auditoria_lista_text">
                    <div class="container_servicio_top_social show">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                        <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                      </svg>
                      <p>Revisión gratuita de tu perfil <br>con un Community Manager</p>
                    </div>

                    <div class="container_servicio_top_social show">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                        <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                      </svg>
                      <p>Sin compromiso</p>
                    </div>

                    <div class="container_servicio_top_social show">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                        <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                      </svg>
                      <p>Sin necesidad de contratar nada.</p>
                    </div>

                    <div class="container_servicio_top_social show">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                        <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                      </svg>
                      <p>Si, totalmente gratis</p>
                    </div>
                  </div>

                  <div class="enlace">
                    <a href="">LA QUIERO</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <picture class="picture-defer imagen--show show">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-social-ads-community-managers.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-social-ads-community-managers.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="500" height="300">
          </picture>
        </section>
      </div>
    </div>

    <!-- section de iconos secundarios -->
    <div class="container bg_section_services_icon">
      <div class="content">
        <section class="section_services">
          <div class="section_services_icon_title">
            <header>
              <h2>NUESTROS SERVICIOS INCLUYEN</h2>
              <h3>Gestión de Campañas de Google Ads</h3>
            </header>
          </div>
          <hr>

          <div class="section_services_icon_icons">

            <article class="section_services_icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="M440 936v-60h340V572q0-58-25-111.5T688 366q-42-41-96-65.5T480 276q-58 0-112 24.5T272 366q-42 41-67 94.5T180 572v244h-20q-33 0-56.5-23.5T80 736v-80q0-23 11-40.5t29-28.5l3-53q9-73 41.5-132t81-100q48.5-41 109-63.5T480 216q66 0 126.5 22.5t108.5 64q48 41.5 80.5 100T837 533l3 52q18 9 29 26.5t11 38.5v92q0 22-11 39t-29 26v69q0 24.75-17.625 42.375T780 936H440Zm-80-290q-12 0-21-9t-9-21.5q0-12.5 9-21t21.5-8.5q12.5 0 21 8.625T390 616q0 12-8.625 21T360 646Zm240 0q-12 0-21-9t-9-21.5q0-12.5 9-21t21.5-8.5q12.5 0 21 8.625T630 616q0 12-8.625 21T600 646Zm-359-52q-4-59 16.5-107t55-81.5Q347 372 392 354t90-18q91 0 153 57.5T711 537q-94-1-165.5-50.5T435 358q-16 81-67.5 143.5T241 594Z" />
              </svg>
              <div>
                <h2>Gestor personal</h2>
                <p>Tendrás contacto directo con tu Gestor en Google Ads para proponerte dudas o mejoras.</p>
              </div>
            </article>

            <article class="section_services_icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="m784 805-43-43q17-28 28-66t11-81q0-125-87.5-212.5T480 315q-42 0-80.5 10.5T333 354l-44-44q42-27 91.5-41t99.5-14q68 0 126.5 22.5T711 340l51-51 42 42-51 51q45 49 66 108.5T840 615q0 50-13.5 98.5T784 805ZM510 531V413h-60v58l60 60Zm298 469L704 896q-48 38-103.5 58.5T480 975q-74 0-139.5-28.5T226 869q-49-49-77.5-114.5T120 615q0-61 18.5-116T199 391L57 249l43-43 751 751-43 43Zm-328-85q52 0 98.5-16t85.5-47L243 431q-31 38-47 86t-16 98q0 125 87.5 212.5T480 915ZM360 196v-60h240v60H360Zm94 445Zm83-83Z" />
              </svg>
              <div>
                <header>
                  <h2>Sin permanencia</h2>
                </header>
                <p>Colaboraremos juntos el tiempo que estimes necesario sin contratos robustos de permanencia.</p>
              </div>
            </article>

            <article class="section_services_icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="M540 636q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM220 776q-24.75 0-42.375-17.625T160 716V316q0-24.75 17.625-42.375T220 256h640q24.75 0 42.375 17.625T920 316v400q0 24.75-17.625 42.375T860 776H220Zm100-60h440q0-42 29-71t71-29V416q-42 0-71-29t-29-71H320q0 42-29 71t-71 29v200q42 0 71 29t29 71Zm480 180H100q-24.75 0-42.375-17.625T40 836V376h60v460h700v60ZM220 716V316v400Z" />
              </svg>
              <div>
                <header>
                  <h2>Tarifa plana independiente</h2>
                </header>
                <p>Si, si, como lees. Gasta solo lo que estimes oportuno, el coste de nuestros servicios será siempre el mismo, independientemente de la inversión que hagas en Google.</p>
              </div>
            </article>

            <article class="section_services_icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="M222 976q-43.75 0-74.375-30.625T117 871V746h127V176l59.8 60 59.8-60 59.8 60 59.8-60 59.8 60 60-60 60 60 60-60 60 60 60-60v695q0 43.75-30.625 74.375T738 976H222Zm516-60q20 0 32.5-12.5T783 871V276H304v470h389v125q0 20 12.5 32.5T738 916ZM357 434v-60h240v60H357Zm0 134v-60h240v60H357Zm333-134q-12 0-21-9t-9-21q0-12 9-21t21-9q12 0 21 9t9 21q0 12-9 21t-21 9Zm0 129q-12 0-21-9t-9-21q0-12 9-21t21-9q12 0 21 9t9 21q0 12-9 21t-21 9ZM221 916h412V806H177v65q0 20 12.65 32.5T221 916Zm-44 0V806v110Z" />
              </svg>
              <div>
                <header>
                  <h2>Facturación por servicio</h2>
                </header>
                <p>Si en agosto os vais de vacaciones, pausamos las campañas y ese mes no emitimos factura.</p>
              </div>
            </article>

            <article class="section_services_icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="M319 806h322v-60H319v60Zm0-170h322v-60H319v60Zm-99 340q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554V236H220v680h520V422H551ZM220 236v186-186 680-680Z" />
              </svg>
              <div>
                <header>
                  <h2>Informes mensuales</h2>
                </header>
                <p>A comienzo de cada mes recibirás un informe con el rendimiento de tus cuentas.</p>
              </div>
            </article>

            <article class="section_services_icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="M212 815V476h60v339h-60Zm242 0V476h60v339h-60ZM80 416v-53l400-228 400 228v53H80Zm134-60h532L480 204 214 356ZM80 935v-60h500q2 14 3.5 28.5T591 935H80Zm608-291V476h60v138l-60 30Zm112 412q-69-17-114.5-79.5T640 838V736l160-80 160 80v102q0 76-45.5 138.5T800 1056Zm-21-120 142-142-28-28-114 114-59-59-28 28 87 87ZM214 356h532-532Z" />
              </svg>
              <div>
                <header>
                  <h2>Auditoría Premium gratis</h2>
                </header>
                <p>Cuando empieces a colaborar con nosotros, un Técnico de Google Ads personal te ofrecerá las auditorías online que necesites. En ellas podrás ver y conocer los resultados de tu campaña.</p>
              </div>
            </article>
          </div>
        </section>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <section class="section_us">
          <picture class="picture-defer imagen--show">
            <source class="image source" width="100" height="100" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-social-ads-publicidad-rrss.jpg">
            <img class="image" width="100" height="100" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-social-ads-publicidad-rrss.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
          <div class="section_us_content --show_title">
            <header>
              <h2>
                ¿TU NEGOCIO NO EVOLUCIONA COMO DEBERÍA?
              </h2>
              <h3>
                Gestionamos tu publicidad en redes sociales
              </h3><br>
            </header>
            <p>
              El 80% de los españoles ya deciden sus compras tras ver información de la marca en redes sociales. ¿A qué esperas para aprovechar la oportunidad que suponen las redes sociales para impulsar tu negocio?
            </p>
            <p>
              <strong>En Servynet gestionamos las campañas de publicidad en redes sociales</strong> de forma profesional y personalizada, utilizando contenidos atractivos diseñados por profesionales, con los que conseguirás llegar al público objetivo de tu negocio.
            </p>
            <p>
              Deja que nuestro equipo con una amplia experiencia en <strong> Redes Sociales y Marketing Digital</strong> te asesore. Podrás sacar el máximo partido de tu marca online mediante la publicidad en Redes Sociales y así mejorar tu posicionamiento y tus ventas.
            </p>
          </div>
        </section>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <header class="card_title linea-efecto">
          <h2>IMPULSA TU NEGOCIO</h2>
          <h3>Atrae a más clientes</h3>
        </header>
        <section class="bottom_icons">
          <article class="bottom_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M691 976q-78.435 0-133.718-55.282Q502 865.435 502 787q0-78.435 55.282-133.718Q612.565 598 691 598q78.435 0 133.718 55.282Q880 708.565 880 787q0 78.435-55.282 133.718Q769.435 976 691 976Zm58.243-88L777 860l-75-75V673h-39v126l86.243 89ZM180 922q-24.75 0-42.375-17.625T120 862V280q0-24.75 15.5-42.375T162 220h202q7-35 34.5-57.5T462 140q36 0 63.5 22.5T560 220h202q24.75 0 42.375 17.625T822 280v295q-15-9-29.516-15.48Q777.968 553.04 762 548V280H656v130H286V280H180v582h273q5 15 12 29.5t17 30.5H180Zm300-646q17 0 28.5-11.5T520 236q0-17-11.5-28.5T480 196q-17 0-28.5 11.5T440 236q0 17 11.5 28.5T480 276Z" />
            </svg>
            <div>
              <header>
                <h2>Planificación de estrategia</h2>
              </header>
              <p>Definimos un calendario mensual con el horario y la fecha óptima para tus publicaciones.</p>
            </div>
          </article>

          <article class="bottom_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M180 976q-24 0-42-18t-18-42V296q0-24 18-42t42-18h65v-60h65v60h340v-60h65v60h65q24 0 42 18t18 42v620q0 24-18 42t-42 18H180Zm0-60h600V486H180v430Zm0-490h600V296H180v130Zm0 0V296v130Zm300 230q-17 0-28.5-11.5T440 616q0-17 11.5-28.5T480 576q17 0 28.5 11.5T520 616q0 17-11.5 28.5T480 656Zm-160 0q-17 0-28.5-11.5T280 616q0-17 11.5-28.5T320 576q17 0 28.5 11.5T360 616q0 17-11.5 28.5T320 656Zm320 0q-17 0-28.5-11.5T600 616q0-17 11.5-28.5T640 576q17 0 28.5 11.5T680 616q0 17-11.5 28.5T640 656ZM480 816q-17 0-28.5-11.5T440 776q0-17 11.5-28.5T480 736q17 0 28.5 11.5T520 776q0 17-11.5 28.5T480 816Zm-160 0q-17 0-28.5-11.5T280 776q0-17 11.5-28.5T320 736q17 0 28.5 11.5T360 776q0 17-11.5 28.5T320 816Zm320 0q-17 0-28.5-11.5T600 776q0-17 11.5-28.5T640 736q17 0 28.5 11.5T680 776q0 17-11.5 28.5T640 816Z" />
            </svg>
            <div>
              <header>
                <h2>Publicaciones Periódicas</h2>
              </header>
              <p>Mantenemos tus redes sociales activas con contenido de interés para tu audiencia.</p>
            </div>
          </article>

          <article class="bottom_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M480 976q-82 0-155-31.5t-127.5-86Q143 804 111.5 731T80 576q0-85 32-158t87.5-127q55.5-54 130-84.5T489 176q79 0 150 26.5T763.5 276q53.5 47 85 111.5T880 529q0 108-63 170.5T650 762h-75q-18 0-31 14t-13 31q0 27 14.5 46t14.5 44q0 38-21 58.5T480 976Zm0-400Zm-233 26q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15Zm126-170q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15Zm214 0q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15Zm131 170q20 0 35-15t15-35q0-20-15-35t-35-15q-20 0-35 15t-15 35q0 20 15 35t35 15ZM480 916q11 0 15.5-4.5T500 897q0-14-14.5-26T471 818q0-46 30-81t76-35h73q76 0 123-44.5T820 529q0-132-100-212.5T489 236q-146 0-247.5 98.5T140 576q0 141 99.5 240.5T480 916Z" />
            </svg>
            <div>
              <header>
                <h2>Diseño de Contenido</h2>
              </header>
              <p>Si no dispones de tu propio contenido, nosotros diseñamos imágenes y vídeos atractivos por ti.</p>
            </div>
          </article>

          <article class="bottom_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M840 537v339q0 24-18 42t-42 18H179q-24 0-42-18t-18-42V537q-28-24-37-59t2-70l43-135q8-27 28-42t46-15h553q28 0 49 15.5t29 41.5l44 135q11 35 1.5 70T840 537Zm-270-31q29 0 49-19t16-46l-25-165H510v165q0 26 17 45.5t43 19.5Zm-187 0q28 0 47.5-19t19.5-46V276H350l-25 165q-4 26 14 45.5t44 19.5Zm-182 0q24 0 41.5-16.5T263 449l26-173H189l-46 146q-10 31 8 57.5t50 26.5Zm557 0q32 0 50.5-26t8.5-58l-46-146H671l26 173q3 24 20.5 40.5T758 506ZM179 876h601V565q1 1-6.5 1H758q-25 0-47.5-10.5T666 523q-16 20-40 31.5T573 566q-30 0-51.5-8.5T480 529q-15 18-38 27.5t-52 9.5q-31 0-55-11t-41-32q-24 21-47 32t-46 11h-13.5q-6.5 0-8.5-1v311Zm601 0H179h601Z" />
            </svg>
            <div>
              <header>
                <h2>Social <br> Shopping</h2>
              </header>
              <p>Creamos y gestionamos tu tienda en RRSS. Ventas aseguradas con sólo un clic.</p>
            </div>
          </article>

          <article class="bottom_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M140 779v97h680v-97H140Zm0-443h125q-5-9-8-22.5t-3-24.5q0-47.083 33-80.042Q320 176 366 176q30.741 0 56.87 15.5Q449 207 464 231l16.5 26 16.5-26q16-25 41.015-40t53.879-15Q640 176 673 208.5q33 32.5 33 80.861Q706 300 703.5 311t-7.5 25h124q24 0 42 18t18 42v480q0 24-18 42t-42 18H140q-24 0-42-18t-18-42V396q0-24 18-42t42-18Zm0 336h680V396H571l100 139-48 36-143-198-143 198-48-36 100-139H140v276Zm227-330q22 0 37.5-15.5T420 289q0-22-15.5-37.5T367 236q-22 0-37.5 15.5T314 289q0 22 15.5 37.5T367 342Zm225 0q22.95 0 38.475-15.5Q646 311 646 289t-15.525-37.5Q614.95 236 592 236q-21 0-36.5 15.5T540 289q0 22 15.5 37.5T592 342Z" />
            </svg>
            <div>
              <header>
                <h2>Sorteos y Promociones</h2>
              </header>
              <p>Llegamos a nuevos clientes mediante promociones, sorteos y contenido interactivo.</p>
            </div>
          </article>

          <article class="bottom_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M468 816q-96-5-162-74t-66-166q0-100 70-170t170-70q97 0 166 66t74 163l-63-20q-11-64-60-106.5T480 396q-75 0-127.5 52.5T300 576q0 67 42.5 116.5T449 753l19 63Zm48 158q-9 1-18 1.5t-18 .5q-83 0-156-31.5T197 859q-54-54-85.5-127T80 576q0-83 31.5-156T197 293q54-54 127-85.5T480 176q83 0 156 31.5T763 293q54 54 85.5 127T880 576q0 9-.5 18t-1.5 18l-58-18v-18q0-142-99-241t-241-99q-142 0-241 99t-99 241q0 142 99 241t241 99h18l18 58Zm305 22L650 825l-50 151-120-400 400 120-151 50 171 171-79 79Z" />
            </svg>
            <div>
              <header>
                <h2>Campañas de Social Ads</h2>
              </header>
              <p>Creamos y gestionamos tus campañas para llegar a tus clientes potenciales.</p>
            </div>
          </article>
        </section>
      </div>
    </div>

    <?php
    require_once('../comons/footer.php');
    require_once('../comons/btn_top.php');
    require_once('../comons/cookies.php');
    require_once('../comons/modal.php');
    require_once('../comons/btn_call_phone.php');
    ?>
  </main>

  <script src="../public/js/components/call_phone.js"></script>
  <script src="../public/js/menu.js?ver=<?php echo $ver ?>"></script>
  <script src="../public/js/recatpcha.js?ver=<?php echo $ver ?>"></script>
  <script src="../public/js/carga_diferida.js?ver=<?php echo $ver ?>"></script>

</body>

</html>