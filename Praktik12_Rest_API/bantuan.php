<?php
header("Content-Type: application/json");
include "../koneksi.php";

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET") {

    $query = mysqli_query($conn, "SELECT * FROM bantuan");
    $data  = mysqli_fetch_all($query, MYSQLI_ASSOC);

    echo json_encode([
        "status" => true,
        "data"   => $data
    ]);

}

elseif ($method == "POST") {

    $input = json_decode(file_get_contents("php://input"), true);

    $nama   = $input['nama_penerima'];
    $nik    = $input['nik'];
    $jenis  = $input['jenis_bantuan'];
    $status = $input['status'];

    mysqli_query($conn, "INSERT INTO bantuan VALUES (
        '',
        '$nama',
        '$nik',
        '$jenis',
        '$status'
    )");

    echo json_encode([
        "status" => true,
        "pesan"  => "Data bantuan sosial berhasil ditambahkan"
    ]);

}

else {
    echo json_encode([
        "status" => false,
        "pesan"  => "Method tidak diizinkan"
    ]);
}
?>
