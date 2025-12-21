<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM penerima_bantuan WHERE id='$id'");
header("location:tampil_bantuan.php");
?>