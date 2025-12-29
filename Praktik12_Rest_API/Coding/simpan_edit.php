<?php
include "koneksi.php";

mysqli_query($conn, "UPDATE bantuan SET
    nama_penerima='$_POST[nama]',
    nik='$_POST[nik]',
    jenis_bantuan='$_POST[jenis]',
    status='$_POST[status]'
    WHERE id='$_POST[id]'
");

header("location:tampil_bantuan.php");
?>
