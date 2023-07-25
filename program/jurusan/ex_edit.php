<?php
include 'proses/koneksi.php';
$jurusan = $_POST['nm_jurusan'];
$sarpras = $_POST['sarpras'];
$jenjang = $_POST['jj'];
$akre = $_POST['akreditasi'];

    mysqli_query($koneksi, "UPDATE jurusan SET nm_jurusan='$jurusan', sarpras ='$sarpras', jj='$jenjang', akreditasi = '$akre' WHERE kode='$kode'");

echo "Data Berhasil Di Update";
echo '<br>';
echo '<a href="index.php?page=jurusan"><button class="btn btn-outline-primary" type="submit" name="input" id="button-addon1">Kembali</button></a>';
?>