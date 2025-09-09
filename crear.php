<?php
$conexion = new mysqli("db4free.net", "fortis", "S0P0RT3*-", "festival_flores_");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$Apellidos     = $_POST['Apellidos'];
$Nombres       = $_POST['Nombres'];
$Edad          = $_POST['Edad'];
$Seccion       = $_POST['Seccion'];
$Especialidad  = $_POST['Especialidad'];
$Votos         = $_POST['Votos'];
$Dinero_recaudado= $_POST['Dinero_recaudado'];
$Inscripcion= $_POST['fecha_inscripcion']; // viene manual de App Inventor

$sql = "INSERT INTO candidatas (Apellidos, Nombres, Edad, Seccion, Especialidad, Votos, Dinero_recaudado, Inscripcion)
        VALUES ('$Apellidos','$Nombres','$Edad','$Seccion','$Especialidad','$Votos','$Dinero_recaudado','$Inscripcion')";

if ($conexion->query($sql)) {
    echo "ok";
} else {
    echo "error: " . $conexion->error;
}
?>
