<?php
require 'vendor/autoload.php';
include 'koneksi.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Ambil data dari database
$query = mysqli_query($koneksi, "SELECT * FROM penerima_bantuan");

// HTML untuk PDF
$html = '
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th {
            background-color: #1f3c88;
            color: white;
            padding: 8px;
            border: 1px solid #000;
        }
        table td {
            padding: 6px;
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>LAPORAN DATA PENERIMA BANTUAN SOSIAL<br>
DINAS SOSIAL</h2>

<table>
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Bantuan</th>
    </tr>
';

$no = 1;
while ($d = mysqli_fetch_array($query)) {
    $html .= '
    <tr>
        <td>'.$no++.'</td>
        <td>'.$d['nik'].'</td>
        <td>'.$d['nama'].'</td>
        <td>'.$d['alamat'].'</td>
        <td>'.$d['jenis_bantuan'].'</td>
    </tr>
    ';
}

$html .= '
</table>

<br><br>
<p style="text-align:right;">
    Dicetak pada: '.date("d-m-Y").'
</p>

</body>
</html>
';

// Load HTML ke Dompdf
$dompdf->loadHtml($html);

// Setting ukuran kertas
$dompdf->setPaper('A4', 'portrait');

// Render PDF
$dompdf->render();

// Output ke browser
$dompdf->stream("laporan_bantuan_sosial.pdf", array("Attachment" => false));
?>