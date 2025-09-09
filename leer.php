<?php
include "koneksi.php";

$sql = "SELECT * FROM candidatas ORDER BY ID DESC";
$result = mysqli_query($koneksi, $sql);

$datos = array();
while ($fila = mysqli_fetch_assoc($result)) {
    $datos[] = $fila;
}

echo json_encode($datos); // JSON para App Inventor
?>
