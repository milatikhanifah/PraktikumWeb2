<?php
include "koneksi.php";

mysqli_query($conn, "INSERT INTO bantuan VALUES (
    '',
    '$_POST[nama]',
    '$_POST[nik]',
    '$_POST[jenis]',
    '$_POST[status]'
)");

header("location:tampil_bantuan.php");
?>
