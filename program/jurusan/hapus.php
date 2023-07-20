<?php 
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

// $q = mysqli_query($koneksi,"SELECT * FROM jurusan WHERE kode='$kode'");
// $ary = mysqli_fetch_array($q);



mysqli_query($koneksi, "DELETE FROM jurusan WHERE kode='$kode'");

header("location:../index.php?page=jurusan");