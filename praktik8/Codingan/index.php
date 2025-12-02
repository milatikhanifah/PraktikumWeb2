<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DAFTAR PENGGUNA💗</title>
<style>
body { background: pink; font-family: Arial; text-align:center; }
table { width: 90%; margin: auto; border-collapse: collapse; background: white; }
th, td { border: 2px solid hotpink; padding: 10px; font-weight:bold; }
th { background: hotpink; color: white; }
.btn { padding:7px 12px; border:none; border-radius:5px; cursor:pointer; margin:3px; }
.tambah { background:#ff00aa; color:white; }
.edit { background:orange; color:white; }
.hapus { background:red; color:white; }
.search-box { padding:8px; width:200px; border-radius:5px; border:1px solid #555; }
</style>
</head>
<body>

<h2>🌈 DAFTAR PENGGUNA💖</h2>

<form method="GET">
    <input type="text" name="search" class="search-box" placeholder="Cari user...">
    <button class="btn">Search</button>
</form>

<br>
<a href="tambah.php"><button class="btn tambah">Tambah Data +</button></a>
<br><br>

<table>
<tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Username</th>
    <th>Aksi</th>
</tr>

<?php
$cari = "";
if(isset($_GET['search'])){
    $cari = "WHERE firstname LIKE '%".$_GET['search']."%' 
             OR lastname LIKE '%".$_GET['search']."%' 
             OR username LIKE '%".$_GET['search']."%'";
}

$result = mysqli_query($koneksi, "SELECT * FROM users $cari");
$no = 1;

while ($data = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?= $data['id']; ?></td>
    <td><?= $data['firstname']; ?></td>
    <td><?= $data['lastname']; ?></td>
    <td><?= $data['username']; ?></td>
    <td>
        <a href="edit.php?id=<?= $data['id']; ?>"><button class="btn edit">Edit</button></a>
        <a href="hapus.php?id=<?= $data['id']; ?>" onclick="return confirm('Yakin hapus?')">
            <button class="btn hapus">Hapus</button>
        </a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>
