<?php
include "koneksi.php";

// Si viene por POST, actualizamos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID              = $_POST['ID'];
    $Apellidos        = $_POST['Apellidos'];
    $Nombres          = $_POST['Nombres'];
    $Edad             = $_POST['Edad'];
    $Seccion          = $_POST['Seccion'];
    $Especialidad     = $_POST['Especialidad'];
    $Votos            = $_POST['Votos'];
    $Dinero_recaudado = $_POST['Dinero_recaudado'];
    $Inscripcion      = $_POST['Inscripcion'];

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

// Consultar tabla
$sql = "SELECT * FROM candidatas ORDER BY ID ASC";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Candidatas</title>
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
        input {
            width: 100%;
            border: none;
            background: transparent;
            text-align: center;
        }
        button {
            margin: 10px auto;
            display: block;
            padding: 8px 16px;
            background: #c2185b;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background: #880e4f;
        }
    </style>
</head>
<body>

<h2>Editar Registro de Candidatas</h2>

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
        <th>Acción</th>
    </tr>

    <?php while ($fila = mysqli_fetch_assoc($result)): ?>
    <form method="POST">
    <tr>
        <td><input type="text" name="ID" value="<?= $fila['ID'] ?>" readonly></td>
        <td><input type="text" name="Apellidos" value="<?= $fila['Apellidos'] ?>"></td>
        <td><input type="text" name="Nombres" value="<?= $fila['Nombres'] ?>"></td>
        <td><input type="number" name="Edad" value="<?= $fila['Edad'] ?>"></td>
        <td><input type="text" name="Seccion" value="<?= $fila['Seccion'] ?>"></td>
        <td><input type="text" name="Especialidad" value="<?= $fila['Especialidad'] ?>"></td>
        <td><input type="number" name="Votos" value="<?= $fila['Votos'] ?>"></td>
        <td><input type="number" step="0.01" name="Dinero_recaudado" value="<?= $fila['Dinero_recaudado'] ?>"></td>
        <td><input type="date" name="Inscripcion" value="<?= $fila['Inscripcion'] ?>"></td>
        <td><button type="submit">Actualizar</button></td>
    </tr>
    </form>
    <?php endwhile; ?>
</table>

</body>
</html>

