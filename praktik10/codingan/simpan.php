<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_bantuan = $_POST['jenis_bantuan'];

$query = "INSERT INTO penerima_bantuan 
          VALUES (NULL,'$nik','$nama','$alamat','$jenis_bantuan')";

mysqli_query($koneksi, $query);

header("location:tampil_bantuan.php");
?>