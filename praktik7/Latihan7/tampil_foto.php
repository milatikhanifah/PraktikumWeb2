<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Tampil Foto</title>
<style>
body{
    font-family: Arial;
    background: #fdf3ff;
}
table{
    width: 90%;
    margin: auto;
    margin-top: 30px;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 0 10px #d2b8ff;
}
th{
    background: #d8b4ff;
    padding: 12px;
    color: black;
}
td{
    padding: 10px;
    border-bottom: 1px solid #eadcff;
    text-align: center;
}
img{
    width: 70px;
    border-radius: 8px;
}
a{
    color: red;
    text-decoration: none;
    font-weight: bold;
}
a:hover{
    color: #ff4b4b;
}
.add{
    margin: auto;
    width: 90%;
    text-align: right;
    margin-top: 20px;
}
button{
    padding: 10px 20px;
    background: #c47bff;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
button:hover{
    background: #a45be6;
}
</style>
</head>
<body>

<div class="add">
    <a href="input_foto.php"><button>+ Tambah Data</button></a>
</div>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Foto</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id DESC");
$no = 1;

while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['nim']; ?></td>
    <td><img src="foto/<?= $d['foto']; ?>"></td>
    <td><a style='color:blue;' href="edit.php?id=<?= $d['id']; ?>">EDIT</a></td>
    <td><a style='color:red;' href="hapus.php?id=<?= $d['id']; ?>">DELETE</a></td>
</tr>
<?php } ?>
</table>

</body>
</html>