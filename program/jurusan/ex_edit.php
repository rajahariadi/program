<?php
include 'proses/koneksi.php';

    $id_jurusan = $_POST['id_jurusan'];
    $jurusan = $_POST['jurusan'];
    $sks = $_POST['sks'];
    $jenjang = $_POST['jenjang'];

    $query = "UPDATE tb_jurusan SET jurusan='$jurusan', sks='$sks', jenjang='$jenjang' WHERE id_jurusan='$id_jurusan'";
    $result = $koneksi->query($query);

    if ($result) {
        header('location:../index.php?page=jurusan');
    } else {
        echo "Gagal mengupdate data.";
    }
?>