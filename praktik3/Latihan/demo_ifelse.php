<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo if else</title>
</head>
<body>

<?php
$nilai = 82;
$kategori = "";
$keterangan = "";

// Seleksi kondisi menggunakan if elseif else
if ($nilai >= 90) {
    $kategori = "A";
    $keterangan = "Sangat Baik";
} elseif ($nilai >= 75) {
    $kategori = "B";
    $keterangan = "Baik";
} elseif ($nilai >= 60) {
    $kategori = "C";
    $keterangan = "Cukup";
} elseif ($nilai >= 45) {
    $kategori = "D";
    $keterangan = "Kurang";
} else {
    $kategori = "E";
    $keterangan = "Gagal";
}

// Menampilkan hasil
echo "Nilai Anda: $nilai <br>";
echo "Kategori: $kategori <br>";
echo "Keterangan: $keterangan";
?>

</body>
</html>
