<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM penerima_bantuan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bantuan Sosial</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Data Penerima Bantuan Sosial</h2>
    <a href="form_bantuan.html">Tambah Data</a><br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Bantuan</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; while($d=mysqli_fetch_array($data)){ ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nik'] ?></td>
            <td><?= $d['nama'] ?></td>
            <td><?= $d['alamat'] ?></td>
            <td><?= $d['jenis_bantuan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
                <a href="cetak_bantuan_pdf.php" target="_blank">🖨️ Cetak PDF</a>

            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>