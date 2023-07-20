<?php

$jurusan = $_POST['nm_jurusan'];
$sks = $_POST['jm_sks'];
$jenjang = $_POST['jj'];

include "proses/koneksi.php";

$q = "INSERT INTO jurusan (nm_jurusan,jm_sks,jj) VALUES('$jurusan','$sks','$jenjang')";

mysqli_query($koneksi, $q);
 echo "Data Berhasil Di Tambahkan";
 echo '<br>';
 echo '<a href="index.php?page=jurusan"><button class="btn btn-outline-primary" type="submit" name="input" id="button-addon1">Kembali</button></a>';

?>
