<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>
<body>

<div class="cont_principal">
<div class="cont_error">
  
<h1>Error</h1>  
<?php
if(isset($_GET['error'])) {
    $errorCode = $_GET['error'];
    switch($errorCode) {
        case '1':
            echo "<p>Conexión fallida.</p>";
            break;
        case '2':
            echo "<p>Sesión no iniciada.</p>";
            break;
        case '3':
            echo "<p>Comentario vacío.</p>";
            break;
        case '4':
            echo "<p>Error al insertar comentario.</p>";
            break;
        case '5':
            echo "<p>Usuario incorrecto.</p>";
            break;
        case '6':
            echo "<p>Contraseña incorrecta.</p>";
            break;
        case '7':
              echo "<p>No se encontraron los datos.</p>";
              break;
        default:
            echo "<p>Error desconocido.</p>";
    }
} else {
    echo "<p>Error 404</p>";
}
?>


  </div>
<div class="cont_aura_1"></div>
<div class="cont_aura_2"></div>
</div>
<style>
  * {
  margin:0px auto;
  padding: 0px;
text-align:center;
}
body {
  background-color: #D4D9ED;
}
.cont_principal {
position: absolute;  
  width: 100%;
  height: 100%;
overflow: hidden;
}
.cont_error {
position: absolute;
  width: 100%;
  height: 300px;
  top: 50%;
  margin-top:-150px;
}

.cont_error > h1  {
 font-family: 'Lato', sans-serif;  
font-weight: 400;
  font-size:150px;
color:#fff;
position: relative;
left:-100%;
transition: all 0.5s;
}


.cont_error > p  {
 font-family: 'Lato', sans-serif;  
font-weight: 300;
  font-size:24px;
  letter-spacing: 5px;
color:#9294AE;
position: relative;
left:100%;
transition: all 0.5s;
    transition-delay: 0.5s;
-webkit-transition: all 0.5s;
 -webkit-transition-delay: 0.5s;
}

.cont_aura_1 {
  position:absolute;
  width:300px;
  height: 120%;
top:25px;
right: -340px;
background-color: #5174f6;
    box-shadow: 0px 0px 60px 20px rgb(100 132 222 / 50%);
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}

.cont_aura_2 {
  position:absolute;
  width:100%;
  height: 300px;
right:-10%;
bottom:-301px;
background-color: #2116cc;
    box-shadow: 0px 0px 60px 10px rgb(33 48 226 / 50%), 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    z-index: 5;
transition: all 0.5s;
-webkit-transition: all 0.5s;
}

.cont_error_active > .cont_error > h1 {
  left:0%;
}
.cont_error_active > .cont_error > p {
  left:0%;
}

.cont_error_active > .cont_aura_2 {
    animation-name: animation_error_2;
    animation-duration: 4s;
  animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
transform: rotate(-20deg);    
}
.cont_error_active > .cont_aura_1 {
 transform: rotate(20deg);
  right:-170px;
    animation-name: animation_error_1;
    animation-duration: 4s;
  animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}

@-webkit-keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }
}
@-o-keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }

}
@-moz-keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }

}
@keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }
}




@-webkit-keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}
@-o-keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}
}
@-moz-keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}
@keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}

</style>

<script>
  window.onload = function(){
document.querySelector('.cont_principal').className= "cont_principal cont_error_active";  
  
}
</script>
<script>
    setTimeout(function(){
        window.location.href = "index.php";
    }, 5000); 
</script>
  
</body>
</html>