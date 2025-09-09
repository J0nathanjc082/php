<?php

include "koneksi.php";

$ID = $_POST['ID'];

$sql = "DELETE FROM candidatas WHERE ID='$ID'";

if (mysqli_query($koneksi, $sql)) {
    echo "ok";
} else {
    echo "error: " . mysqli_error($koneksi);
}
?>
