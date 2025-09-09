<?php
include "koneksi.php";

$sql = "SELECT * FROM candidatas ORDER BY ID ASC";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado de Candidatas</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px;
        }
        h2 {
            text-align: center;
            color: #c2185b;
            margin-bottom: 30px;
            font-size: 28px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #f8bbd0;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #f48fb1;
            color: #880e4f;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #fce4ec;
        }
        tr:hover {
            background-color: #f3e5f5;
        }
        .dinero {
            font-weight: bold;
            color: #4e342e;
        }
        .votos {
            font-weight: bold;
            color: #6a1b9a;
        }
    </style>
</head>
<body>

<h2>Sistema Rosa de Registro de Candidatas</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Apellidos</th>
        <th>Nombres</th>
        <th>Edad</th>
        <th>Sección</th>
        <th>Especialidad</th>
        <th>Votos</th>
        <th>Dinero Recaudado</th>
        <th>Inscripción</th>
        <th>Fecha</th>
    </tr>

    <?php while ($fila = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $fila['ID'] ?></td>
        <td><?= $fila['Apellidos'] ?></td>
        <td><?= $fila['Nombres'] ?></td>
        <td><?= $fila['Edad'] ?></td>
        <td><?= $fila['Seccion'] ?></td>
        <td><?= $fila['Especialidad'] ?></td>
        <td class="votos"><?= $fila['Votos'] ?></td>
        <td class="dinero">$<?= number_format($fila['Dinero_recaudado'], 2) ?></td>
        <td><?= $fila['Inscripcion'] ?></td>
        <td><?= $fila['Fecha'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
