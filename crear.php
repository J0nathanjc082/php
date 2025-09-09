<?php
include "koneksi.php";

$Apellidos        = $_POST['Apellidos'];
$Nombres          = $_POST['Nombres'];
$Edad             = $_POST['Edad'];
$Seccion          = $_POST['Seccion'];
$Especialidad     = $_POST['Especialidad'];
$Votos            = $_POST['Votos'];
$Dinero_recaudado = $_POST['Dinero_recaudado'];
$Inscripcion      = $_POST['fecha_inscripcion']; // manual desde App Inventor

$sql = "INSERT INTO candidatas (Apellidos, Nombres, Edad, Seccion, Especialidad, Votos, Dinero_recaudado, Inscripcion)
        VALUES ('$Apellidos','$Nombres','$Edad','$Seccion','$Especialidad','$Votos','$Dinero_recaudado','$Inscripcion')";

if (mysqli_query($koneksi, $sql)) {
    echo "ok";
} else {
    echo "error: " . mysqli_error($koneksi);
}
?>

