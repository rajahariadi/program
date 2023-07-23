<?php

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

include "proses/koneksi.php";

$q = "INSERT INTO tb_login ( nama, username, password, level) VALUES ('$nama','$username','$password', '$level')";

mysqli_query($koneksi, $q);
header("location:../index.php?page=datauser");
ob_end_flush();

?>