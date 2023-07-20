<?php

$jurusan = $_POST['nm_jurusan'];
$sks = $_POST['jm_sks'];
$jenjang = $_POST['jj'];

include "proses/koneksi.php";

$q = "INSERT INTO jurusan (nm_jurusan,jm_sks,jj) VALUES('$jurusan','$sks','$jenjang')";

mysqli_query($koneksi, $q);
 echo "Data Berhasil Di Tambahkan";
 echo '<br>';
 echo '<a href="index.php?page=jurusan"><button>Kembali</button></a>';




// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     $jurusan = $_POST['nm_jurusan'];
//     $sks = $_POST['jm_sks'];
//     $jenjang = $_POST['jj'];

//     include "proses/koneksi.php";

//     // Prepared statement
//     $query = "INSERT INTO jurusan (nm_jurusan, jm_sks, jj) VALUES (?, ?, ?)";
//     $stmt = $koneksi->prepare($query);

//     // Bind parameter dan eksekusi query
//     $stmt->bind_param("sss", $jurusan, $sks, $jenjang);

//     if ($stmt->execute()) {
//         // Query berhasil dijalankan, arahkan pengguna ke halaman jurusan
//         header("location:../index.php?page=jurusan");
//     } else {
//         // Query gagal dijalankan
//         echo "Gagal memasukkan data jurusan.";
//     }

//     $stmt->close();
//     $koneksi->close();
// } else {
//     echo "Permintaan tidak valid.";
// }
?>
