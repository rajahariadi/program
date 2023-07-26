<?php
include "proses/koneksi.php";

// Ambil data dari form

$jurusan = $_POST['jurusan'];
$sarpras = $_POST['sarpras'];
$jenjang = $_POST['jenjang'];
$akre = $_POST['akre'];

$q = "INSERT INTO jurusan (kode, nm_jurusan, sarpras, akreditasi, jj) VALUES (NULL, '$jurusan', '$sarpras', '$akre', '$jenjang')";


mysqli_query($koneksi, $q);

header("location:../index.php?page=jurusan");

?>
