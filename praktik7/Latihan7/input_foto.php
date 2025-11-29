<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Mahasiswa</title>
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
input, select{
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
    background: #a45be6;
}
</style>
</head>
<body>

<div class="container">
<h2 style="text-align:center;">Tambah Data Mahasiswa</h2>

<form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Prodi</label>
    <input type="text" name="prodi" required>

    <label>Foto</label>
    <input type="file" name="foto" required>

    <button type="submit">Simpan</button>
</form>
</div>

</body>
</html>