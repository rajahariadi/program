<?php 

$kelas = $_POST['kelas'];
include "koneksi.php";

$q = "INSERT INTO tb_kelas (kelas) VALUES('$kelas')";

mysqli_query($koneksi, $q);

// header("location:../kelas.php");