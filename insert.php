<?php
error_reporting(0);
include "koneksi.php";

$usuario = isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : '';
$correo  = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : '';
$clave   = isset($_REQUEST['clave']) ? $_REQUEST['clave'] : '';

if ($usuario != "" && $correo != "" && $clave != "") {
    $sql = "INSERT INTO login (usuario, correo, clave) VALUES ('$usuario', '$correo', '$clave')";
    if (mysqli_query($koneksi, $sql)) {
        echo "OK";
    } else {
        echo "Fail";
    }
} else {
    echo "Fail";
}
?>
