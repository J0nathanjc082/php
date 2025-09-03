<?php
include "koneksi.php";

$usuario = $_GET['usuario'];
$clave   = $_GET['clave'];

$cek_login = "SELECT * FROM login WHERE usuario = '$usuario' AND clave = '$clave'";

$result = $koneksi->query($cek_login);

if ($result->num_rows > 0) {
    echo "OK";
} else {
    echo "Fail";
}
?>
