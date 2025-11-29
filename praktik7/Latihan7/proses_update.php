<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

if($_FILES['foto']['name'] != ""){
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp, "foto/".$foto);

    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi', foto='$foto' WHERE id='$id'");
} else {
    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id='$id'");
}

header("Location: tampil_foto.php");
?>