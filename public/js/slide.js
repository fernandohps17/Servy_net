(() => {
  const sourceMobile = document.getElementById("sourceMobile");
  const sourceDes = document.getElementById("sourceDes");
  const imageDes = document.getElementById("imageDes");

  const imagenes = [
    {
      image:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio.webp",
      mobile:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-inicio-mobile.webp",
    },
    {
      image:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento.webp",
      mobile:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-mantenimiento-mobile.webp",
    },
    {
      image:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads.webp",
      mobile:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-googleads-mobile.webp",
    },
    {
      image:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads.webp",
      mobile:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-social-ads-mobile.webp",
    },
    {
      image:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp",
      webp: "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento.webp",
      mobile:
        "./public/img/servynet-agencia-marketing-digital-posicionamiento-seo-cabecera-posicionamiento-mobile.webp",
    },
  ];

  let indiceImagenes = 1;

  function cambiarImagenes() {
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