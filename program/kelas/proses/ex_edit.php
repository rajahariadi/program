<?php 
include "koneksi.php";

$id_kelas = $_POST['id_kelas'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE tb_kelas SET kelas='$kelas' WHERE id_kelas='$id_kelas'");
echo "Data Berhasil Di Update";
 echo '<br>';
 echo '<a href="index.php?page=kelas"><button>Kembali</button></a>';
// header("location:../../index.php?page=kelas");
?>