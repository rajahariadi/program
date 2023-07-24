<?php
// if (isset($_POST['mhsw'])){

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$jeniskelamin = $_POST['jeniskelamin'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];

$namafile = basename($_FILES['foto']['name']);
$target_file = "foto/" . basename($_FILES["foto"]["name"]);

$upload = move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

include "proses/koneksi.php";

$q = "INSERT INTO tb_mahasiswa (nim, nama, jenis_kelamin, no_telp, alamat, foto, kode, id_kelas) VALUES ('$nim','$nama','$jeniskelamin','$notelp', '$alamat','$namafile','$jurusan','$kelas')";


mysqli_query($koneksi, $q);

header("location:../index.php?page=mahasiswa");
ob_end_flush();


?>