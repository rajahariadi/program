<?php 
include "proses/koneksi.php";
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];

// Uncommend kode di bawah ini jika Anda ingin mengunggah foto dan perlu merubah data foto pada tabel
/*
if ($_FILES['foto']['name'] != "") {
    $q = mysqli_query($koneksi,"SELECT foto FROM tb_mahasiswa WHERE id='$id'");
    $ary = mysqli_fetch_array($q);
    $foto = $ary['foto'];
    
    unlink("foto/".$foto);
 
    $namafile = basename ($_FILES['foto']['name']);
    $target_file = "foto/" . basename($_FILES["foto"]["name"]);
    $upload = move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

    $fotobaru = $_FILES["foto"]["name"];
    mysqli_query($koneksi, "UPDATE tb_mahasiswa SET foto='$fotobaru' WHERE id='$id'");
}
*/


mysqli_query($koneksi, "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jeniskelamin', no_telp='$notelp', alamat='$alamat' WHERE id='$id'");

header('location:index.php?page=mahasiswa');
?>
