<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM penerima_bantuan WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h2>Edit Data Bantuan Sosial</h2>

<form action="input_santri.php" method="post">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">

    NIK<br>
    <input type="text" name="nik" value="<?= $d['nik'] ?>"><br><br>

    Nama<br>
    <input type="text" name="nama" value="<?= $d['nama'] ?>"><br><br>

    Alamat<br>
    <textarea name="alamat"><?= $d['alamat'] ?></textarea><br><br>

    Jenis Bantuan<br>
    <input type="text" name="jenis_bantuan" value="<?= $d['jenis_bantuan'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
</body>
</html>