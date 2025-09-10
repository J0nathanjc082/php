<?php
include "koneksi.php";

// Si viene por POST, actualizar todos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['ID'] as $index => $ID) {
        $Apellidos = $_POST['Apellidos'][$index];
        $Nombres = $_POST['Nombres'][$index];
        $Edad = $_POST['Edad'][$index];
        $Seccion = $_POST['Seccion'][$index];
        $Especialidad = $_POST['Especialidad'][$index];
        $Votos = $_POST['Votos'][$index];
        $Dinero_recaudado = $_POST['Dinero_recaudado'][$index];
        $Inscripcion = $_POST['Inscripcion'][$index];

        $sql = "UPDATE candidatas 
                SET Apellidos='$Apellidos',
                    Nombres='$Nombres',
                    Edad='$Edad',
                    Seccion='$Seccion',
                    Especialidad='$Especialidad',
                    Votos='$Votos',
                    Dinero_recaudado='$Dinero_recaudado',
                    Inscripcion='$Inscripcion'
                WHERE ID='$ID'";
        mysqli_query($koneksi, $sql);
    }
}

// Consultar registros
$sql = "SELECT * FROM candidatas ORDER BY ID ASC";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Candidatas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ffe6f0;
            margin: 0;
            padding: 10px;
        }
        h2 {
            text-align: center;
            color: #d81b60;
            margin-bottom: 20px;
        }
        .table-container {
            overflow-x: auto; /* Scroll horizontal en móvil */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px; /* Para evitar que se comprima demasiado */
        }
        th, td {
            border: 1px solid #f48fb1;
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }
        th {
            background: #f06292;
            color: white;
        }
        tr:nth-child(even) {
            background: #fce4ec;
        }
        input {
            width: 100%;
            border: none;
            background: transparent;
            text-align: center;
            font-size: 14px;
        }
        .btn-guardar {
            display: block;
            margin: 20px auto;
            background: #c2185b;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-guardar:hover {
            background: #880e4f;
        }
        @media (max-width: 768px) {
            table {
                font-size: 12px;
            }
            th, td {
                padding: 6px;
            }
            input {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

<h2>Registro de Candidatas</h2>

<form method="POST">
<div class="table-container">
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
    </tr>

    <?php while ($fila = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><input type="text" name="ID[]" value="<?= $fila['ID'] ?>" readonly></td>
        <td><input type="text" name="Apellidos[]" value="<?= $fila['Apellidos'] ?>"></td>
        <td><input type="text" name="Nombres[]" value="<?= $fila['Nombres'] ?>"></td>
        <td><input type="number" name="Edad[]" value="<?= $fila['Edad'] ?>"></td>
        <td><input type="text" name="Seccion[]" value="<?= $fila['Seccion'] ?>"></td>
        <td><input type="text" name="Especialidad[]" value="<?= $fila['Especialidad'] ?>"></td>
        <td><input type="number" name="Votos[]" value="<?= $fila['Votos'] ?>"></td>
        <td><input type="number" step="0.01" name="Dinero_recaudado[]" value="<?= $fila['Dinero_recaudado'] ?>"></td>
        <td><input type="date" name="Inscripcion[]" value="<?= $fila['Inscripcion'] ?>"></td>
    </tr>
    <?php endwhile; ?>
</table>
</div>

<button type="submit" class="btn-guardar">Actualizar Todo</button>
</form>

</body>
</html>
