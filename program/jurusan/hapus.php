<?php 
$id_jurusan = $_REQUEST['id_jurusan'];

include "proses/koneksi.php";

mysqli_query($koneksi, "DELETE FROM tb_jurusan WHERE id_jurusan ='$id_jurusan'");

header("location:index.php?page=jurusan/jurusan");