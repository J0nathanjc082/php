<?php
include "koneksi.php";

$ID               = $_POST['ID'];
$Apellidos        = $_POST['Apellidos'];
$Nombres          = $_POST['Nombres'];
$Edad             = $_POST['Edad'];
$Seccion          = $_POST['Seccion'];
$Especialidad     = $_POST['Especialidad'];
$Votos            = $_POST['Votos'];
$Dinero_recaudado = $_POST['Dinero_recaudado'];
$Inscripcion      = $_POST['fecha_inscripcion'];

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

if (mysqli_query($koneksi, $sql)) {
    echo "ok";
} else {
    echo "error: " . mysqli_error($koneksi);
}
?>
