<?php
include 'proses/koneksi.php';

    $kode = $_POST['kode'];
    $jurusan = $_POST['nm_jurusan'];
    $sks = $_POST['jm_sks'];
    $jenjang = $_POST['jj'];

    mysqli_query($koneksi, "UPDATE jurusan SET kode='$kode', nm_jurusan='$jurusan', jm_sks='$sks', jj='$jenjang' WHERE kode='$kode'");

echo "Data Berhasil Di Update";
echo '<br>';
echo '<a href="index.php?page=jurusan"><button class="btn btn-outline-primary" type="submit" name="input" id="button-addon1">Kembali</button></a>';
?>