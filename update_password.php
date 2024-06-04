<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $usuario = $_SESSION['usuario'];

    if ($new_password !== $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
        exit();
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "florece";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Actualizar la contraseña en la base de datos sin encriptar
    $sql = "UPDATE usuarios SET password = ? WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $new_password, $usuario);

    if ($stmt->execute()) {
        echo "Tu contraseña ha sido restablecida exitosamente.";
        // Redirigir al formulario de inicio de sesión
        header("Location: login.php");
        exit();
    } else {
        echo "Hubo un error al restablecer tu contraseña. Por favor, inténtalo de nuevo.";
    }

    $stmt->close();
    $conn->close();
}
?>
