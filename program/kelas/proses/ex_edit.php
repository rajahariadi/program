<?php 

$kelas = $_POST['kelas'];

include "proses/koneksi.php";

mysqli_query($koneksi, "UPDATE tb_kelas SET kelas='$kelas' WHERE id_kelas='$id_kelas'");

header('location:../../kelas.php');