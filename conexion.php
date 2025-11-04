<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "login_db";

$conn = new mysqli($host, $usuario, $clave, $bd);

if ($conn->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}
?>
