<?php
$conexion = new mysqli("localhost", "root", "", "votacion");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
