<?php
include "koneksi.php";

// Usar $_REQUEST para aceptar tanto POST como GET
$Apellidos        = isset($_REQUEST['Apellidos']) ? $_REQUEST['Apellidos'] : '';
$Nombres          = isset($_REQUEST['Nombres']) ? $_REQUEST['Nombres'] : '';
$Edad             = isset($_REQUEST['Edad']) ? $_REQUEST['Edad'] : '';
$Seccion          = isset($_REQUEST['Seccion']) ? $_REQUEST['Seccion'] : '';
$Especialidad     = isset($_REQUEST['Especialidad']) ? $_REQUEST['Especialidad'] : '';
$Votos            = isset($_REQUEST['Votos']) ? $_REQUEST['Votos'] : '';
$Dinero_recaudado = isset($_REQUEST['Dinero_recaudado']) ? $_REQUEST['Dinero_recaudado'] : '';
$Inscripcion      = isset($_REQUEST['fecha_inscripcion']) ? $_REQUEST['fecha_inscripcion'] : '';

$sql = "INSERT INTO candidatas (Apellidos, Nombres, Edad, Seccion, Especialidad, Votos, Dinero_recaudado, Inscripcion)
        VALUES ('$Apellidos','$Nombres','$Edad','$Seccion','$Especialidad','$Votos','$Dinero_recaudado','$Inscripcion')";

if (mysqli_query($koneksi, $sql)) {
    echo "ok";
} else {
    echo "error: " . mysqli_error($koneksi);
}
?>
