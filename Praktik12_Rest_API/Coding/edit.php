<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM bantuan WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<form action="simpan_edit.php" method="post">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    <input type="text" name="nama" value="<?= $d['nama_penerima']; ?>"><br><br>
    <input type="text" name="nik" value="<?= $d['nik']; ?>"><br><br>
    <input type="text" name="jenis" value="<?= $d['jenis_bantuan']; ?>"><br><br>

    <select name="status">
        <option <?= $d['status']=='Menunggu'?'selected':'' ?>>Menunggu</option>
        <option <?= $d['status']=='Disetujui'?'selected':'' ?>>Disetujui</option>
        <option <?= $d['status']=='Ditolak'?'selected':'' ?>>Ditolak</option>
    </select><br><br>

    <button type="submit">Update</button>
</form>
