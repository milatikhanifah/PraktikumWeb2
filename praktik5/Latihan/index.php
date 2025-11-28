<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background: #4a90e2;
            color: white;
        }
        a.button {
            background: blue;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<h2 align="center">Data Mahasiswa</h2>

<form method="GET" align="center">
    <input type="text" name="cari" placeholder="Masukkan nama mahasiswa">
    <button type="submit">Cari</button>
</form>

<br>

<center><a href="tambah.php" class="button">+ Tambah Data</a></center>
<br>

<table align="center">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%'");
    } else {
        $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
    }

    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['nama']; ?></td>
        <td><?= $d['nim']; ?></td>
        <td><?= $d['prodi']; ?></td>
        <td>
            <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin hapus data?');">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
