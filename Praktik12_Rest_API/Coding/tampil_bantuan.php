<?php
include "koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM bantuan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bantuan Sosial</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Data Bantuan Sosial</h2>
<a href="input_bantuan.php">Tambah Data</a> |
<a href="cetak_bantuan_pdf.php">Cetak PDF</a>

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIK</th>
    <th>Jenis Bantuan</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($d = mysqli_fetch_array($data)){ ?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama_penerima']; ?></td>
    <td><?= $d['nik']; ?></td>
    <td><?= $d['jenis_bantuan']; ?></td>
    <td><?= $d['status']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
<body>
</html>
