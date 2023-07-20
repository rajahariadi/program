<?php
include 'proses/koneksi.php';

    $kode = $_POST['kode'];
    $jurusan = $_POST['nm_jurusan'];
    $sks = $_POST['jm_sks'];
    $jenjang = $_POST['jj'];

    mysqli_query($koneksi, "UPDATE jurusan SET kode='$kode', nm_jurusan='$jurusan', jm_sks='$sks', jj='$jenjang' WHERE kode='$kode'");

echo "Data Berhasil Di Update";
echo '<br>';
echo '<a href="index.php?page=jurusan"><button>Kembali</button></a>';


    // $query = "UPDATE jurusan SET nm_jurusan='$jurusan', jm_sks='$sks', jj='$jenjang' WHERE kode='$kode';
    // $result = $koneksi->query($query);

    // if ($result) {
    //     header('location:../index.php?page=jurusan');
    // } else {
    //     echo "Gagal mengupdate data";
    // }
?>