<?php
session_start();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CMuli:100,300,400,600,800">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/comentarios.css">
    <link rel="stylesheet" href="css/mapa.css">
    <style>
        .ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} 
        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
        .search-container {
            position: relative;
        }
        .search-input {
            padding: 6px 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .search-button {
            position: absolute;
            right: 0;
            top: 0;
            padding: 6px 10px;
            border: none;
            background: none;
            cursor: pointer;
        }
        .search-button .mdi {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="Estás utilizando un navegador obsoleto. Para una experiencia de navegación más rápida y segura, actualiza hoy mismo de forma gratuita."></a></div>
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
                            <div class="rd-navbar-brand"><a class="brand" href="index.php"><img src="images/logoescuela.png" alt="" width="148" height="31"/></a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Inicio</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="nosotros.php">Nosotros</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="programa.php">Programa</a></li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="servieventos.php">Servicios y Eventos</a></li>
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

        <section class="section parallax-container context-dark" data-parallax-img="images/estudiantes.jpg">
            <div class="parallax-content">
                <div class="page-header-2-inner">
                    <div class="container">
                        <div class="block-custom">
                            <h2 class="font-weight-extra-black wow clipInLeft" >"¡Cultivando mentes brillantes para un mañana floreciente!"</h2>
                            <h4 class="text-default wow clipInLeft" >En nuestra escuela, ofrecemos mucho más que educación. Sumérgete en un ambiente innovador donde cada estudiante encuentra su potencial y crea un futuro brillante.</h4>
                            <div class="group-xl group-middle">
                                <!--<div><a class="button button-lg button-white button-shadow button-winona wow clipInLeft" href="about-us.html" >Leer más</a></div>
                                <div><a class="button button-lg button-primary button-shadow button-winona wow clipInLeft" href="contact-us.html" data-wow-delay=".2s">Contáctanos</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Meet Alice
        <section class="section section-md bg-gray-100 text-center">
            <div class="container">
                <div class="badge wow fadeIn">Nuestros Servicios</div>
                <h3 class="wow fadeIn">Lo que Hacemos</h3>
                <div class="row row-30 row-xl-60">
                    <!- Aquí puedes agregar detalles sobre los servicios 
                    
                    
                </div>
            </div>
        </section>-->

        <!-- About App
        <section class="section section-xl bg-accent">
            <div class="container">
                <div class="row row-50 justify-content-center flex-lg-row-reverse align-items-center justify-content-lg-between">
                    <div class="col-sm-10 col-lg-5 wow fadeInRightSmall">
                        <div class="badge">Acerca de Nosotros</div>
                        <h3>Unas Palabras Sobre Nosotros</h3>
                        <p class="big inset-2">Nuestra empresa consultora es una firma líder de administradores y asesores empresariales con oficinas en Estados Unidos. Nuestro objetivo es proporcionarte:</p>
                        <ul class="list-marked">
                            <li>Investigación y análisis de calidad</li>
                            <li>Experiencia en asesoría empresarial</li>
                            <li>Gestión empresarial confiable</li>
                        </ul><a class="button button-primary button-shadow button-winona font-weight-sbold" href="about-us.html">Leer más</a>
                    </div>
                    <div class="col-sm-10 col-lg-6 wow fadeInLeftSmall">
                        <div class="thumbnail-classy">
                            <div class="thumbnail-classy-image bg-image" style="background-image: url(images/web-app-1-650x500.jpg);"></div>
                            <div class="thumbnail-classy-caption"><a class="thumbnail-classy-button mdi mdi-play" href="https://www.youtube.com/watch?v=I5FlP07kdvM" data-lightgallery="item">
                                <svg class="thumbnail-classy-button-shape" width="86" height="86" viewbox="0 0 88 88" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                                    <rect x="1" y="1" width="86" height="86" rx="6" ry="6"></rect>
                                </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- Features-->
        <section class="section section-lg">
            <div class="container">
                <div class="row row-50">
                    <div class="col-sm-10 col-lg-5 wow fadeInRightSmall">
                        <div class="badge">IMPORTANTE</div>
                        <h3>Nuestros<br>Servicios</h3>
                        <p class="big inset-3" style="letter-spacing: .025em">Ofrecemos un programa educativo completo, diseñado para desarrollar habilidades académicas, sociales y emocionales en nuestros estudiantes.</p>
                        <ul class="list-marked">
                            <li>Profesores calificados</li>
                            <li>Más de 15 años formando profesionistas</li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-lg-7 wow fadeInLeftSmall text-center"><img class="img-custom" src="images/oferta.jpg" alt="" width="610" height="432"/></div>
                </div>
            </div>
        </section>

        <!-- Acerca de nuestros proyectos-->
        <section class="section parallax-container section-md bg-accent" data-parallax-img="images/puertasabiertas.jpg" id="about-us">
            <div class="parallax-content">
                <div class="container">
                    <div class="row row-50 justify-content-end">
                        <div class="col-md-8 col-lg-7 col-xl-6">
                            <div class="block-5 wow clipInLeft">
                                <div class="badge wow clipInLeft">Explora Nuestros Últimos Eventos</div>
                                <h3 class="wow clipInLeft" data-wow-delay=".1s"><span></span><br><span class="text-accent">Día de Puertas Abiertas</span></h3>
                                <p class="big wow clipInLeft inset-3" data-wow-delay=".2s">Únete a nosotros en nuestro evento de puertas abiertas donde podrás conocer más sobre nuestra institución, interactuar con el personal docente y descubrir las instalaciones disponibles.</p><!--<a class="button button-default button-winona wow clipInLeft font-weight-sbold" href="#" data-wow-delay=".3s">Ver Galería</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="formulario-comentarios-section">
    <div class="formulario-comentarios-container">
        <h2>Deja tu Comentario</h2>
        <!-- Verificar si el usuario ha iniciado sesión -->
        <?php
     
     if (isset($_SESSION['usuario'])) {
         echo '<form id="formulario-comentarios" class="formulario-comentarios" action="procesar_comentarios.php" method="post">';
         echo '<br>';
         echo '<div class="textarea-container">';
         echo '<textarea class="formulario-comentarios" id="comentario" name="comentario" rows="4" required></textarea>';
         echo '</div>';
         echo '<button class="formulario-comentarios" type="submit">Enviar Comentario</button>';
         echo '</form>';
     } else {
         echo '<p>Debes iniciar sesión para dejar un comentario. <a href="login.php">Iniciar Sesión</a></p>';
     }
     ?>
     
    </div>
</section>

<section class="comentarios-lista-section">
    <div class="comentarios-lista-container">
        <h2>Comentarios</h2>
        <br>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "florece";  
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='comentario'>";
                    echo "<h4>" . htmlspecialchars($row['nombre']) . "</h4>";
                    echo "<p>" . htmlspecialchars($row['comentario']) . "</p>";
                    echo "<p class='fecha'>" . htmlspecialchars($row['fecha']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay comentarios aún.</p>";
            }
        } else {
            echo "<p>Error al ejecutar la consulta: " . $conn->error . "</p>"; 
        }

        $conn->close();
        ?>
    </div>
</section>

    <script>
document.getElementById("formulario-comentarios").addEventListener("submit", function(event) {
    event.preventDefault();

    var nombre = document.getElementById("nombre").value;
    var comentario = document.getElementById("comentario").value;

    if (nombre.trim() !== "" && comentario.trim() !== "") {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "procesar_comentarios.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                window.location.href = "index.php";

                document.getElementById("formulario-comentarios").reset();
            }
        };
        xhr.send("nombre=" + encodeURIComponent(nombre) + "&comentario=" + encodeURIComponent(comentario));
    } else {
        alert("Por favor, completa todos los campos.");
    }
});

});

    </script>
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
            <li><a href="nosotros.php">Nosotros</a></li>
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
info@escuelaflorece.org</a></p>
                </div>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

