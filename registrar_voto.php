<?php
session_start();
include "db.php";

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$universidad = $_POST['universidad'];

// Validar que no haya votado antes
$sql_check = "SELECT * FROM votos WHERE usuario_id = $usuario_id";
$res_check = $conn->query($sql_check);

if ($res_check->num_rows == 0) {
    $sql = "INSERT INTO votos (usuario_id, universidad) VALUES ($usuario_id, '$universidad')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('¡Voto registrado!'); window.location.href='votar.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "<script>alert('Ya has votado.'); window.location.href='votar.php';</script>";
}
?>
