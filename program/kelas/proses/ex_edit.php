<?php 

$id_kelas = $_POST['id_kelas'];
$kelas = $_POST['kelas'];
$nm_jurusan = $_POST['nm_jurusan'];

include "koneksi.php";
$q = "UPDATE tb_kelas SET kelas='$kelas', nm_jurusan='$nm_jurusan' WHERE id_kelas='$id_kelas'";

if (mysqli_query($koneksi, $q)) {
    echo '<meta http-equiv="refresh" content="3;url=index.php?page=kelas">';
    echo 'Update Data successfully. Redirecting... Please wait.';
} else {
    echo 'Error: ' . mysqli_error($koneksi);
}

?>
