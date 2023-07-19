<?php 
$jurusan = $_POST['jurusan'];
$sks = $_POST['sks'];
$jenjang = $_POST['jenjang'];
include "proses/koneksi.php";

$q = "INSERT INTO tb_jurusan (nama_jurusan, jml_sks, jenjang) VALUES('$jurusan','$sks','$jenjang')";

mysqli_query($koneksi, $q);
header("location:index.php?page=jurusan/jurusan");
ob_end_flush();
?>