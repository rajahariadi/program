<?php
include 'proses/koneksi.php';
$kode = $_POST['kode'];
$jurusan = $_POST['jurusan'];
$sarpras = $_POST['sarpras'];
$jenjang = $_POST['jenjang'];
$akre = $_POST['akre'];

$data = ("UPDATE jurusan SET nm_jurusan='$jurusan', sarpras='$sarpras', akreditasi='$akre', jj='$jenjang' WHERE kode='$kode'");
$hasil = mysqli_query($koneksi, $data);

header('location:../index.php?page=jurusan');
?>