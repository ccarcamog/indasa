<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Componentes</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/css/componentes.css">
  <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
</head>

<body>

  <!-- Preloader Start -->
  <div id="preloader">
    <div class="fplus-load"></div>
    <!-- <img src="img/core-img/h-logo.png" alt="logo"> -->
  </div>

  <!-- ****** Header Area Start ****** -->
  <header class="header_area">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col-12 d-flex">
          <div class="logo_area">
            <a class="small-logo d-flex d-md-none align-items-center justify-content-center" href="/"><img src="img/INDASA-06.png" alt="logo"></a>
            <a class="big-logo d-md-flex d-none align-items-center justify-content-center" href="/"><img src="img/INDASA-logo.png" alt="logo"></a>
          </div>
          <div class="menu-open-close d-flex align-items-center justify-content-center">
            <div id="nav-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ****** Header Area End ****** -->

  <!-- ****** Menu Area Start ****** -->
  <div class="fplus-menu-area">
    <!-- Menu -->
    <div class="fplus-main-menu h-100 d-flex align-items-center">
      <nav class="navbar navbar-expand-lg">
        <div class="" id="fplus-nav">
          <ul class="navbar-nav" id="fplusNav">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Quienes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#clients">Nuestros Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Nuestros Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#marcas">Nuestras Marcas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Header Social Icon -->
    <div class="header-social-info d-flex align-items-center justify-content-end">
      <div class="h-social-icon">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <!-- ****** Menu Area End ****** -->
  <!-- ****** Welcome Area Start ****** -->

  <div id="jumboCarousel" class="carousel slide carousel-fade" data-pause="false" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-1.jpg); background-position:center bottom;" id="home">
          <div class="hero-container">
          </div>
          <div class="hero-content-area d-flex justify-content-end">
            <div class="hero-text">
              <h2>Grupo Aider, energias renovables</h2>
            </div>
          </div>
          <div class="hero-logo-area d-flex justify-content-end">
            <img src="img/svg/Logos svg etimarca-18.svg" alt="">
          </div>
        </section>
      </div>
      <div class="carousel-item">
        <section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-2.jpg); background-position:center bottom;" id="home">
          <div class="hero-container">
          </div>
          <div class="hero-content-area d-flex justify-content-end">
            <div class="hero-text">
              <h2>Grupo Aider, energias renovables</h2>
            </div>
          </div>
          <div class="hero-logo-area d-flex justify-content-end">
            <img src="img/svg/Logos svg etimarca-18.svg" alt="">
          </div>
        </section>
      </div>
      <div class="carousel-item">
        <section class="fplus-hero-area" style="background-image: url(img/grupo-aider/galeria/galeria-6.jpg); background-position:center bottom;" id="home">
          <div class="hero-container">
          </div>
          <div class="hero-content-area d-flex justify-content-end">
            <div class="hero-text">
              <h2>Grupo Aider, energias renovables</h2>
            </div>
          </div>
          <div class="hero-logo-area d-flex justify-content-end">
            <img src="img/svg/Logos svg etimarca-18.svg" alt="">
          </div>
        </section>
      </div>
    </div>
    <a class="carousel-control-prev" href="#jumboCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#jumboCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (window.innerWidth >= 768) {
        if (currentScrollPos < window.innerHeight) {
          document.querySelector(".logo_area>a.big-logo").style.transform = "translateX(0)";
          document.querySelector(".menu-open-close").style.transform = "translateX(0)";
        } else {
          document.querySelector(".logo_area>a.big-logo").style.transform = "translateX(-260px)";
          document.querySelector(".menu-open-close").style.transform = "translateX(-260px)";
        }
        prevScrollpos = currentScrollPos;
      } else {
        if (currentScrollPos < window.innerHeight) {
          document.querySelector(".logo_area>a.small-logo").style.transform = "translateX(0)";
          document.querySelector(".menu-open-close").style.transform = "translateX(0)";
        } else {
          document.querySelector(".logo_area>a.small-logo").style.transform = "translateX(-100px)";
          document.querySelector(".menu-open-close").style.transform = "translateX(-100px)";
        }
        prevScrollpos = currentScrollPos;
      }
    }
  </script>

  <link href="/css/componentes.css" rel="stylesheet">
  <!-- ****** About Us Area Start ****** -->
  <section class="fplus-about-us-area bg-gray section-padding-120" id="about">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <h4>Quienes Somos</h4>
            <div class="section-heading-line"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
        <div class="row no-gutters align-items-center">
          <div class="col-12 col-md-6">
            <div class="about-us-thumb wow fadeIn" data-wow-delay="1s">
              <img src="img/grupo-aider/pexels-singkham-1108572.jpg" alt="" style="width:100%; height:100%; object-fit:cover">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">
              <!-- <h4>Somos Grupo AIDER</h4> -->
              <p>Grupo AIDER se caracteriza por su experiencia de más de 10 años en Consultoría, Diseño y Desarrollo de Proyectos de Energías Renovables. En todo el territorio centroamericano, somos el participante del mercado con la tecnología más actualizada, al servicio del proyecto solar con el menor precio de adquisición.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="container mt-3">
      <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
        <div class="row no-gutters align-items-center">
          <div class="col-12 col-md-6 mt-3">
            <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">

              <h4 class="text-center">Misión</h4>
              <div class="section-heading-line"></div>

              <p>Producir energía limpia para nuestro planeta tierra y a la vez generar ahorros para nuestros clientes.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 mt-3">
            <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">
              <h4 class="text-center">Visión</h4>
              <div class="section-heading-line"></div>
              <p>Ser el líder regional en innovación de tecnología aplicada para la generación de energía limpia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div id="carouselCaracteristicas" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner wow fadeInUp" data-wow-delay="1.5s">
          <div class="carousel-item active">
            <div class="row">
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/wallet.svg" alt="">
                    <h5>Industrial</h5>
                  </div>
                  <p>Energías renovables en alta escala. Retorno de inversión rápido y eficiente.</p>
                </div>
              </div>
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/credit-card.svg" alt="">
                    <h5>Comercial</h5>
                  </div>
                  <p>Llevamos energías limpias a tu negocio para un mudo mejor</p>
                </div>
              </div>
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/switching-user.svg" alt="">
                    <h5>Residencial</h5>
                  </div>
                  <p>Energía solar para tu hogar. Ahorra y cuida el medio ambiente</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/wallet.svg" alt="">
                    <h5>Calidad garantizada</h5>
                  </div>
                  <p>Cras fringilla pretium orci nec pretium. Sed imperdiet commodo orci, vitae ullamcorper nulla suscipit sodales.</p>
                </div>
              </div>
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/credit-card.svg" alt="">
                    <h5>Precios razonables</h5>
                  </div>
                  <p>Curabitur et nisl et odio iaculis scelerisque. In luctus feugiat enim vel feugiat. Vivamus justo sapien, pharetra a felis eu, tempor aliquam nunc. </p>
                </div>
              </div>
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/switching-user.svg" alt="">
                    <h5>Soporte contínuo</h5>
                  </div>
                  <p>Proin tincidunt tellus vitae placerat suscipit. Vivamus auctor turpis eget diam vulputate, quis finibus odio rutrum.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/wallet.svg" alt="">
                    <h5>Calidad garantizada</h5>
                  </div>
                  <p>Phasellus rutrum mi eu nisl sodales efficitur. In hac habitasse platea dictumst. Quisque tempor eget mi luctus consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
              <!-- Single Feature -->
              <div class="col-12 col-md">
                <div class="fplus-single-feature ">
                  <div class="feature-title d-flex align-items-center">
                    <img src="img/icons/credit-card.svg" alt="">
                    <h5>Precios razonables</h5>
                  </div>
                  <p> Donec at sem tellus. Aenean id risus neque. Ut in iaculis diam. Phasellus vitae nisl sed sem accumsan vehicula vel sit amet orci.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators" style="position: relative; top:20px">
          <li data-target="#carouselCaracteristicas" data-slide-to="0" class="invert-color active"></li>
          <li data-target="#carouselCaracteristicas" data-slide-to="1" class="invert-color "></li>
          <li data-target="#carouselCaracteristicas" data-slide-to="2" class="invert-color "></li>
        </ol>

      </div>

    </div>
  </section>
  <!-- ****** About Us Area End ****** -->

  <section class="fplus-projects-area bg-gray section-padding-0-120" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <h4>Nuestros Clientes</h4>
            <div class="section-heading-line"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row fplus-portfolio">
        <!-- Single gallery Item Start -->
        <div class="col-12 col-sm-6 col-md-4 client_gallery single_gallery_item branding wow fadeInUp" data-wow-delay="0.2s">
          <img src="img/grupo-aider/Logos svg aider cl-01.svg" alt="">
        </div>
        <!-- Single gallery Item Start -->
        <div class="col-12 col-sm-6 col-md-4 client_gallery single_gallery_item branding wow fadeInUp" data-wow-delay="0.4s">
          <img src="img/grupo-aider/Logos svg aider cl-03.svg" alt="">
        </div>
        <!-- Single gallery Item Start -->
        <div class="col-12 col-sm-6 col-md-4 client_gallery single_gallery_item design wow fadeInUp" data-wow-delay="0.6s">
          <img src="img/grupo-aider/Logos svg aider cl-02.svg" alt="">
        </div>


      </div>
  </section>

  <!-- ****** Blog Area Start ****** --->

  <section class="fplus-blog-area bg-gray pt-5" id="services">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <h4>Servicios</h4>
            <div class="section-heading-line"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="top-content">
      <div class="container">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-12  col-md-4 active">
              <div class="fplus-single-blog-area">
                <!-- Blog Thumbnail -->
                <img src="img/grupo-aider/129733675_2842507236026675_1859087375636870366_o.jpg" alt="" style="width:100%; height:200px; object-fit: cover">
                <!-- Blog Content  -->
                <div class="fplus-blog-content">
                  <h5>Diseño y Construcción</h5>
                  <p class="text-muted">Evaluación, diseño y puesta en marcha de proyectos de energías renovables bajo el esquema de
                    llave en mano. </p>

                </div>
              </div>
            </div>
            <div class="carousel-item col-12 col-md-4">
              <div class="fplus-single-blog-area wow">
                <!-- Blog Thumbnail  -->
                <img src="img/grupo-aider/pexels-tiger-lily-4484155.jpg" alt="" style="width:100%; height:200px; object-fit: cover">
                <!-- Blog Content  -->
                <div class="fplus-blog-content">
                  <h5>Equipo de primera calidad</h5>
                  <p class="text-muted">Suministro de equipos y materiales para proyectos de energías renovables. </p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-12 col-md-4">
              <div class="fplus-single-blog-area wow">
                <!-- Blog Thumbnail  -->
                <img src="img/grupo-aider/pexels-pixabay-159397.jpg" alt="" style="width:100%; height:200px; object-fit: cover">
                <!-- Blog Content  -->
                <div class="fplus-blog-content">
                  <h5>Operación y Mantenimiento</h5>
                  <p class="text-muted">Instalación mecánica y eléctrica de proyectos de energías renovables.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-12 col-md-4">
              <div class="fplus-single-blog-area ">
                <!-- Blog Thumbnail -->
                <img src="img/grupo-aider/pexels-burak-k-186461.jpg" alt="" style="width:100%; height:200px; object-fit: cover">
                <!-- Blog Content  -->
                <div class="fplus-blog-content">
                  <h5>Análisis Técnico y Económico</h5>
                  <p class="text-muted">Estudios de energía y estructurales para el desarrollo de proyectos.</p>

                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev svg-inverted thumbnail-carousel-arrow-prev " href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next svg-inverted thumbnail-carousel-arrow-next " href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="fplus-blog-area bg-gray py-5" id="instalaciones">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="m-0 text-center text-muted">
            <h5>Instalaciones para múltiples propósitos</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Feature -->
        <div class="col-12 col-md">
          <div class="fplus-single-feature">
            <div class="feature-title d-flex align-items-center">
              <img src="img/icons/factory.svg" alt="">
              <h5>Industrial</h5>
            </div>
            <p>Energías renovables en alta escala. Retorno de inversión rápido y eficiente.</p>
          </div>
        </div>
        <!-- Single Feature -->
        <div class="col-12 col-md">
          <div class="fplus-single-feature">
            <div class="feature-title d-flex align-items-center">
              <img src="img/icons/tienda.svg" alt="">
              <h5>Comercial</h5>
            </div>
            <p>Llevamos energías limpias a tu negocio para un mudo mejor</p>
          </div>
        </div>
        <!-- Single Feature -->
        <div class="col-12 col-md">
          <div class="fplus-single-feature">
            <div class="feature-title d-flex align-items-center">
              <img src="img/icons/smart-home.svg" alt="">
              <h5>Residencial</h5>
            </div>
            <p>Energía solar para tu hogar. Ahorra y cuida el medio ambiente</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ****** Blog Area End ****** -->
  <section class="fplus-projects-area bg-gray section-padding-0-120" id="brands">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading text-center">
            <h4>Nuestras Marcas</h4>
            <div class="section-heading-line"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row fplus-portfolio">
        <?php
        for ($i = 0; $i < 9; $i++) {
        ?>
          <!-- Single gallery Item Start -->
          <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding wow fadeInUp" data-wow-delay="0.2s">
            <img src="img/grupo-aider/logo-marca-<?= $i + 1 ?>.svg" alt="">
          </div>

        <?php
        }
        ?>
      </div>
  </section>

  <section class="container-fluid bg-gray slider-gallery" id="galery">

    <div class="row">
      <div class="col-12">
        <div class="section-heading text-center">
          <h4>Galería</h4>
          <div class="section-heading-line"></div>
        </div>
      </div>
    </div>


    <div class="container p-0">
      <ul class="wow fadeInUp" id="thumbnails">

        <?php for ($i = 0; $i < 6; $i++) { ?>
          <li>
            <a href="#slide<?= $i + 1 ?>">
              <img src="/img/grupo-aider/galeria/galeria-<?= $i + 1 ?>.jpg" alt="This is caption <?= $i + 1 ?>">
            </a>
          </li>
        <?php } ?>
      </ul>

    </div>
    <div class="container p-0">

      <div class="thumb-box wow fadeInUp ">
        <?php
        $total = 6;
        $cont = 0;
        ?>
        <ul class="thumbs">
          <div id="thumbnailCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
              <?php
              while ($cont < $total) {
              ?>
                <div class="carousel-item <?= ($cont == 0) ? "active" : "" ?>">
                  <?php for ($i = 0; $i < 4 && $cont < $total; $i++) { ?>
                    <li class="thumblink" data-goto="<?= ($cont + 1) ?>"><a href="#<?= ($cont + 1) ?>"><img src="/img/grupo-aider/galeria/galeria-<?= $cont + 1 ?>.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
                  <?php
                    $cont++;
                  } ?>
                </div>
              <?php } ?>
            </div>
            <a class="carousel-control-prev thumbnail-carousel-arrow-prev d-none d-md-flex svg-inverted" href="#thumbnailCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon " aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next thumbnail-carousel-arrow-next d-none d-md-flex svg-inverted" href="#thumbnailCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon " aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </ul>
      </div>

    </div>

  </section>

  <?php include "componentes/contacto.php" ?>
  <!-- Jquery-2.2.4 js -->
  <script src="/js/jquery/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="/js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap-4 js -->
  <script src="/js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="/js/others/plugins.js"></script>
  <!-- Active JS -->
  <script src="/js/active.js"></script>
</body>

</html>