<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h2 align="center">Tambah Data Mahasiswa</h2>
<form method="POST" align="center">
    <input type="text" name="nama" placeholder="Nama" required><br><br>
    <input type="text" name="nim" placeholder="NIM" required><br><br>
    <input type="text" name="prodi" placeholder="Prodi" required><br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$prodi')");
    header("location:index.php");
}
?>

</body>
</html>
