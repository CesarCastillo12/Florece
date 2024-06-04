<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];

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

    // Verificar si al menos dos de los datos proporcionados coinciden
    $sql = "SELECT * FROM usuarios WHERE (usuario = ? AND correo = ?) OR (usuario = ? AND nombre = ?) OR (correo = ? AND nombre = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssss', $usuario, $email, $usuario, $nombre, $email, $nombre);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Redirigir al formulario de restablecimiento de contraseña
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: reset_password.php");
        exit();
    } else {
        header("Location: errores.php?error=7");
    }

    $stmt->close();
    $conn->close();
}
?>
