(() => {
  const sourceMobile = document.getElementById("sourceMobile");
  const sourceDes = document.getElementById("sourceDes");
  const imageDes = document.getElementById("imageDes");
  const title = document.getElementById("title");
  const subtitle = document.getElementById("subtitle");

  const imagenes = [
    {
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio-mobile.webp",
      title: "Diseñamos tu página web. <br> La mantenemos optimizada",
      subtitle: "desde 35€/mes",
    },
    {
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento-mobile.webp",
      title: "Tu web siempre actualizada. <br> Reduce posibles hackeos.",
      subtitle: "desde 35€/mes",
    },
    {
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads-mobile.webp",
      title: "Campañas de Google Ads <br> 100% optimizadas",
      subtitle: "desde 75€/mes",
    },
    // {
      //   image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      //   webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      //   mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads-mobile.webp",
      //   title: "Campañas en redes sociales",
      //   subtitle: "Gestionamos tus anuncios de <br> Facebook, Twitter e Instagram",
    // },
    {
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads-mobile.webp",
      title: "Campañas en redes sociales",
      subtitle: "Gestionamos tus anuncios de <br> Facebook, Twitter e Instagram",
    },
    {
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento-mobile.webp",
      title: "Posicionamiento Web",
      subtitle: "No te cobramos el posicionamiento <br> hasta que tu WEB este en las primeras 20 posiciones <br> en los resultados de búsqueda de Google",
    },
  ];

  let indiceImagenes = 1;

  function cambiarImagenes() {
    imageDes.src = imagenes[indiceImagenes].image;
    sourceDes.srcset = imagenes[indiceImagenes].webp;
    sourceMobile.srcset = imagenes[indiceImagenes].mobile;
    title.innerHTML = imagenes[indiceImagenes].title;
    subtitle.innerHTML = imagenes[indiceImagenes].subtitle;

    if (indiceImagenes < 4) {
      indiceImagenes++;
    } else {
      indiceImagenes = 0;
    }
  }

  setInterval(cambiarImagenes, 5000);
})();