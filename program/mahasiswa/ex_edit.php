<?php

include "proses/koneksi.php";

if (isset($_POST['Ubah'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $notelp = $_POST['notelp'];
    $alamat = $_POST['alamat'];

    // Validasi nilai variabel $jurusan
    // Misalnya, jika kolom "kode" adalah tipe data integer, pastikan $jurusan adalah bilangan bulat
    // if (!is_numeric($jurusan)) {
    //     echo "Nilai jurusan harus berupa bilangan bulat.";
    //     exit;
    // }
  


    // Periksa apakah data mahasiswa dengan ID yang diberikan ada di database
    if($_FILES['foto']['name'] != "") {
      // ambil nama gambar lama
      $q = mysqli_query($koneksi,"SELECT foto FROM tb_mahasiswa WHERE id='$id'");
      $ary = mysqli_fetch_array($q);
      $gambar = $ary['foto'];
      // hapus gambar lama
      //  unlink("foto/".$gambar);
      // upload gambar baru
      $namafoto = basename($_FILES["foto"]["name"]);
      $target_file = "foto/". basename($_FILES["foto"]["name"]);
      $upload = move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
      // update nama gambar ke gambar baru
      $namafotobaru = $_FILES["foto"]["name"];
      mysqli_query($koneksi, "UPDATE tb_mahasiswa  SET foto='$namafotobaru' WHERE id='$id'");
  }
  
  

    // Perbarui data di database
    // Pastikan bahwa "$jurusan" adalah nilai yang sesuai dengan tipe data kolom "kode"
    $query = "UPDATE tb_mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jeniskelamin', no_telp='$notelp', alamat='$alamat', kode=$jurusan, id_kelas=$kelas WHERE id=$id";
    mysqli_query($koneksi, $query);

    $result = mysqli_query($koneksi, $query);


    echo '<script type="text/javascript">';
    echo 'window.location.href = "index.php?page=mahasiswa";';
    echo '</script>';
}
