<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo Fungsi</title>
</head>
<body>

<?php
// Fungsi untuk menampilkan salam
function salam($nama) {
    return "Halo, $nama! Selamat belajar PHP.<br>";
}

// Fungsi untuk menghitung rata-rata nilai
function rataRataNilai($nilai1, $nilai2, $nilai3) {
    return ($nilai1 + $nilai2 + $nilai3) / 3;
}

// Memanggil fungsi
echo salam("Milati Khanifah");
$rata = rataRataNilai(70, 90, 80);
echo "Rata-rata nilai Anda adalah: " . $rata;
?>

</body>
</html>