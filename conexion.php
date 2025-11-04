<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "login_db";

$conexion = new mysqli($host, $usuario, $clave, $bd);

if ($conexion->connect_error) {
  die("Error de conexión: " . $conexion->connect_error);
}
?>
