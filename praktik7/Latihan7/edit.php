<?php
include "koneksi.php";
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data Mahasiswa</title>
<style>
body{
    font-family: Arial;
    background: #f8eaff;
}
.container{
    width: 35%;
    margin: auto;
    background: white;
    padding: 20px;
    margin-top: 40px;
    border-radius: 12px;
    box-shadow: 0 0 10px #d2b8ff;
}
input{
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #caaaff;
}
button{
    width: 100%;
    padding: 10px;
    background: #c47bff;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 10px;
    cursor: pointer;
}
button:hover{
    background:#a45be6;
}
img{
    width: 100px;
    border-radius: 8px;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<div class="container">
<h2 style="text-align:center;">Edit Data Mahasiswa</h2>

<form action="proses_update.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $d['nama']; ?>" required>

    <label>NIM</label>
    <input type="text" name="nim" value="<?= $d['nim']; ?>" required>

    <label>Prodi</label>
    <input type="text" name="prodi" value="<?= $d['prodi']; ?>" required>

    <label>Foto saat ini</label><br>
    <img src="foto/<?= $d['foto']; ?>"><br>

    <label>Ganti Foto (opsional)</label>
    <input type="file" name="foto">

    <button type="submit">Update</button>
</form>
</div>

</body>
</html>
