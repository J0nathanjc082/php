<?php
error_reporting(0);
include "koneksi.php";

$usuario = isset($_REQUEST['usuario']) ? trim($_REQUEST['usuario']) : '';
$clave   = isset($_REQUEST['clave']) ? trim($_REQUEST['clave']) : '';

if ($usuario !== '' && $clave !== '') {
    $sql = "SELECT * FROM login WHERE usuario='$usuario' AND clave='$clave' LIMIT 1";
    $result = mysqli_query($koneksi, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "OK";
    } else {
        echo "Fail";
    }
} else {
    echo "Fail";
}
?>
