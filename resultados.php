<?php
include 'conexion.php';

$query = "SELECT * FROM votos ORDER BY fecha DESC";
$result = $conexion->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados Detallados</title>
</head>
<body>
    <h1>Listado de Votos</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Universidad</th>
            <th>Fecha</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['universidad']; ?></td>
                <td><?php echo $row['fecha']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
