<?php
$host = "localhost";
$usuario = "root";
$password = ""; // En XAMPP normalmente está vacío
$base_datos = "votacion"; // Debe coincidir con el nombre real

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
