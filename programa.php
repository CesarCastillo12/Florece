<?php
session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Nuestros Programas</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CMuli:100,300,400,600,800">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mapa.css">
    <style>
    
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
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="programa.php">Programa</a>
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
                <h2 class="breadcrumbs-custom-title">Nuestros Programas</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Inicio</a></li>
              <li class="active">Nuestros Programas</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Base typography-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-lg-3 col-xl-4">
              <div class="row row-35 row-lg-50">
                <div class="col-sm-6 col-lg-12">
                  
                </div>
                <div class="col-sm-6 col-lg-12">
                 
                </div>
              </div>
            </div>

            <!-- Sección de Clases -->
<div class="col-lg-9 col-xl-8">
  <ul class="list-xl">
    <li>
      <h3 style="font-size: 24px; color: #333; font-weight: bold;">Clase de Matemáticas Interactivas: "MathQuest"</h3>
      <p style="font-size: 16px; color: #666;">
        Aprende matemáticas de una manera divertida e interactiva. Todos los grados son bienvenidos a participar en esta clase que combina juegos y desafíos numéricos.
        <br><strong style="color: #222;">Unidad 1:</strong> Álgebra y Funciones - Ecuaciones lineales y cuadráticas, funciones y gráficas.
        <br><strong style="color: #222;">Unidad 2:</strong> Geometría Avanzada - Trigonometría, geometría analítica, cálculo de áreas y volúmenes.
        <br><strong style="color: #222;">Unidad 3:</strong> Estadística y Probabilidad - Análisis estadístico, distribuciones de probabilidad, inferencia estadística.
      </p>
    </li>
    <li>
      <h3 style="font-size: 24px; color: #333; font-weight: bold;">Taller de Arte Creativo: "Art Fusion"</h3>
      <p style="font-size: 16px; color: #666;">
        Explora tu creatividad en nuestro taller de arte. Desde pintura hasta escultura, descubre nuevas formas de expresión artística. Abierto para todos los grados.
        <br><strong style="color: #222;">Unidad 1:</strong> Exploración Artística Contemporánea - Arte moderno y contemporáneo, expresionismo abstracto, instalaciones.
        <br><strong style="color: #222;">Unidad 2:</strong> Técnicas Avanzadas de Pintura y Escultura - Pintura al óleo, técnicas mixtas, escultura tridimensional.
        <br><strong style="color: #222;">Unidad 3:</strong> Historia del Arte y Crítica - Movimientos artísticos del siglo XX, análisis crítico de obras de arte.
      </p>
    </li>
    <li>
      <h3 style="font-size: 24px; color: #333; font-weight: bold;">Club de Robótica: "TechMinds Robotics Club"</h3>
      <p style="font-size: 16px; color: #666;">
        Únete al club de robótica y aprende a construir y programar robots. Ideal para estudiantes interesados en tecnología y ciencia. Todos los grados son bienvenidos.
        <br><strong style="color: #222;">Unidad 1:</strong> Programación Avanzada de Robots - Programación orientada a objetos, algoritmos de control de robots.
        <br><strong style="color: #222;">Unidad 2:</strong> Tecnologías Emergentes en Robótica - Inteligencia artificial aplicada a robots, robótica colaborativa.
        <br><strong style="color: #222;">Unidad 3:</strong> Ingeniería Robótica Aplicada - Diseño de sistemas robóticos complejos, aplicaciones industriales.
      </p>
    </li>
    <li>
      <h3 style="font-size: 24px; color: #333; font-weight: bold;">Clase de Escritura Creativa: "Imagination Ink"</h3>
      <p style="font-size: 16px; color: #666;">
        Desarrolla tus habilidades de escritura en esta clase donde podrás explorar historias imaginativas y mejorar tu expresión escrita. Para todos los grados.
        <br><strong style="color: #222;">Unidad 1:</strong> Narrativa Avanzada y Técnicas Literarias - Estructuras narrativas complejas, desarrollo de personajes multidimensionales.
        <br><strong style="color: #222;">Unidad 2:</strong> Exploración de Géneros Literarios - Poesía contemporánea, narrativa breve, ensayo literario.
        <br><strong style="color: #222;">Unidad 3:</strong> Escritura Creativa Aplicada - Redacción profesional, edición y revisión de textos creativos.
      </p>
    </li>
    <li>
      <h3 style="font-size: 24px; color: #333; font-weight: bold;">Taller de Ciencias Naturales: "Nature Explorers Lab"</h3>
      <p style="font-size: 16px; color: #666;">
        Descubre el mundo natural a través de experimentos y observaciones en nuestro taller de ciencias. Desde biología hasta física, aprende mientras te diviertes. Abierto para todos.
        <br><strong style="color: #222;">Unidad 1:</strong> Biología Avanzada - Genética molecular, evolución, sistemas biológicos complejos.
        <br><strong style="color: #222;">Unidad 2:</strong> Física Moderna y Aplicada - Física cuántica, teoría de la relatividad, aplicaciones tecnológicas.
        <br><strong style="color: #222;">Unidad 3:</strong> Ciencias de la Tierra y Cambio Global - Geología avanzada, climatología, impacto humano en el medio ambiente.
      </p>
    </li>
  </ul>
</div>


        
      <!-- Actividades Extracurriculares -->
<div class="container">
  <h3>Actividades Extracurriculares</h3>
  <div class="row row-50">
    <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
      <ul class="list-marked">
        <li>Club de Debate: "Oratoria Brillante"</li>
        <li>Club de Fotografía: "Captura y Expresa"</li>
        <li>Taller de Cocina Creativa: "Sabores del Mundo"</li>
        <li>Club de Música: "Melodías Inspiradoras"</li>
        <li>Equipo de Atletismo: "Corazón en Movimiento"</li>
      </ul>
    </div>
  </div>
</div>

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
            <li><a href="nosotros.php">Nosotros</a></li>
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