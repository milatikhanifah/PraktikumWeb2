<?php
include "../koneksi.php";
$data = mysqli_query($conn, "SELECT * FROM bantuan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Layanan Sosial</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h2>Data Bantuan Sosial</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama Penerima</th>
        <th>NIK</th>
        <th>Jenis Bantuan</th>
        <th>Status</th>
    </tr>

    <?php $no = 1; while ($d = mysqli_fetch_array($data)) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['nama_penerima']; ?></td>
        <td><?= $d['nik']; ?></td>
        <td><?= $d['jenis_bantuan']; ?></td>
        <td><?= $d['status']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
