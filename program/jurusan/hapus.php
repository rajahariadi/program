<?php 
$kode = $_REQUEST['kode'];

include "proses/koneksi.php";

mysqli_query($koneksi, "DELETE FROM jurusan WHERE kode ='$kode'");

header("location:../index.php?page=jurusan");