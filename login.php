<!DOCTYPE html>
<html lang="en">
<head>
<title>Iniciar Sesion</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleSlogin.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- FORMULARIO DE INICIO DE SESIÓN -->
                <form action="login_action.php" method="post" class="sign-in-form">
                    <h2 class="title">Iniciar sesión</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario" name="usuario" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="password" placeholder="Contraseña" name="password" required minlength="8"  />
                    </div>
                    <input type="submit" value="Iniciar Sesión" class="btn solid" />
                    <button type="button" class="btn solid" onclick="location.href='forgot_password.php'">¿Olvidaste tu contraseña?</button>
                </form>

               <!-- FORMULARIO DE REGISTRO -->
<form action="register.php" method="post" class="sign-up-form">
    <h2 class="title">Regístrate</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Nombre" name="nombre" required pattern="[a-zA-Z]+" title="El nombre solo puede contener letras " />
    </div>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Usuario" name="usuario" required pattern="[a-zA-Z0-9]+" title="El usuario solo puede contener letras y números"/>
    </div>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Apellido Paterno" name="apellidoP" required pattern="[a-zA-Z]+" title="El apellido paterno solo puede contener letras"/>
    </div>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Apellido Materno" name="apellidoM" required pattern="[a-zA-Z]+" title="El apellido materno solo puede contener letras"/>
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="email" placeholder="Correo" name="correo" required />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Contraseña" name="password" required minlength="8" />
    </div>
    <input type="submit" class="btn" value="Regístrate" />
</form>



            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Eres Nuevo?</h3>
                    <p>Haz clic en el siguiente botón para crear tu cuenta!</p>
                    <button class="btn transparent" id="sign-up-btn">Regístrate</button>

                    <br>
                    <br>
                    <button class="btn transparent" id="home-btn" onclick="location.href='index.php'">Inicio</button>
                </div>
                <img src="https://i.pinimg.com/originals/72/82/fe/7282fee6a0641482ab4391b9638ee46c.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Ya tienes una Cuenta?</h3>
                    <p>Inicia sesión</p>
                    <button class="btn transparent" id="sign-in-btn">Iniciar Sesión</button>
                </div>
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f00b6e69400595.5b7fb3d1ce276.png" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
    <script>
    // Función para mostrar el mensaje de registro exitoso
    function showSuccessMessage() {
        document.getElementById("message").style.display = "block";
    }

    // Verificar si el registro fue exitoso y mostrar el mensaje
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('registro') && urlParams.get('registro') === 'exitoso') {
        showSuccessMessage();
    }
</script>
</body>
</html>
