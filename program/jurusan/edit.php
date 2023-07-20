<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Data Jurusan</title>
</head>
<body>
    <?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE kode='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>

  <h5 class="card-header">INPUT JURUSAN</h5>
  <form action="index.php?page=jurusan/ex_edit" method="POST">
    <input type="hidden" value="<?php echo $ary['kode'] ?>" name="kode">
    <div class="card-body">
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Nama Jurusan</label>
          <div class="col-md-10">
            <input class="form-control" type="text" value="" name="nm_jurusan" placeholder="Masukkan Nama Jurusan" id="html5-text-input">
          </div>                               
      </div>

      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah SKS</label>
          <div class="col-md-10">
            <input class="form-control" type="text" value="" name="jm_sks" placeholder="Masukkan Jumlah SKS" id="html5-text-input">
          </div>                               
      </div>

      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Jenjang</label>
          <div class="col-md-10">
            <input class="form-control" type="text" value="" name="jj" placeholder="Masukkan Jenjang Pendidikan" id="html5-text-input">
          </div>                               
      </div>

      <!-- Tidak perlu input untuk kolom id_jurusan -->

      <!-- Berikan name pada tombol agar dapat dikenali saat form di-submit -->
      <button type="submit" name="input">Input</button>
    </div>
</form>
</body>
</html>



<!-- <?php include "proses/menu.php" ?>
<?php include "proses/koneksi.php";
    $kode = isset($_GET['kode']); 
    $q = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE kode ='$kode'");
        $ary = mysqli_fetch_array($q);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex_edit.php" method="POST" enctype="multipart/form-data">

        <label for="">Nama Jurusan</label>
        <input type="text" name="jurusan" value="<?php echo isset($ary['nm_jurusan']) ? $ary['nm_jurusan'] : ''; ?>">
        <br>

        <label for="">Jumlah SKS</label>
        <input type="text" name="sks" value="<?php echo isset($ary['jm_sks']) ? $ary['jm_sks'] : ''; ?>">
        <br>

        <label for="">Jenjang</label>
        <input type="text" name="jenjang" value="<?php echo isset($ary['jj']) ? $ary['jj'] : ''; ?>">
        <br>

        <button type="submit" name="btn-simpan">Simpan</button>

    </form>

</body>
</html> -->