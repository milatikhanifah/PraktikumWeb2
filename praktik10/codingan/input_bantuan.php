<?php
include 'koneksi.php';

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_bantuan = $_POST['jenis_bantuan'];

$query = "UPDATE penerima_bantuan SET
          nik='$nik',
          nama='$nama',
          alamat='$alamat',
          jenis_bantuan='$jenis_bantuan'
          WHERE id='$id'";

mysqli_query($koneksi, $query);

header("location:tampil_bantuan.php");
?>