<?php
include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

$foto   = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($file_tmp, "foto/".$foto);

mysqli_query($koneksi, "INSERT INTO mahasiswa(nama,nim,prodi,foto)
VALUES('$nama','$nim','$prodi','$foto')");

header("Location: tampil_foto.php");
?>
