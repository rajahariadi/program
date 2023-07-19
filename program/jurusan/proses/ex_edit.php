<?php
include 'proses/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat' WHERE id='$id'";
    $result = $koneksi->query($query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>
