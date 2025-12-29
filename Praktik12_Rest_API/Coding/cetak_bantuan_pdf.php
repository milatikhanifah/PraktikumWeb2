<?php
require 'vendor/autoload.php';
include "koneksi.php";

use Dompdf\Dompdf;

$data = mysqli_query($conn, "SELECT * FROM bantuan");

$html = '<h2>Data Bantuan Sosial</h2><table border="1" width="100%" cellpadding="5">
<tr>
<th>No</th><th>Nama</th><th>NIK</th><th>Jenis</th><th>Status</th>
</tr>';

$no=1;
while($d = mysqli_fetch_array($data)){
    $html .= "<tr>
        <td>$no</td>
        <td>{$d['nama_penerima']}</td>
        <td>{$d['nik']}</td>
        <td>{$d['jenis_bantuan']}</td>
        <td>{$d['status']}</td>
    </tr>";
    $no++;
}

$html .= '</table>';

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("data_bantuan_sosial.pdf");
?>
