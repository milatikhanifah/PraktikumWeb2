<?php include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data</title></head>
<body>

<h2 align="center">Edit Data Mahasiswa</h2>

<form method="POST" align="center">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    <input type="text" name="nim" value="<?= $d['nim']; ?>" required><br><br>
    <input type="text" name="nama" value="<?= $d['nama']; ?>" required><br><br>
    <input type="text" name="prodi" value="<?= $d['prodi']; ?>" required><br><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$_POST[nim]', nama='$_POST[nama]', prodi='$_POST[prodi]' WHERE id='$_POST[id]'");
    header("location:index.php");
}
?>

</body>
</html>
