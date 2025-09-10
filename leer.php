<?php
include "koneksi.php";

$sql = "SELECT * FROM candidatas ORDER BY ID ASC";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Candidatas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff0f5;
            margin: 0;
            padding: 10px;
        }
        h2 {
            text-align: center;
            color: #c2185b;
            margin: 15px 0;
        }
        .card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            margin-bottom: 15px;
            padding: 15px;
        }
        .card h3 {
            margin: 0;
            color: #d81b60;
            font-size: 18px;
        }
        .field {
            margin: 5px 0;
            font-size: 14px;
        }
        .label {
            font-weight: bold;
            color: #880e4f;
        }
        .votos {
            color: #6a1b9a;
            font-weight: bold;
        }
        .dinero {
            color: #4e342e;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Registro de Candidatas</h2>

<?php while ($fila = mysqli_fetch_assoc($result)): ?>
<div class="card">
    <h3><?= $fila['Nombres'] ?> <?= $fila['Apellidos'] ?></h3>
    <div class="field"><span class="label">ID:</span> <?= $fila['ID'] ?></div>
    <div class="field"><span class="label">Edad:</span> <?= $fila['Edad'] ?></div>
    <div class="field"><span class="label">Sección:</span> <?= $fila['Seccion'] ?></div>
    <div class="field"><span class="label">Especialidad:</span> <?= $fila['Especialidad'] ?></div>
    <div class="field"><span class="label">Votos:</span> <span class="votos"><?= $fila['Votos'] ?></span></div>
    <div class="field"><span class="label">Dinero Recaudado:</span> <span class="dinero">$<?= number_format($fila['Dinero_recaudado'], 2) ?></span></div>
    <div class="field"><span class="label">Inscripción:</span> <?= $fila['Inscripcion'] ?></div>
</div>
<?php endwhile; ?>

</body>
</html>

