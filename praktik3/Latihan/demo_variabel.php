<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo variabel</title>
</head>
<body>

<?php
// Deklarasi variabel
$nama = "Milati Khanifah";
$umur = 20;
$kampus = "Politeknik Purbaya";
$prodi = "Teknik Informatika";

// Operasi sederhana
$tahun_lahir = 2005 - $umur;
$pesan = "Halo, nama saya $nama. Saya kuliah di $kampus jurusan $prodi.";

// Menampilkan isi variabel
echo "<b>Nama:</b> $nama <br>";
echo "<b>Umur:</b> $umur tahun <br>";
echo "<b>Kampus:</b> $kampus <br>";
echo "<b>Program Studi:</b> $prodi <br>";
echo "<b>Tahun Lahir (perkiraan):</b> $tahun_lahir <br><br>";

// Menampilkan gabungan string
echo "<b>Pesan Lengkap:</b><br>$pesan";
?>

</body>
</html>
