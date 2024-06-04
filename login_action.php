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


$usuario = $_POST['usuario'];
$password = $_POST['password']; 

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    header("Location: errores.php?error=5"); 
    exit();
}

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
    exit();
} else {
    header("Location: errores.php?error=6"); 
    exit();
}

$conn->close();
?>
