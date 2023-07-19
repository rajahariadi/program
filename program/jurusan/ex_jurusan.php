<?php 
$jurusan = $_POST['jurusan'];
$sks = $_POST['sks'];
$namalogo = basename($_FILES["logo"]["name"]);
$target_file = "../gambar_jurusan/". basename($_FILES["logo"]["name"]);

$upload = move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);

include "proses/koneksi.php";

$q = "INSERT INTO tb_jurusan (nama_jurusan, jml_sks, logo) VALUES('$jurusan','$sks','$namalogo')";

mysqli_query($koneksi, $q);

header("location:index.php?page=jurusan/data_jurusan");
?>