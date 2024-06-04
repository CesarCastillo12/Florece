<?php

$servername = "localhost";
$username = "root";         
$password = "";             
$dbname = "florece";        
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    header("Location: errores.php?error=1");
    exit();
}

if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $puesto = $_POST['puesto'];
    $cv = file_get_contents($_FILES['cv']['tmp_name']);


    $stmt = $conn->prepare("INSERT INTO postulantes (nombre, email, telefono, puesto, cv) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $email, $telefono, $puesto, $cv);

    if ($stmt->execute()) {
        echo "<script>
                alert('Solicitud enviada con éxito.');
                window.location.href = 'nosotros.php';
              </script>";
    } else {
        header("Location: errores.php?error=2");
        exit();
    }

    $stmt->close();
} else {
    header("Location: errores.php?error=3");
    exit();
}

$conn->close();
?>
