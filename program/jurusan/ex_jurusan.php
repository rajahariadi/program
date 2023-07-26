<?php

$jurusan = $_POST['nm_jurusan'];
$sarpras = $_POST['sarpras'];
$jenjang = $_POST['jj'];
$akre = $_POST['akreditasi'];

include "proses/koneksi.php";

$q = "INSERT INTO jurusan (kode, nm_jurusan, sarpras, akreditasi, jj) VALUES ('$jurusan','$sarpras','$akre', '$jenjang')";

mysqli_query($koneksi, $q);
header("location:../index.php?page=jurusan");
ob_end_flush();

?>
