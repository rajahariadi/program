<?php

$kelas = $_POST['kelas'];
$nm_jurusan = $_POST['nm_jurusan'];

include "koneksi.php";

$q = "INSERT INTO tb_kelas (kelas, nm_jurusan) VALUES ('$kelas', '$nm_jurusan')";

if (mysqli_query($koneksi, $q)) {
    echo '<meta http-equiv="refresh" content="3;url=index.php?page=kelas">';
    echo 'Data added successfully. Redirecting... Please wait.';
} else {
    echo 'Error: ' . mysqli_error($koneksi);
}
?>
