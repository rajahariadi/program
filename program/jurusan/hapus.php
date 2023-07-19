// hapus.php

<?php
include 'proses/koneksi.php';

if (isset($_GET['id_jurusan'])) {
    $id = $_GET['id_jurusan'];
    $query = "DELETE FROM tb_jurusan WHERE id_jurusan='$id_jurusan'";
    $result = $koneksi->query($query);

    if ($result) {
        header('Location:index.php?page=jurusan/jurusan');
    } else {
        echo "Gagal menghapus data.";
    }
}
?>
