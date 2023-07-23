<?php

include "proses/koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($koneksi, "UPDATE tb_login SET nama='$nama', username='$username', password='$password', level='$level' WHERE id='$id'");
header("location:../index.php?page=datauser");
ob_end_flush();
?>