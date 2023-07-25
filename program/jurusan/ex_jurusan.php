<?php
include "proses/koneksi.php";

// Ambil data dari form
$jurusan = $_POST['nm_jurusan'];
$sarpras = $_POST['sarpras'];
$jenjang = $_POST['jenjang'];
$akre = $_POST['akreditasi'];

$q = "INSERT INTO jurusan (nm_jurusan, sarpras, akreditasi, jj) VALUES ('$jurusan','$sarpras','$akre', '$jenjang')";


mysqli_query($koneksi, $q);

header("location:../index.php?page=jurusan");

?>
