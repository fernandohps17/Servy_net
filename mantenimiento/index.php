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
<meta name="description" content="Servinet diseñamos web en España.">
<meta name="robots" content="noindex">
<link rel="stylesheet" href="../public/css/mantenimiento.css?ver=<?php echo $ver ?>">
<link rel="icon" href="../public/icon/favicon.ico">
<link rel="canonical" href="https://www.servynet.es/mantenimiento">
<link rel="apple-touch-icon" href="../public/icon/favicon.ico">
<link rel="apple-touch-startup-image" href="../public/icon/favicon.ico">
<title>Servynet | Diseño y Mantenimiento Web</title>

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
    "url": "https://www.servynet.es/mantenimiento"
  }
</script>
</head>

<body>

  <main>
    <!-- Seccion del menu de navegacion -->
    <?php
    require_once('../comons/nav.php');
    ?>

    <div class="banner">
      <div class="header">
        <h1>Tu web siempre actualizada. <br> Reduce posibles hackeos.</h1>
        <p>desde 35€/mes</p>
      </div>
      <div class="header_img">
        <picture class="picture-defer">
          <source type='image/webp' srcset="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento-mobile.webp" media="(max-width: 700px)">
          <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
        </picture>
      </div>
    </div>

    <!-- Seccion de los iconos principales -->
    <div class="container bg_light_blue">
      <div class="content">
        <section class="header_icons">
          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M180 876h44l443-443-44-44-443 443v44Zm614-486L666 262l42-42q17-17 42-17t42 17l44 44q17 17 17 42t-17 42l-42 42Zm-42 42L248 936H120V808l504-504 128 128Zm-107-21-22-22 44 44-22-22Z" />
            </svg>
            <div>
              <header>
                <h2>Diseño</h2>
              </header>
              <p>Diseño y programación a medida, actualizaciones de versiones, cambios de diseño y plantillas</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M705 928 447 668q-23 8-46 13t-47 5q-97.083 0-165.042-67.667Q121 550.667 121 454q0-31 8.158-60.388Q137.316 364.223 152 338l145 145 92-86-149-149q25.915-15.158 54.957-23.579Q324 216 354 216q99.167 0 168.583 69.417Q592 354.833 592 454q0 24-5 47t-13 46l259 258q11 10.957 11 26.478Q844 847 833 858l-76 70q-10.696 11-25.848 11T705 928Zm28-57 40-40-273-273q16-21 24-49.5t8-54.5q0-75-55.5-127T350 274l101 103q9 9 9 22t-9 22L319 545q-9 9-22 9t-22-9l-97-96q3 77 54.668 127T354 626q25 0 53-8t49-24l277 277ZM476 572Z" />
            </svg>
            <div>
              <header>
                <h2>Mantenimiento</h2>
              </header>
              <p>Actualizaciones, corrección de errores y cambios de textos o imágenes en tu página web</p>
            </div>
          </article>

          <article class="header_icon ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M180 236v293-3 390-680 186-186Zm99 400h185q11-17 24-32t29-28H279v60Zm0 170h156q-3-15-4.5-30t-.5-30H279v60Zm-99 170q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v154q-14-7-29-12t-31-8V422H511V236H180v680h315q20 21 44.5 36t53.5 24H180Zm480-110q47 0 78.5-31.5T770 756q0-47-31.5-78.5T660 646q-47 0-78.5 31.5T550 756q0 47 31.5 78.5T660 866Zm204 136L756.837 895Q736 909 711.5 917.5 687 926 660 926q-70.833 0-120.417-49.618Q490 826.765 490 755.882 490 685 539.618 635.5q49.617-49.5 120.5-49.5Q731 586 780.5 635.583 830 685.167 830 756q0 27-8.5 51.5T799 852.837L906 960l-42 42Z" />
            </svg>
            <div>
              <header>
                <h2>Monitorización</h2>
              </header>
              <p>Control y seguimiento con Goolgle Analytics y envíos de informes mensuales del tráfico en la WEB</p>
            </div>
          </article>
        </section>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <header class="card_title linea-efecto">
          <h2>SERVYNET TIENE UN PLAN PARA TI</h2>
          <h3>Nuestros Planes</h3>
        </header>

        <div class="cards">

          <div class="card_top">
            <div class="card_content position bg_card_top">
              <div>

                <picture class="picture-defer position_img">
                  <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-mantenimiento-basico-web.webp">
                  <img class="image" src="/public/img/default.png" data-img="../public/img/plan-mantenimiento-basico-web.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
                </picture>
                <header class="card_content_title">
                  <h2>CMS WEB CORPORATIVA</h2>
                </header>
                <hr>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Para WEB corporativa realizada con CMS sin tienda ON-LINE.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Sitio WEB actualizado y optimizado para disminuir posibles hackeos. (Reparación por errores de plugins abandonados o modificados se tarifica por horas de trabajo)</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Actualizaciones de versiones de Wordpress, Prestashop, Magento, etc...</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Actualización de plugins o módulos.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Actualizaciones de servidor, código HTML, PHP, versiones...</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Copias de seguridad WEB y base de datos.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Horas de desarrollo, programación y cambios en la WEB a 35 € + IVA/Hora.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Las urgencias se tarifican según el plan Programador.</p>
                </div>
  
              </div>
              <div class="card_footer bg_card_top_footer">
                <p>Desde</p>
                <header>
                  <h2>35,00 €/mes</h2>
                </header>
                <p class="botton">(Impuestos no incluidos)</p>
                <a href="">CONTRATAR</a>
              </div>
            </div>

            <div class="card_content position bg_card_top">
              <div>

                <picture class="picture-defer position_img">
                  <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-mantenimiento-basico-tienda.webp">
                  <img class="image" src="/public/img/default.png" data-img="../public/img/plan-mantenimiento-basico-tienda.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
                </picture>
                <header class="card_content_title">
                  <h2>CMS TIENDA ONLINE</h2>
                </header>
                <hr>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Para CMS de tienda ON-LINE o catálogo de productos.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Sitio WEB actualizado y optimizado para disminuir posibles hackeos. (Reparación por errores de plugins abandonados o modificados se tarifica por horas de trabajo)</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Actualizaciones de versiones de Wordpress, Prestashop, Magento, etc...</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Actualizaciones de plugins o módulos.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Actualizaciones de Servidor, código HTML, PHP, versiones...</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Copias de seguridad de la WEB.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Horas de desarrollo, programación y cambios en la WEB a 35€+IVA/Hora.</p>
                </div>
  
                <div class="container_servicio_top">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                    <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                  </svg>
                  <p>Las urgencias se tarifican según el plan Programador.</p>
                </div>
  
              </div>
              <div class="card_footer bg_card_top_footer">
                <p>Desde</p>
                <header>
                  <h2>50,00 €/mes</h2>
                  </heade>
                  <p class="botton">(Impuestos no incluidos)</p>
                  <a href="">CONTRATAR</a>
              </div>
            </div>
          </div>

          <div class="cards">

            <div class="card_top">
              <div class="card_content position bg_card_orage">
                <picture class="picture-defer position_img">
                  <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-mantenimiento-avanzado-web.webp">
                  <img class="image" src="/public/img/default.png" data-img="../public/img/plan-mantenimiento-avanzado-web.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
                </picture>
                <div>

                  <header class="card_content_title">
                    <h2>CMS WEB CORPORATIVA</h2>
                  </header>
                  <hr>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Para WEB corporativa realizada con CMS sin tienda ON-LINE o catálogo de productos instalado.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Sitio WEB actualizado y optimizado para disminuir posibles hackeos. (Reparación por errores de plugins abandonados o modificados se tarifica por horas de trabajo)</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de versiones de Wordpress, Prestashop, Magento, etc...</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualización de plugins o módulos.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de servidor, código HTML, PHP, versiones...</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Copias de seguridad WEB y base de datos.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Horas de desarrollo, programación y cambios en la WEB a 35 € + IVA/Hora.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Las urgencias se tarifican según el plan Programador.</p>
                  </div>
  
                </div>
                <div class="card_footer bg_card_orage_footer">
                  <p>Desde</p>
                  <header>
                    <h2>65,00 €/mes</h2>
                  </header>
                  <p class="botton">(Impuestos no incluidos)</p>
                  <a href="">CONTRATAR</a>
                </div>
              </div>

              <div class="card_content position bg_card_orage">
                <div>

                  <picture class="picture-defer position_img">
                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-mantenimiento-avanzado-tienda.webp">
                    <img class="image" src="/public/img/default.png" data-img="../public/img/plan-mantenimiento-avanzado-tienda.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
                  </picture>
                  <header class="card_content_title">
                    <h2>CMS TIENDA ONLINE</h2>
                  </header>
                  <hr>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Para CMS de tienda ON-LINE o catálogo de productos. <span>.</span></p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Sitio WEB actualizado y optimizado para disminuir posibles hackeos. (Reparación por errores de plugins abandonados o modificados se tarifica por horas de trabajo)</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de versiones de Wordpress, Prestashop, Magento, etc...</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de plugins o módulos.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de Servidor, código HTML, PHP, versiones...</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Copias de seguridad de la WEB.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Horas de desarrollo, programación y cambios en la WEB a 35 € + IVA/Hora.</p>
                  </div>
  
                  <div class="container_servicio_top_orage">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Las urgencias se tarifican según el plan Programador.</p>
                  </div>
  
                </div>
                <div class="card_footer bg_card_orage_footer">
                  <p>Desde</p>
                  <header>
                    <h2>85,00 €/mes</h2>
                  </header>
                  <p class="botton">(Impuestos no incluidos)</p>
                  <a href="">CONTRATAR</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <div class="cards">
          <div class="card_top">
            <div class="card_content bg_card_green">
              <div class="card_grid">
                <div class="card_grid_image">
                  <picture class="picture-defer">
                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-mantenimiento-html-virtual-global.png">
                    <img class="image" src="/public/img/default.png" data-img="../public/img/plan-mantenimiento-html-virtual-global.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
                  </picture>
                </div>
                <div class="card_grid_content">
                  <header>
                    <h2>MANTENIMIENTO HTML</h2>
                  </header>
                  <hr>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Para WEBS corporativas realizadas en HTML y PHP.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Sitio WEB actualizado y optimizado para disminuir posibles hackeos.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de servidores, códigos HTML, PHP, versiones ... <br>
                      Corrección de errores.
                    </p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Copias de seguridad de la WEB.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Trámites y gestiones con empresas del servidor del cliente.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Copias de seguridad WEB y base de datos.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Primera hora gratuita para cambios en la WEB (NO ACUMULABLES) y resto a 35 € + IVA/Hora.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Las urgencias se tarifican según el plan Programador.</p>
                  </div>
                </div>
                <div class="card_grid_price_green">
                  <div class="card_footer ">
                    <p>Desde</p>
                    <header>
                      <h2><b>45,00 €/mes</b></h2>
                    </header>
                    <p class="botton">(Impuestos no incluidos)</p>
                    <a href="">CONTRATAR</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="cards">
          <div class="card_top">
            <div class="card_content bg_card_blue">
              <div class="card_grid">
                <div class="card_grid_image">
                  <picture class="picture-defer">
                    <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-programador-virtual-global.png">
                    <img class="image" src="/public/img/default.png" data-img="../public/img/plan-programador-virtual-global.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
                  </picture>
                </div>
                <div class="card_grid_content">
                  <header>
                    <h2>PLAN PROGRAMADOR</h2>
                  </header>
                  <hr>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Para WEBS corporativas realizadas en HTML y PHP.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Sitio WEB actualizado y optimizado para disminuir posibles hackeos.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Actualizaciones de servidores, códigos HTML, PHP, versiones ... <br>
                      Corrección de errores.
                    </p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Copias de seguridad de la WEB.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Trámites y gestiones con empresas del servidor del cliente.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Copias de seguridad WEB y base de datos.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Primera hora gratuita para cambios en la WEB (NO ACUMULABLES) y resto a 35 € + IVA/Hora.</p>
                  </div>

                  <div class="container_servicio_top_orage svg_blue">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                      <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                    </svg>
                    <p>Las urgencias se tarifican según el plan Programador.</p>
                  </div>
                </div>
                <div class="card_grid_price_blue">
                  <div class="card_footer card_footer_color">
                    <p>Desde</p>
                    <header>
                      <h2><b>45,00 €/mes</b></h2>
                    </header>
                    <p>(Impuestos no incluidos)</p>
                    <p class="botton-2">*Las urgencias o los trabajos solicitados para los Sábados, Domingos y Días Festivos se tarificarán a 75.00€ la hora.</p>
                    <a href="">CONTRATAR</a>
                  </div>
                </div>
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

    <div class="container">
      <div class="content">
        <section class="section_us">
          <picture class="picture-defer imagen--show">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-diseno.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-diseno.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
          <div class="section_us_content">
            <header>
              <h2>
                ¿NECESITAS DISEÑAR TU PÁGINA WEB?
              </h2>
              <h3>
                Diseño de Páginas Web
              </h3>
            </header>
            <p>
              Ofrecemos <strong>soluciones para empresas</strong> adaptadas a cada necesidad: diseños programados manualmente con código (HTML, PHP...) con mejor rendimiento y altas velocidades de carga o diseño mediante los gestores de contenido más populares (CMS, Wordpress, Joomla, Drupal, etc), <strong>diseño de Landing Pages</strong> para campañas de marketing, creación de sitios web de <strong> comercio electrónico, blogs</strong>, etc.
            </p>
            <p>
              Además, mientras diseñamos tu WEB prestamos especial atención a algo que no te cuentan todas las agencias: Google valora la <strong>velocidad, el rendimiento y la optimización</strong> de nuestras páginas web para mostrarlas en los mejores puestos de su buscador. De este modo <strong>garantizamos un nivel óptimo en Page Speed</strong>, cuidando factores como AMP (Acelerated Nobile Pages), la usabilidad y diseño web totalmente Responsive.
            </p>
            <p>
              Y como se suele decir, para muestra un botón. Si quieres comprobar por ti mismo el rendimiento de nuestras webs haz click en el siguiente botón.
            </p>
            <div class="enlace_us">
              <a href="#">COMPROBAR PAGE SPEED CON GOOGLE</a>
            </div>
          </div>
        </section>
      </div>
    </div>

    <!-- Seccion de la Barra -->
    <div class="container bg_section_bar">
      <div class="content">
        <section class="section_bar">
          <div class="section_bar_title">
            <header>
              <h2>ESPECIALISTAS EN DISEÑO WEB POR PROGRAMACIÓN</h2>
            </header>
            <p>
              <strong>Mejor rendimiento y velocidad = mejor posicionamiento</strong>
            </p>
          </div>
        </section>
      </div>
    </div>

    <!-- Seccion de grilla -->
    <div class="container">
      <div class="content">
        <section class="section_us">
          <div class="section_us_content">
            <header>
              <h2>
                PROGRAMADORES Y DISEÑADORES
              </h2>
              <h3>
                Con más de 15 años de experiencia
              </h3>
            </header>
            <p>
              <strong>Servynet</strong> cuenta con un equipo de Programadores y Diseñadores expertos en los distintos lenguajes CMS como Wordpress, Magento, PrestaShop, Joomla, etc.
            </p>
            <p>
              Además de <strong>soporte técnico</strong> ofrecemos <strong>asesoramiento y consejos para la optimización de tu página</strong>.
            </p>
            <p>
              Creamos y diseñamos tu sitio WEB en HTML, CSS y PHP, para garantizarte que tu proyecto tenga <strong>la mejor optimización posible</strong>. Ofrecemos un Mantenimiento WEB de calidad, profesional y ajustado a tus necesidades.
            </p>
            <picture class="picture-defer">
              <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-lenguajes.png">
              <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-lenguajes.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="100" height="100">
            </picture>
          </div>

          <picture class="picture-defer">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-programadores.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-programadores.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
        </section>
        <div class="section_us">
          <picture class="picture-defer imagen--show">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-optimizacion.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo-mantenimiento-optimizacion.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
          <div class="section_us_content show_2">
            <header>
              <h2>
                MANTÉN TU WEB OPTIMIZADA
              </h2>
              <h3>
                Mantenimiento y Programación Web
              </h3>
            </header>
            <p>
              Con este servicio completo, nuestros programadores y diseñadores revisarán y realizarán cada mes las <strong>actualizaciones y optimizaciones necesarias</strong> para disminuir posibles hackeos.
            </p>
            <p>
              Además, si tienes <strong>cualquier problema técnico</strong> en tu página, no te preocupes, podemos solucionarlo.
            </p>
            <p>
              Nuestro servicio de <strong>Programación y Mantenimiento Web</strong> está especialmente pensado para empresas y particulares que tienen página Web y desean mantenerla continuamente actualizada: realizar modificaciones en la estructura de tu web, añadir nuevos contenidos, secciones o servicios, hacer cambios de plantillas y optimizarla para el posicionamiento SEO en buscadores Web como Google, Bing o Yahoo.
            </p>
          </div>
        </div>

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