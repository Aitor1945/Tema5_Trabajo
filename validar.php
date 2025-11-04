<?php
session_start();
include 'conexion.php';


$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contrasena=MD5('$contrasena')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
   $_SESSION['nombre'] = $row['nombre'];
   header("Location: formulario.php");
   exit();

} else {
    echo "<h3>Usuario o contraseña incorrectos</h3>";
    echo "<a href='index.php'>Volver al login</a>";
}

$conn->close();
?>