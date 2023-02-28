<?PHP session_start();
include('php/vista_novedades_inicio.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Colegio de Psicólogos </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <a href="https://api.whatsapp.com/send?phone=5492645705836" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/fondo_psicologos_002.png" alt="">
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="45" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="institucional.html"> Institucional</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sec-general.html">Sec. General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profesionales.html">Buscar un Profesional</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.html">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://psicologos-consultorio.web.app/" target="_blank" style="color: #ffffff ; background-color: #F19E1E; ">Soy Profesional</a>
              </li>
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Colegio de Psicólogos de San Juan
                    </h1>
                    <p>
                      Ley Provincial N°5436
                    </p>
                    <!--  div class="btn-box">
                      <a href="" class="btn1">
                        Consultá la Ley
                      </a>
                    </div -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Colegio de Psicólogos de San Juan
                    </h1>
                    <p>
                      Ley Provincial N°5436
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Consultá la Ley
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Colegio de Psicólogos de San Juan
                    </h1>
                    <p>
                      Ley Provincial N°5436
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Consultá la Ley
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol> -->
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- doctor section -->

  <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Últimas novedades
        </h2>
        <p class="col-md-10 mx-auto px-0">
          Conocé las últimas novedades referentes al sector:
        </p>
      </div>
      <?PHP echo $novedades; ?>
      <div class="btn-box">
        <a href="novedades.php">
          Ver todos
        </a>
      </div>
    </div>
  </section>

  <!-- end doctor section -->

  <!-- about section -->

  <!--  <section class="about_section layout_margin-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end about section -->

  <!-- doctor section -->

  <!-- <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Doctors
        </h2>
        <p class="col-md-10 mx-auto px-0">
          Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id quisquam.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d1.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Elina Josh
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d2.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Adam View
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/d3.jpg" alt="">
            </div>
            <div class="detail-box">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </div>
              <h5>
                Mia Mike
              </h5>
              <h6 class="">
                Doctor
              </h6>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </section>
 -->
  <!-- end doctor section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Dejanos tu mensaje
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form action="">
              <div class="form-row">
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Nombre completo" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div>
                    <input type="text" placeholder="Número de teléfono" />
                  </div>
                </div>
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Mensaje" />
              </div>
              <div class="btn_box">
                <button>
                  ENVIAR
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.157442243526!2d-68.52538128515388!3d-31.547293509752148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96816a9f952d9733%3A0x8915f1d5a2a5a334!2sColegio%20de%20Psic%C3%B3logos%20de%20San%20Juan!5e0!3m2!1ses-419!2sar!4v1669130784429!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <!--  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        Alan Emerson
                      </h6>
                    </div>
                    <p>
                      Enim consequatur odio assumenda voluptas voluptatibus esse nobis officia. Magnam, aspernatur nostrum explicabo, distinctio laudantium delectus deserunt quia quidem magni corporis earum inventore totam consectetur corrupti! Corrupti, nihil sunt? Natus.
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5 footer_col">
          <div class="footer_contact">
            <h4>
              Encontranos en:
            </h4>
            <div class="contact_link_box">
              <a href="https://www.google.com/maps/place/Colegio+de+Psic%C3%B3logos+de+San+Juan/@-31.547298,-68.523193,15z/data=!4m5!3m4!1s0x0:0x8915f1d5a2a5a334!8m2!3d-31.547298!4d-68.5231704?hl=es-419" target="_blank">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Gral. Mariano Acha Sur 1056 - Capital - San Juan
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  0264-4229210
                </span>
              </a>
              <a href="https://api.whatsapp.com/send?phone=5492645705836" target="_blank">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <span>
                  2645705836 (Sólo WhatsApp)
                </span>
              </a>
              <a href="mailto:administracion@colegiodepsicologossj.com.ar">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  administracion@colegiodepsicologossj.com.ar
                </span>
              </a>
            </div>
          </div>
          <div class="footer_social">
            <a href="https://www.facebook.com/Colegio-de-Psic%C3%B3logos-San-Juan-145327118869601/" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCt8psYALiQa5Iid_yvSRH_w" target="_blank">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 footer_col">
          <div class="footer_detail">
            <h4>
              Acerca de nosotros:
            </h4>
            <p>
              Somos un grupo de psicólogos profesionales comprometidos por la salud mental.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.php">
                Inicio
              </a>
              <a class="" href="institucional.html">
                Institucional
              </a>
              <a class="" href="sec-general.html">
                Sec. General
              </a>
              <a class="" href="profesionales.html">
                Buscar un profesional
              </a>
              <a class="" href="https://colegio-psicologos.web.app/">
                Gesti&oacute;n
              </a>
              <a class="" href="contacto.html">
                Contacto
              </a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Newsletter
          </h4>
          <form action="#">
            <input type="email" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div> -->
      </div>
      <div class="footer-info">
        <p>
          Colegio de Psicólogos de San Juan
          &copy; <span id="displayYear"></span> Todos los derechos reservados
        </p>

      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>