<?php
session_start();
include 'conexion.php';

// Validar que el usuario haya iniciado sesión
if (!isset($_SESSION['nombre']) || !isset($_SESSION['correo'])) {
    header("Location: index.php");
    exit();
}

// Guardar voto si se envió
if (isset($_POST['universidad'])) {
    $nombre = $_SESSION['nombre'];
    $correo = $_SESSION['correo'];
    $universidad = $_POST['universidad'];

    // Insertar voto
    $stmt = $conexion->prepare("INSERT INTO votos (nombre, correo, universidad) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $correo, $universidad);
    $stmt->execute();
    $stmt->close();

    // Redirigir al formulario
    header("Location: index.php");
    exit();
}

// Obtener conteo de votos
$query = "SELECT universidad, COUNT(*) as total FROM votos GROUP BY universidad";
$result = $conexion->query($query);

$votos = [
    "ITCJ" => 0,
    "TEC" => 0,
    "URN" => 0,
    "UACJ" => 0,
    "UACH" => 0
];

while ($row = $result->fetch_assoc()) {
    $votos[$row['universidad']] = $row['total'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votación Universidades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Votación de Universidades</h1>
    <img src="fotos/academia_stem.png" alt="Academia Stem" width="50%">
    <h3>Haz tu elección. Solo puedes votar una vez por cada universidad.</h3>

    <!-- Visualizador general -->
    <div class="resultados">
        <h2>Resultados Totales</h2>
        <div class="resultados-flex">
            <span>ITCJ: <strong><?php echo $votos['ITCJ']; ?></strong></span>
            <span>TEC: <strong><?php echo $votos['TEC']; ?></strong></span>
            <span>URN: <strong><?php echo $votos['URN']; ?></strong></span>
            <span>UACJ: <strong><?php echo $votos['UACJ']; ?></strong></span>
            <span>UACH: <strong><?php echo $votos['UACH']; ?></strong></span>
        </div>
    </div>

    <div class="container">
        <?php
        $universidades = ["ITCJ", "TEC", "URN", "UACJ", "UACH"];
        foreach ($universidades as $uni) {
            echo '<div class="card">
                    <h2>'.$uni.'</h2>
                    <img src="fotos/'.$uni.'_LOGO.png" alt="'.$uni.'" width="80%">
                    <form method="POST">
                        <input type="hidden" name="universidad" value="'.$uni.'">
                        <button class="btn" type="submit">Votar</button>
                    </form>
                    <p>Votos: '.$votos[$uni].'</p>
                  </div>';
        }
        ?>
    </div>
</body>
</html>
