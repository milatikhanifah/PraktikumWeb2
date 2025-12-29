<?php
include "koneksi.php";
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM bantuan WHERE id='$id'");
header("location:tampil_bantuan.php");
?>
