<?php
include 'proses/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jurusan = $_POST['jurusan'];
    $sks = $_POST['sks'];
    $jenjang = $_POST['jenjang'];

    $query = "UPDATE tb_jurusan SET jurusan='$jurusan', sks='$sks', jenjang='$jenjang' WHERE id_jurusan='$id_jurusan'";
    $result = $koneksi->query($query);

    if ($result) {
        header('Location:index.php?page=jurusan/jurusan');
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>
