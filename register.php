<?php
$servername = "localhost";  // Cambia esto si tu servidor de base de datos no está en la misma máquina
$username = "root";         // Cambia esto por tu nombre de usuario de la base de datos
$password = "";             // Cambia esto por tu contraseña de la base de datos
$dbname = "florece";        // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$correo = $_POST['correo'];
$password = $_POST['password']; // Asegúrate de almacenar las contraseñas de manera segura

// Insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, usuario, apellidoP, apellidoM, correo, password)
VALUES ('$nombre', '$usuario', '$apellidoP', '$apellidoM', '$correo', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirigir con un mensaje de éxito
    header("Location: login.php?registro=exitoso");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
