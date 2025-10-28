<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo php + html</title>
</head>
<body>

<h2><b>Contoh Penggabungan php dan html</b></h2>

<?php
// Variabel PHP
$nama = "Milati Khanifah";
$jurusan = "Teknik Informatika";
$kampus = "Politeknik Purbaya";
$tanggal = date("d-m-Y");
?>

<!-- Bagian HTML dengan sisipan PHP -->
<p>Halo, nama saya <b><?php echo $nama; ?></b>.</p>
<p>Saya mahasiswa jurusan <b><?php echo $jurusan; ?></b> di <b><?php echo $kampus; ?></b>.</p>
<p>Hari ini tanggal <b><?php echo $tanggal; ?></b>.</p>

<hr>

<?php
// PHP juga bisa digunakan untuk membuat tabel atau daftar dinamis
$menu = array("Seblak", "Mie Jebew", "Bakso", "Wonton");
?>

<h3>Daftar Menu Favorit:</h3>
<ul>
    <?php
    foreach ($menu as $m) {
        echo "<li>$m</li>";
    }
    ?>
</ul>

</body>
</html>
