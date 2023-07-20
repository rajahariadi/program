<?php 

$kelas = $_POST['kelas'];

include "koneksi.php";

$q = "INSERT INTO tb_kelas (kelas) VALUES('$kelas')";

mysqli_query($koneksi, $q);
 echo "Data Berhasil Di Tambahkan";
 echo '<br>';
 echo '<a href="index.php?page=kelas"><button>Kembali</button></a>';