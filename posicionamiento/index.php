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
<meta name="description" content="En Servinet realizamos paginas web en España.">
<meta name="robots" content="noindex">
<link rel="stylesheet" href="../public/css/posicionamiento.css?ver=<?php echo $ver ?>">
<link rel="icon" href="../public/icon/favicon.ico">
<link rel="canonical" href="https://www.servynet.es/pocisionamiento">
<link rel="apple-touch-icon" href="../public/icon/favicon.ico">
<link rel="apple-touch-startup-image" href="../public/icon/favicon.ico">
<title>Servynet | Posicionamiento Web</title>

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
    "url": "https://www.servynet.es/posicionamiento"
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
        <h1>Posicionamiento Web</h1>
          <p>Gratis hasta que tu WEB esté en <br> la primera página de Google</p>
        </div>
        <div class="header_img">
          <picture class="picture-defer">
            <source type='image/webp' srcset="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento-mobile.webp" media="(max-width: 700px)">
            <img class="image" src="/public/img/default.png" data-img="/public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
        </div>
      </div>

    <!-- Seccion de los iconos principales -->
    <div class="container bg_light_blue">
      <div class="content">
        <section class="header_icons">
          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="M680 976v-60h100v-30h-60v-60h60v-30H680v-60h120q17 0 28.5 11.5T840 776v40q0 17-11.5 28.5T800 856q17 0 28.5 11.5T840 896v40q0 17-11.5 28.5T800 976H680Zm0-280V586q0-17 11.5-28.5T720 546h60v-30H680v-60h120q17 0 28.5 11.5T840 496v70q0 17-11.5 28.5T800 606h-60v30h100v60H680Zm60-280V236h-60v-60h120v240h-60ZM120 847v-60h471v60H120Zm0-243v-60h471v60H120Zm0-243v-60h471v60H120Z" />
            </svg>
            <div>
              <header>
                <h2>Posicionamiento Web</h2>
              </header>
              <p>Implementamos y posicionamos tu página web.</p>
            </div>
          </article>

          <article class="header_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="m123 816-43-43 292-291 167 167 241-241H653v-60h227v227h-59V452L538 735 371 568 123 816Z" />
            </svg>
            <div>
              <header>
                <h2>¿Qué es el SEO?</h2>
              </header>
              <p>Descubre qué puede aportar el servicio de SEO a tu página WEB.</p>
            </div>
          </article>

          <article class="header_icon ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
              <path d="m89 807-49-36 188-300 119.571 140L507 353l109 162q-16 2-31 6.5T555 532l-45-69-152.557 249L236 571 89 807Zm788 209L743 882q-21 15-45.5 23t-50.5 8q-70.833 0-120.417-49.618Q477 813.765 477 742.882 477 672 526.618 622.5q49.617-49.5 120.5-49.5Q718 573 767.5 622.583 817 672.167 817 743q0 26-8.5 50.5T786 840.448L920 973l-43 43ZM646.859 853Q693 853 725 821.141q32-31.859 32-78T725.141 665q-31.859-32-78-32T569 664.859q-32 31.859-32 78T568.859 821q31.859 32 78 32ZM721 525q-15-6-31-8t-33-4l214-337 49 36-199 313Z" />
            </svg>
            <div>
              <header>
                <h2>Seguimiento SEO</h2>
              </header>
              <p>Hacemos un seguimiento y análisis de tu página WEB una vez posicionada en los buscadores.</p>
            </div>
          </article>
        </section>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <header class="card_title linea-efecto">
          <h2>PARA EL ÉXITO DE TU NEGOCIO</h2>
          <h3>Planes Seo</h3>
        </header>

        <div class="cards">

          <div class="card_top">

            <div class="card_content bg_morado">
              <picture class="picture-defer">
                <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/plan-seo.png">
                <img class="image" src="/public/img/default.png" data-img="../public/img/plan-seo.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
              </picture>
              <header>
                <h2>PACK SEO</h2>
              </header>
              <hr>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Creación u Optimización de SEO interno y externo.</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Implementación de 3 palabras claves.</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Control y Optimización mensual del SEO de la WEB. </p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Monitorización de los resultados.</p>
              </div>

              <div class="container_servicio_top_morado">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                  <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
                </svg>
                <p>Para otras condiciones CONSULTAR.</p>
              </div>

              <div class="card_footer_morado bg_morado_footer">
                <p>Desde</p>
                <header>
                  <h2>300,00 €/mes</h2>
                </header>
                <p class="botton">(Impuestos no incluidos)</p>
                <a href="">CONTRATAR</a>
              </div>
            </div>

            <div class="bg_section_services_icon">
              <section class="section_services">
                <div class="section_services_icon_icons">
                  <article class="section_services_icon">
                    <div class="section_services_icon_content">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="M440 936v-60h340V572q0-58-25-111.5T688 366q-42-41-96-65.5T480 276q-58 0-112 24.5T272 366q-42 41-67 94.5T180 572v244h-20q-33 0-56.5-23.5T80 736v-80q0-23 11-40.5t29-28.5l3-53q9-73 41.5-132t81-100q48.5-41 109-63.5T480 216q66 0 126.5 22.5t108.5 64q48 41.5 80.5 100T837 533l3 52q18 9 29 26.5t11 38.5v92q0 22-11 39t-29 26v69q0 24.75-17.625 42.375T780 936H440Zm-80-290q-12 0-21-9t-9-21.5q0-12.5 9-21t21.5-8.5q12.5 0 21 8.625T390 616q0 12-8.625 21T360 646Zm240 0q-12 0-21-9t-9-21.5q0-12.5 9-21t21.5-8.5q12.5 0 21 8.625T630 616q0 12-8.625 21T600 646Zm-359-52q-4-59 16.5-107t55-81.5Q347 372 392 354t90-18q91 0 153 57.5T711 537q-94-1-165.5-50.5T435 358q-16 81-67.5 143.5T241 594Z" />
                      </svg>
                      <header>
                        <h2>Gestor <br> personal</h2>
                      </header>
                    </div>
                    <p>Tendrás contacto directo con tu Gestor en Google Ads para proponerte dudas o mejoras.</p>
                  </article>

                  <article class="section_services_icon">
                    <div class="section_services_icon_content">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="M222 976q-43.75 0-74.375-30.625T117 871V746h127V176l59.8 60 59.8-60 59.8 60 59.8-60 59.8 60 60-60 60 60 60-60 60 60 60-60v695q0 43.75-30.625 74.375T738 976H222Zm516-60q20 0 32.5-12.5T783 871V276H304v470h389v125q0 20 12.5 32.5T738 916ZM357 434v-60h240v60H357Zm0 134v-60h240v60H357Zm333-134q-12 0-21-9t-9-21q0-12 9-21t21-9q12 0 21 9t9 21q0 12-9 21t-21 9Zm0 129q-12 0-21-9t-9-21q0-12 9-21t21-9q12 0 21 9t9 21q0 12-9 21t-21 9ZM221 916h412V806H177v65q0 20 12.65 32.5T221 916Zm-44 0V806v110Z" />
                      </svg>
                      <header>
                        <h2>Facturacion <br> por servicio</h2>
                      </header>
                    </div>
                    <p>Si en agosto os vais de vacaciones, pausamos las campañas y ese mes no emitimos factura.</p>
                  </article>

                  <article class="section_services_icon">
                    <div class="section_services_icon_content">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="m784 805-43-43q17-28 28-66t11-81q0-125-87.5-212.5T480 315q-42 0-80.5 10.5T333 354l-44-44q42-27 91.5-41t99.5-14q68 0 126.5 22.5T711 340l51-51 42 42-51 51q45 49 66 108.5T840 615q0 50-13.5 98.5T784 805ZM510 531V413h-60v58l60 60Zm298 469L704 896q-48 38-103.5 58.5T480 975q-74 0-139.5-28.5T226 869q-49-49-77.5-114.5T120 615q0-61 18.5-116T199 391L57 249l43-43 751 751-43 43Zm-328-85q52 0 98.5-16t85.5-47L243 431q-31 38-47 86t-16 98q0 125 87.5 212.5T480 915ZM360 196v-60h240v60H360Zm94 445Zm83-83Z" />
                      </svg>
                      <header>
                        <h2>Sin <br> permanencia</h2>
                      </header>
                    </div>
                    <p>Colaboraremos juntos el tiempo que estimes necesario sin contratos robustos de permanencia.</p>
                  </article>

                  <article class="section_services_icon">
                    <div class="section_services_icon_content">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="M212 815V476h60v339h-60Zm242 0V476h60v339h-60ZM80 416v-53l400-228 400 228v53H80Zm134-60h532L480 204 214 356ZM80 935v-60h500q2 14 3.5 28.5T591 935H80Zm608-291V476h60v138l-60 30Zm112 412q-69-17-114.5-79.5T640 838V736l160-80 160 80v102q0 76-45.5 138.5T800 1056Zm-21-120 142-142-28-28-114 114-59-59-28 28 87 87ZM214 356h532-532Z" />
                      </svg>
                      <header>
                        <h2>Asesoría<br> gratis 1 mes</h2>
                      </header>
                    </div>
                    <p>Analizamos tu negocio y competidores y diseñamos una estrategia acorde con tus objetivos y tu marca.</p>
                  </article>

                  <article class="section_services_icon">
                    <div class="section_services_icon_content">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="M540 636q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM220 776q-24.75 0-42.375-17.625T160 716V316q0-24.75 17.625-42.375T220 256h640q24.75 0 42.375 17.625T920 316v400q0 24.75-17.625 42.375T860 776H220Zm100-60h440q0-42 29-71t71-29V416q-42 0-71-29t-29-71H320q0 42-29 71t-71 29v200q42 0 71 29t29 71Zm480 180H100q-24.75 0-42.375-17.625T40 836V376h60v460h700v60ZM220 716V316v400Z" />
                      </svg>
                      <header>
                        <h2>Tarifa plana <br> independiente</h2>
                      </header>
                    </div>
                    <p>Si, si, como lees. Gasta solo lo que estimes oportuno, independientemente de la inversión que hagas en Google.</p>
                  </article>

                  <article class="section_services_icon">
                    <div class="section_services_icon_content">
                      <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                        <path d="M319 806h322v-60H319v60Zm0-170h322v-60H319v60Zm-99 340q-24 0-42-18t-18-42V236q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554V236H220v680h520V422H551ZM220 236v186-186 680-680Z" />
                      </svg>
                      <header>
                        <h2>Informes <br> mensuales</h2>
                      </header>
                    </div>
                    <p>A comienzo de cada mes recibirás un informe con el rendimiento de tus cuentas.</p>
                  </article>
                </div>
              </section>
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
        <div class="section_us">
          <picture class="picture-defer imagen-altura">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-seo.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>

          <section class="section_us_content">
            <header>
              <h2>
                ¿QUÉ ES EL SEO?
              </h2>
              <h3>
                Qué puede aportar a mi página web
              </h3>
            </header>
            <p>
              Las siglas <strong>SEO</strong> corresponden a la abreviatura de “Search Engine Optimization”, que traducido al español significa, <strong>optimización en motores de búsqueda</strong>.
            </p>
            <p>
              Por lo tanto, el SEO es una parte esencial de la estrategia online de una marca o empresa. Es esencial para el posicionamiento orgánico de tu página WEB. Con una buena estrategia SEO obtendrás:
            </p>

            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
              </svg>
              <p>
                <strong>Más tráfico</strong>. Después invertir dinero, tiempo y recursos para construir una página web que represente a tu marca, es necesario rentabilizarla mediante servicios como el SEO.
              </p>
            </div>

            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
              </svg>
              <p>
                <strong>Más ventas.</strong> La fórmula es simple: cuantas más personas vean tus productos o servicios, más posibilidades habrá de que los compren. Además, el SEO puede tener una mayor rentabilidad que las formas más tradicionales de publicidad. Esto puede deberse a que las personas que te encuentran ya están buscando información relacionada con los productos y servicios que ofreces.
              </p>
            </div>

            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
              </svg>
              <p>
                <strong>Más leads.</strong> El término lead se usa en marketing digital para referirse a aquellos contactos que nos han dejado sus datos y pasan a formar parte de nuestro registro.
              </p>
            </div>

            <div class="container_servicio_top">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 96 960 960">
                <path d="M378 810 154 586l43-43 181 181 384-384 43 43-427 427Z" />
              </svg>
              <p>
                <strong>Mejor reputación.</strong> El SEO contribuye a una mayor confianza y credibilidad de tu empresa. Cuando tu web aparece entre los primeros resultados de búsqueda, los usuarios entienden que encontrarán información de calidad, lo que les dará la confianza que necesitan para adquirir tanto productos como servicios.
              </p>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- Seccion de la Barra -->
    <div class="container bg_section_bar">
      <div class="content">
        <section class="section_bar">
          <div class="section_bar_title">
            <header>
              <h2>CONSIGUE LA VISIBILIDAD QUE NECESITAS PARA TU NEGOCIO</h2>
            </header>
            <p>
              <strong>y aumenta tus ventas</strong>
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
                Implementamos y optimizamos el SEO en tu WEB
              </h2>
              <h3>
                Posicionamiento Web
              </h3>
            </header>
            <p>
              Analizamos las palabras clave principales, tu sitio web y el de los competidores mejor posicionados, y a continuación, <strong>implementamos la estrategia SEO más adecuada a tu caso</strong>.
            </p>
            <p>
              Para ser realmente eficientes, incidimos en un gran número de factores, como el uso de las distintas etiquetas (título, descripción, palabras clave, Alt…) y el contenido de la página. Así mismo llevamos a cabo una estrategia de adquisición de enlaces o linkbuilding, mediante la cual conseguimos más enlaces relevantes y de calidad que se dirijan hacia tu sitio web.
            </p>
            <p>
              Es muy importante cuidar al detalle la implementación de este servicio de posicionamiento en buscadores, ya que se corre el riesgo de recibir penalizaciones por parte de Google u otros buscadores si se dejan de respetar los criterios establecidos. Salir del índice de Google y no aparecer en los resultados de búsqueda es una experiencia que ningún sitio web querría sufrir.
            </p>
          </div>

          <picture class="picture-defer imagen--show show">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-mantenimiento-optimizacion.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-mantenimiento-optimizacion.webp" alt="Expertos en programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
        </section>
        <section class="section_us">
          <picture class="picture-defer">
            <source class="image source" type='image/webp' srcset="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-mantenimiento.jpg">
            <img class="image" src="/public/img/default.png" data-img="../public/img/servynet-agencia-marketing-digital-posicionamiento-mantenimiento.webp" alt="Servynet agencia de programacion" title="Servynet agencia de programacion" width="100" height="100">
          </picture>
          <div class="section_us_content">
            <header>
              <h2>
                MANTENIMIENTO DE TU PAGINA
              </h2>
              <h3>
                Seguimiento y Análisis SEO
              </h3>
            </header>
            <p>
              Una vez implementada la estrategia SEO y el posicionamiento de tu página, continuamos realizando un <strong>mantenimiento continuo</strong> para no perder los resultados conseguidos. Es parte de nuestro servicio SEO.
            </p>
            <p>
              Además, <strong>seguimos analizando y optimizando datos</strong> a través de herramientas como Google Analytics e integrando esa información de forma adecuada para que la estrategia siga funcionando de la forma correcta.
            </p>
          </div>
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