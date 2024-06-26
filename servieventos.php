<?php
session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Servicios y Eventos</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CMuli:100,300,400,600,800">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mapa.css">
    <style>.section-title {
      font-size: 28px;
      font-weight: bold;
      color: #333;
      margin-bottom: 30px;
    }
    
    .service-list,
    .event-list {
      list-style: none;
      padding-left: 0;
    }
    
    .service-list li,
    .event-list li {
      font-size: 18px;
      margin-bottom: 10px;
    }
    
    .service-block,
    .event-block {
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    @media (max-width: 767px) {
      .service-block,
      .event-block {
        margin-bottom: 30px;
      }
    }
    .ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader" id="loading">
      <div class="preloader-body">
        <div id="loading-center-object">
          <div class="object" id="object_four"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_one"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="10px" data-xl-stick-up-offset="10px" data-xxl-stick-up-offset="10px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.php"><img src="images/logoescuela.png" alt="" width="148" height="31"/></a>
                </div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="nosotros.php">Nosotros</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="programa.php">Programa</a>
                  </li>
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="servieventos.php">Servicios y Eventos</a>
                  <li class="rd-nav-item">
                                    <?php
                                    if (isset($_SESSION['usuario'])) {
                                        // Si el usuario ha iniciado sesión, mostrar el botón de cerrar sesión
                                        echo '<a class="rd-nav-link" href="logout.php">Cerrar Sesión</a>';
                                    } else {
                                        // Si el usuario no ha iniciado sesión, mostrar el botón de iniciar sesión
                                        echo '<a class="rd-nav-link" href="login.php">Iniciar Sesión</a>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
              <div class="rd-navbar-dummy"></div>
              <!-- Search Form-->
              <div class="search-container">
                <script async src="https://cse.google.com/cse.js?cx=b1c42caf3d10f4ca0"></script>
                <div class="gcse-search"></div>
            </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom-main context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-9">
                <h2 class="breadcrumbs-custom-title">Nuestros Servicios</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Inicio</a></li>
              <li class="active">Nuestos Servicios</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-5">
              <div class="inset-1">
                <h2>Nuestra Oficina</h2>
                <p class="big">Si vives cerca, ven a visitar la Escuela Florece en una de nuestras cómodas oficinas.</p>
                <div class="row row-50">
                  <div class="col-sm-6 col-xl-12">
                    <p class="heading-7">Campus Principal</p>
                    <ul class="list list-style-1">
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-map-marker"></span>
                        <div class="unit-body"><a href="#">123 Spring Street, Bloomington, IN 47403</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-cellphone"></span>
                        <div class="unit-body"><a href="tel:+18006036035">+1 800 603 6035</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-email-outline"></span>
                        <div class="unit-body"><a class="text-accent" href="mailto:info@escuelaflorece.org">info@escuelaflorece.org</a></div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-xl-12">
                    <p class="heading-7">Campus Secundario</p>
                    <ul class="list list-style-1">
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-map-marker"></span>
                        <div class="unit-body"><a href="#">456 Oak Avenue, Springfield, IL 62701</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-cellphone"></span>
                        <div class="unit-body"><a href="tel:+18006036035">+1 800 603 6035</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-email-outline"></span>
                        <div class="unit-body"><a class="text-accent" href="mailto:admissions@escuelaflorece.org">admissions@escuelaflorece.org</a></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-7">
              <div class="google-map-container" data-center="123 Spring Street, Bloomington, IN 47403" data-zoom="12" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                  <li data-location="123 Spring Street, Bloomington, IN 47403" data-description="Campus Principal"></li>
                  <li data-location="456 Oak Avenue, Springfield, IL 62701" data-description="Campus Secundario"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6">
              <h2>Nuestros Servicios</h2>
              <ul class="list list-style-1">
                <li class="mb-3">Clases Académicas de Calidad</li>
                <li class="mb-3">Tutorías Personalizadas</li>
                <li class="mb-3">Actividades Extracurriculares</li>
                <li class="mb-3">Orientación Vocacional</li>
                <li class="mb-3">Programas de Educación Especializada</li>
                <li class="mb-3">Servicio de Transporte Escolar</li>
                <li class="mb-3">Comedor Escolar con Alimentación Balanceada</li>
                <li class="mb-3">Servicios Médicos y de Enfermería</li>
                <li class="mb-3">Consejería Académica y Emocional</li>
                <li class="mb-3">Programas de Aprendizaje de Idiomas</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h2>Próximos Eventos</h2>
              <ul class="list list-style-1">
                <li class="mb-3">Día de Puertas Abiertas (Próximamente)</li>
                <li class="mb-3">Feria de Ciencia y Tecnología (Fecha: Por Confirmar)</li>
                <li class="mb-3">Conciertos y Presentaciones Artísticas (Fecha: Por Confirmar)</li>
                <li class="mb-3">Torneos Deportivos Inter escolares(Fecha: Por Confirmar)</li>
                <li class="mb-3">Sesiones de Padres y Maestros (Próximamente)</li>
                <li class="mb-3">Excursiones Educativas y Visitas Guiadas</li>
                <li class="mb-3">Talleres y Seminarios para Padres</li>
                <li class="mb-3">Celebraciones Culturales y Festivales Escolares</li>
                <li class="mb-3">Actividades Recreativas y de Integración</li>
                <li class="mb-3">Competencias Académicas y Deportivas</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Get in Touch
      <section class="section section-md bg-gray-100">
        <div class="container">
          <h3 class="text-center">Get in Touch</h3>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
               RD Mailform
              <form class="rd-mailform rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-x-16 row-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                      <label class="form-label" for="contact-email">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                      <label class="form-label" for="contact-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-button">
                      <button class="button button-block button-primary" type="submit">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>-->
      <!-- Page Footer-->
      <footer class="section footer-classic">
        <div class="footer-classic-main">
          <div class="container">
            <div class="row row-50 justify-content-lg-between">
              <div class="col-sm-7 col-lg-3 col-xl-2"><a class="brand" href="index.php"><img src="images/logoescuela.png" alt="" width="148" height="31"/></a>
                <p><span style="max-width: 250px;">"¡Cultivando mentes brillantes para un mañana floreciente!"</span></p><!--<a class="button button-sm button-default-outline button-winona" href="#">Sign In</a>-->
                    
              </div>
              <div class="col-sm-5 col-lg-3 col-xl-2">
        <h4 class="footer-classic-title">Enlaces</h4>
        <ul class="list footer-classic-list">
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="programa.php">Programa</a></li>
            <li><a href="#" id="mapa-del-sitio">Mapa del Sitio</a></li>
        </ul>
    </div>

    <div id="popup-overlay" class="popup-overlay"></div>
    <div id="popup" class="popup">
        <span class="close-btn" id="close-popup">&times;</span>
        <h2 class="mapa">Mapa del Sitio</h2>
        <br>
        <ul>
            <li class="titulo">Inicio</li>
            <li class="titulo">Nosotros
                <ul>
                    <li>-Equipo</li>
                    <li>-Características</li>
                    <li>-Únete a Nosotros</li>
                </ul>
            </li>
            <li class="titulo">Programa
                <ul>
                    <li>-Clases</li>
                    <li>-Actividades Extracurriculares</li>
                </ul>
            </li>
            <li class="titulo">Servicios y Eventos
                <ul>
                    <li>-Servicios</li>
                    <li>-Eventos</li>
                </ul>
            </li>
            <li class="titulo">Formularios
                <ul>
                    <li>-Formulario de Correo para Postulación</li>
                    <li>-Formulario de Comentarios</li>
                </ul>
            </li>
            <li class="titulo">Usuario
                <ul>
                    <li>-Inicio de Sesión</li>
                    <li>-Registro</li>
                    <li>-Recuperar contraseña</li>
                </ul>
            </li>
        </ul>
    </div>

    <script>
        // Obtener elementos del DOM
        const mapaDelSitio = document.getElementById('mapa-del-sitio');
        const popup = document.getElementById('popup');
        const popupOverlay = document.getElementById('popup-overlay');
        const closePopup = document.getElementById('close-popup');

        // Mostrar la ventana emergente
        mapaDelSitio.addEventListener('click', function(event) {
            event.preventDefault();
            popup.style.display = 'block';
            popupOverlay.style.display = 'block';
        });

        // Ocultar la ventana emergente
        closePopup.addEventListener('click', function() {
            popup.style.display = 'none';
            popupOverlay.style.display = 'none';
        });

        // Ocultar la ventana emergente al hacer clic fuera de ella
        popupOverlay.addEventListener('click', function() {
            popup.style.display = 'none';
            popupOverlay.style.display = 'none';
        });
    </script>
              <div class="col-sm-5 col-lg-9 col-xl-2">
                <h4 class="footer-classic-title">Redes sociales</h4>
                <div class="row row-20 row-sm-35">
                  <div class="col-6 col-sm-12 col-lg-8 col-xl-12">
                    <div class="row row-10 text-default">
                      <div class="col-lg-6 col-xl-12"><a href="mailto:cesarin@gmail.com">cesarin@gmail.com</a></div>
                      <div class="col-lg-6 col-xl-12"><a class="big" href="tel:+52656123456789">+52 656 123456789</a></div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-12 col-lg-4 col-xl-12 text-right text-sm-left">
                    <div class="group group-xs">
                        <a class="link link-social-1 mdi mdi-twitter" href="#" target="_blank"></a>
                        <a class="link link-social-1 mdi mdi-facebook" href="#" target="_blank"></a>
                        <a class="link link-social-1 mdi mdi-instagram" href="#" target="_blank"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-classic-aside">
          <div class="container">
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Businet</span>
123 Spring Street, Bloomington, IN 47403,  
+1 800 603 6035,   
info@escuelaflorece.org</a></p>          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
