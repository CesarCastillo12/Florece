<?php
session_start();

$servername = "localhost";
$username = "root";         
$password = "";             
$dbname = "florece";        
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    header("Location: errores.php?error=1");
    exit();
}

if(isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    header("Location: login.php?error=2");
    exit();
}

$comentario = $conn->real_escape_string($_POST['comentario']); 

if (empty($comentario)) {
    header("Location: ../errores.php?error=3");
    exit();
}

$sql = "INSERT INTO comentarios (nombre, comentario, fecha) VALUES ('$usuario', '$comentario', NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    header("Location: ../errores.php?error=4"); 
    exit();
}

$conn->close();
?>
