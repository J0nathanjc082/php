<?php
include 'koneksi.php';

// Recibir el ID ya sea por POST o GET
if (isset($_REQUEST['ID'])) {
    $id = intval($_REQUEST['ID']); // convertir a número por seguridad
} else {
    die("Error: no se recibió ningún ID.");
}

// Preparar la consulta para mayor seguridad
$stmt = mysqli_prepare($koneksi, "DELETE FROM candidatas WHERE ID = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

// Verificar si se borró algún registro
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Registro con ID $id eliminado correctamente.";
} else {
    echo "No se encontró ningún registro con ID $id.";
}

// Cerrar conexiones
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
