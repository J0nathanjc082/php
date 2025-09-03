<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

$usuario = $_REQUEST['usuario'];
$correo  = $_REQUEST['correo'];
$clave   = $_REQUEST['clave'];

if ($usuario != "" && $correo != "" && $clave != "") {
    $sql = "INSERT INTO login (usuario, correo, clave) VALUES ('$usuario', '$correo', '$clave')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Registro agregado correctamente. Último ID insertado: " . mysqli_insert_id($koneksi);
    } else {
        echo "Error al insertar: " . mysqli_error($koneksi);
    }
} else {
    echo "Faltan parámetros";
}
?>
