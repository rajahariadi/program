<?php 
$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];
$jml_sks = $_POST['jml_sks'];
$logo = basename($_FILES["logo"]["name"]);

include "koneksi.php";
if($_FILES['logo']['name'] != "") {
    // ambil nama gambar lama
    $q = mysqli_query($koneksi,"SELECT logo FROM tb_jurusan WHERE nama_jurusan='$nama_jurusan'");
    $ary = mysqli_fetch_array($q);
    $logo = $ary['logo'];
    // hapus gambar lama
    // unlink("../gambar/".$gambar);
    // upload gambar baru
    $namagbr = basename($_FILES["logo"]["name"]);
    $target_file = "../gambar_jurusan/". basename($_FILES["logo"]["name"]);
    $upload = move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
    // update nama gambar ke gambar baru
    $namaGbrBaru = $_FILES["logo"]["name"];
    mysqli_query($koneksi, "UPDATE tb_jurusan SET logo='$namaGbrBaru' WHERE nama_jurusan='$nama_jurusan'");
}



mysqli_query($koneksi, "UPDATE barang SET nama='$nama', satuan='$stn', harga='$hrg' WHERE kode_barang='$kdBrg'");

header('location:../data.php');
