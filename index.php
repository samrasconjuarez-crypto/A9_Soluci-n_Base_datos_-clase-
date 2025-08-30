<?php
session_start();
include 'conexion.php';

// Si ya envió el formulario
if (isset($_POST['nombre']) && isset($_POST['correo'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['correo'] = $_POST['correo'];
    header("Location: votar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Votación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Bienvenido a la Votación de Universidades</h1>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <input type="email" name="correo" placeholder="Tu correo" required>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
