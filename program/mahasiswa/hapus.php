<?php
include "proses/koneksi.php";

$id = $_GET['kode']; // Mengambil id mahasiswa dari URL

// Periksa apakah id valid (ada di tabel tb_mahasiswa)
$q = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$id'");
if (mysqli_num_rows($q) > 0) {
    // Hapus data mahasiswa berdasarkan id
    mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id='$id'");
} else {
    // Tampilkan pesan jika id tidak ditemukan
    echo "Data mahasiswa tidak ditemukan.";
}

header('location:../index.php?page=mahasiswa');
?>