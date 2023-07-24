<?php
include "proses/koneksi.php";
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];


mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jeniskelamin', no_telp='$notelp', alamat='$alamat' WHERE id='$id'");

header('location:index.php?page=mahasiswa');
?>