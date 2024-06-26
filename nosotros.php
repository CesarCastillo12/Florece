<?php
session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Nosotros</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CMuli:100,300,400,600,800">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/mapa.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
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
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="nosotros.php">Nosotros</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="programa.php">Programa</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="servieventos.php">Servicios y Eventos</a>
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
                <h3 class="breadcrumbs-custom-title">Descubre más sobre nosotros</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Inicio</a></li>
              <li class="active">Nosotros</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Quiénes Somos -->
<section class="section">
  <div class="container">
    <div class="row align-items-end justify-content-center">
      <div class="col-md-10 col-lg-7">
        <div class="section-md">
          <h3>Somos un Equipo Apasionado de Educadores en "Florece"</h3>
          <p class="text-gray-900">En la escuela "Florece", nos dedicamos a cultivar el potencial de cada estudiante a través de una educación integral y personalizada. Nuestra pasión radica en ofrecer un ambiente académico enriquecedor y de apoyo que fomente el crecimiento académico, social y emocional de nuestros alumnos.</p>
          <!-- Cita Inspiradora -->
          <blockquote class="quote-light quote-light_1">
            <div class="quote-light-mark linearicons-quote-open"></div>
            <div class="quote-light-text">
              <p>"En 'Florece', creemos en la importancia de inspirar, guiar y empoderar a cada estudiante para que alcance su máximo potencial en un mundo en constante cambio."</p>
            </div>
          </blockquote>
        </div>
      </div>
      <div class="col-md-10 col-lg-5 text-center">
        <img src="images/nosotros.jpg" alt="Imagen Representativa de 'Florece'" width="379" height="570"/>
      </div>
    </div>
  </div>
</section>

      
       <!-- Welcome to Escuela Florece -->
    <section class="section text-center">
      <div class="container">
          <div class="list-blocks-outer">
              <div class="list-blocks">
                  <div class="list-blocks-item">
                      <div class="list-blocks-item-inner">
                          <div class="list-blocks-counter"></div>
                          <p class="list-blocks-title">Espacio Creativo Inspirador</p>
                          <p>Ambientes diseñados para fomentar la creatividad y la innovación. Equipamiento moderno y herramientas especializadas para expresar ideas.</p>
                      </div>
                  </div>
                  <div class="list-blocks-item">
                      <div class="list-blocks-item-inner">
                          <div class="list-blocks-counter"></div>
                          <p class="list-blocks-title">Desarrollo Profesional y Personal</p>
                          <p>Programas académicos integrales que cultivan habilidades técnicas y personales. Orientación individualizada para el crecimiento y desarrollo de cada estudiante.</p>
                      </div>
                  </div>
                  <div class="list-blocks-item">
                    <div class="list-blocks-item-inner">
                        <div class="list-blocks-counter"></div>
                        <p class="list-blocks-title">Misión</p>
                        <p>Cultivar mentes brillantes para un futuro floreciente a través de una educación integral y de calidad que promueva el desarrollo humano y académico.</p>
                        <p class="list-blocks-title">Visión</p>
                        <p>Ser reconocidos como una institución líder en el desarrollo integral de los estudiantes, preparándolos para enfrentar con éxito los desafíos del mundo moderno.</p>
                    </div>
                </div>
                  <div class="list-blocks-item">
                      <div class="list-blocks-item-inner">
                          <div class="list-blocks-counter"></div>
                          <p class="list-blocks-title">Oportunidades de Carrera en Crecimiento</p>
                          <p>Conexiones con empresas y profesionales líderes en diversas industrias. Prácticas y programas de pasantías para adquirir experiencia práctica.</p>
                      </div>
                  </div>
                  <div class="list-blocks-item">
                      <div class="list-blocks-item-inner">
                          <div class="list-blocks-counter"></div>
                          <p class="list-blocks-title">Beneficios Educativos y Recompensas</p>
                          <p>Planes de becas y ayudas financieras para facilitar el acceso a la educación. Reconocimientos por logros académicos y extracurriculares.</p>
                      </div>
                  </div>
                  <div class="list-blocks-item">
                      <div class="list-blocks-item-inner">
                          <div class="list-blocks-counter"></div>
                          <p class="list-blocks-title">Colaboración y Redes Profesionales</p>
                          <p>Ambiente colaborativo que fomenta el trabajo en equipo y el intercambio de ideas. Eventos y conferencias con invitados destacados para ampliar redes de contacto.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
      <!-- People Ready to Change the World-->
      <section class="section section-md bg-gray-100 text-center">
        <div class="container">
          <div class="badge">ES EL MOMENTO</div>
          <h3>ÚNETE A NOSOTROS</h3>
          <br>
          <div class="formulario-postulacion-container">
        <form id="formulario-postulacion" class="formulario-postulacion" action="procesar_postulacion.php" method="post" enctype="multipart/form-data" onsubmit="mostrarMensaje();">
            <label class="formulario-postulacion" for="nombre">Nombre Completo:</label>
            <input class="formulario-postulacion" type="text" id="nombre" name="nombre" required>

            <label class="formulario-postulacion" for="email">Correo Electrónico:</label>
            <input class="formulario-postulacion" type="email" id="email" name="email" required>

            <label class="formulario-postulacion" for="telefono">Número de Teléfono:</label>
            <input class="formulario-postulacion" type="tel" id="telefono" name="telefono" required>

            <label class="formulario-postulacion" for="puesto">Puesto al que se Postula:</label>
            <input class="formulario-postulacion" type="text" id="puesto" name="puesto" required>

            <label class="formulario-postulacion" for="cv">Currículum (PDF):</label>
            <input class="formulario-postulacion" type="file" id="cv" name="cv" accept=".pdf" required>

            <button class="formulario-postulacion" type="submit">Enviar Postulación</button>
        </form>
    </div>
    
    <script>
        function mostrarMensaje(event) {
            event.preventDefault();
            alert("Solicitud enviada con éxito.");
            document.getElementById("formulario-postulacion").reset();
            document.getElementById("formulario-postulacion").submit(); 
        }
    </script>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-carousel_profile-modern" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-1-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Michael Logan</h4>
                  <p class="profile-modern-position">Managing Director</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-2-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Jane Williams</h4>
                  <p class="profile-modern-position">Executive Consultant</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-3-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Gregory Smith</h4>
                  <p class="profile-modern-position">Safety Consultant</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-4-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Jennifer Bailey</h4>
                  <p class="profile-modern-position">Associate Consultant</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-6-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Larry Turner</h4>
                  <p class="profile-modern-position">Marketing Manager</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-5-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Amy Wright</h4>
                  <p class="profile-modern-position">Accountant</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-7-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Keith Watson</h4>
                  <p class="profile-modern-position">PR Manager</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
            <!-- Profile Modern-->
            <article class="profile-modern">
              <figure class="profile-modern-figure"><img class="profile-modern-image" src="images/team-8-369x315.jpg" alt="" width="369" height="315"/>
              </figure>
              <div class="profile-modern-main">
                <div class="profile-modern-main-item profile-modern-main-item_primary">
                  <h4 class="profile-modern-name">Tina Scott</h4>
                  <p class="profile-modern-position">Office Manager</p>
                </div>
                <div class="profile-modern-main-item profile-modern-main-item_secondary">
                  <h4 class="profile-modern-main-title">Get in Touch</h4>
                  <ul class="list-inline list-inline-xs">
                    <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon icon-md mdi mdi-instagram" href="#"></a></li>
                  </ul>
                  <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!--<section class="section oh">
        <div class="container">
          <div class="row justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-5 col-xl-4">
              <div class="section-md">
                <div class="badge">Our History</div>
                <h3>How We Achieved <br class="d-none d-sm-block"> Recognition</h3>
                <p class="big offset-top-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque placerat eros ac finibus congue. Integer consectetur</p><a class="button button-primary button-winona" href="#">Read More</a>
              </div>
            </div>
            <div class="col-md-10 col-lg-7">
               Timeline
              <div class="timeline-classic timeline-classic_1">
                <div class="timeline-classic-item">
                  <div class="timeline-classic-item-inner">
                    <div class="timeline-classic-item-decoration"></div>
                    <p class="timeline-classic-title"><span class="text-accent">1999.</span><span>Our Start</span></p>
                    <div class="timeline-classic-text">
                      <p>Pellentesque placerat eros ac finibus congue. Integer consectetur, lorem nec accumsan commodo, sem mauris</p>
                    </div>
                  </div>
                </div>
                <div class="timeline-classic-item">
                  <div class="timeline-classic-item-inner">
                    <div class="timeline-classic-item-decoration"></div>
                    <p class="timeline-classic-title"><span class="text-accent">2005.</span><span>Opening New Offices</span></p>
                    <div class="timeline-classic-text">
                      <p>Albus, emeritis hibridas hic dignus de fortis, altus orexis. Regius axonas ducunt ad historia.</p>
                    </div>
                  </div>
                </div>
                <div class="timeline-classic-item">
                  <div class="timeline-classic-item-inner">
                    <div class="timeline-classic-item-decoration"></div>
                    <p class="timeline-classic-title"><span class="text-accent">2010.</span><span>Hiring Marketing Experts</span></p>
                    <div class="timeline-classic-text">
                      <p>Sunt nomenes captis castus, azureus contencioes. Emeritis, clemens rumors satis amor de pius, mirabilis.</p>
                    </div>
                  </div>
                </div>
                <div class="timeline-classic-item">
                  <div class="timeline-classic-item-inner">
                    <div class="timeline-classic-item-decoration"></div>
                    <p class="timeline-classic-title"><span class="text-accent">2019.</span><span>Better Solutions for Clients</span></p>
                    <div class="timeline-classic-text">
                      <p>Camerarius species vix quaestios historia est. Camerarius, bassus tumultumques saepe gratia de teres.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
      <!-- Page Footer-->
      <footer class="section footer-classic"></a>
        <div class="footer-classic-main">
          <div class="container">
            <div class="row row-50 justify-content-lg-between">
              <div class="col-sm-7 col-lg-3 col-xl-2"><a class="brand" href="index.php"><img src="images/logoescuela.png" alt="" width="148" height="31"/></a>
                <p><span style="max-width: 250px;">"¡Cultivando mentes brillantes para un mañana floreciente!"</span></p><!--<a class="button button-sm button-default-outline button-winona" href="#">Sign In</a>-->
                    
              </div>
              <div class="col-sm-5 col-lg-3 col-xl-2">
        <h4 class="footer-classic-title">Enlaces</h4>
        <ul class="list footer-classic-list">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="programa.php">Programa</a></li>
            <li><a href="servieventos.php">Servicios y Eventos</a></li>
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
                      <div class="col-lg-6 col-xl-12"><a href="mailto:#">cesarin@gmail.com</a></div>
                      <div class="col-lg-6 col-xl-12"><a class="big" href="tel:#">+52 656 123456789</a></div>
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