<?php 
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];
$jml_sks = $_POST['jml_sks'];
$logo = basename($_FILES["logo"]["name"]);
$target_file = "../gambar_jurusan/". basename($_FILES["logo"]["name"]);

$upload = move_uploaded_file($_FILES["gbr"]["tmp_name"], $target_file);

include "koneksi.php";

$q = "INSERT INTO tb_jurusan (nama_jurusan, jml_sks, logo) VALUES('$nama_jurusan','$jml_sks','$logo')";

mysqli_query($koneksi, $q);

header("location:../jurusan.php");