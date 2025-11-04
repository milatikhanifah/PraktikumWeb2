<?php
// Konfigurasi koneksi ke database
$server   = "localhost";
$username = "root";
$password = "";
$database = "klinik";

// Membuat koneksi
$koneksi = mysqli_connect($server, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die("<h3 style='color:red;'>Koneksi database gagal: " . mysqli_connect_error() . "</h3>");
} else {
    echo "<h3 style='color:green;'>Koneksi ke database BERHASIL!</h3>";
}
?>