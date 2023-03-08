(() => {
  const title = document.getElementById("title");
  const subtitle = document.getElementById("subtitle");
  const sourceMobile = document.getElementById("sourceMobile");
  const sourceDes = document.getElementById("sourceDes");
  const imageDes = document.getElementById("imageDes");

  const imagenes = [
    {
      title: "Diseñamos tu página web. <br> La mantenemos optimizada",
      subtitle: "desde 35€/mes",
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio-mobile.webp",
    },
    {
      title: "Tu web siempre actualizada. <br> Reduce posibles hackeos.",
      subtitle: "desde 35€/mes",
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento-mobile.webp",
    },
    {
      title: "Campañas de Google Ads <br> 100% optimizadas",
      subtitle: "desde 75€/mes",
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads-mobile.webp",
    },
    // {
    //   title: "Campañas en redes sociales",
    //   subtitle: "Gestionamos tus anuncios de <br> Facebook, Twitter e Instagram",
    //   image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
    //   webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
    //   mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads-mobile.webp",
    // },
    {
      title: "Campañas en redes sociales",
      subtitle: "Gestionamos tus anuncios de <br> Facebook, Twitter e Instagram",
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads-mobile.webp",
    },
    {
      title: "Posicionamiento Web",
      subtitle: "Gratis hasta que tu WEB esté en <br> la primera página de Google",
      image: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp",
      mobile: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento-mobile.webp",
    },
  ];

  let indiceImagenes = 1;

  function cambiarImagenes() {
    title.innerHTML = imagenes[indiceImagenes].title;
    subtitle.innerHTML = imagenes[indiceImagenes].subtitle;
    imageDes.src = imagenes[indiceImagenes].image;
    sourceDes.srcset = imagenes[indiceImagenes].webp;
    sourceMobile.srcset = imagenes[indiceImagenes].mobile;

    if (indiceImagenes < 4) {
      indiceImagenes++;
    } else {
      indiceImagenes = 0;
    }
  }

  setInterval(cambiarImagenes, 5000);
})();