<?PHP session_start();
include('php/vista_novedades.php');
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

<body class="sub_page">

    <div class="hero_area">

        <div class="hero_bg_box">
            <img src="images/hero-bg.png" alt="">
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/isologo.png" height="40" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
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
                                <a class="nav-link" href="https://psicologos-consultorio.web.app/" target="_blank" style="color: #ffffff ; background-color: #555555; ">Soy Profesional</a>
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
    </div>

    <!-- department section -

  <section class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Novedades
          </h2>
        </div>
      </div>
    </div>
  </section>

   end department section -->

    <!-- news section -->

    <section class="news_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Novedades
                </h2>
            </div>
            <?PHP echo $novedades; ?>
        </div>
    </section>

    <!-- end news section -->

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
                            <a class="active" href="index.html">
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