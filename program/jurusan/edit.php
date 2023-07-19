<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include "komponen/menu.php" ?>

    <?php
    include "proses/koneksi.php";
    $id_jurusan = $_REQUEST['id_jurusan'];
    $q = mysqli_query($koneksi, "SELECT * FROM tb_jurusan WHERE id_jurusan='$id_jurusan'");
    $ary = mysqli_fetch_array($q);
    ?>
    
    <form action="proses/ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">Nama Jurusan</label>
        <input type="text" value="<?php echo $ary['nama_jurusan'] ?>" readonly name="nama_jurusan">
        <br>

        <label for="">Jumlah SKS</label>
        <input type="text" name="jml_sks" value="<?php echo $ary['jml_sks'] ?>">
        <br>

        <label for="">Logo</label>
        <input type="file" name="logo">
        <br><br>
        
        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html>