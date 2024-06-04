<!DOCTYPE html>
<html lang="en">
<head>
<title>Recuperar Contraseña</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleSlogin.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="validate_recovery.php" method="post" class="sign-in-form">
                    <h2 class="title">Recuperar Contraseña</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuario" name="usuario" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Correo Electrónico" name="email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre" name="nombre" required />
                    </div>
                    <input type="submit" value="Recuperar" class="btn solid" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>¿Ya tienes una Cuenta?</h3>
                    <p>Inicia sesión</p>
                    <button class="btn transparent" id="sign-in-btn" onclick="location.href='login.php'">Iniciar Sesión</button>
                </div>
                <img src="https://i.pinimg.com/originals/72/82/fe/7282fee6a0641482ab4391b9638ee46c.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>¿Ya tienes una Cuenta?</h3>
                    <p>Inicia sesión</p>
                    <button class="btn transparent" id="sign-in-btn" onclick="location.href='login.php'">Iniciar Sesión</button>
                </div>
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f00b6e69400595.5b7fb3d1ce276.png" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
