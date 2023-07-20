<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
</head>

<body>

  <a href="../index.php?page=mahasiswa">Data</a> |
  <a href="../index.php?page=mahasiswa/input_mahasiswa">Input</a>

  <?php 
  include "proses/koneksi.php";

  // Ambil kode nim dari URL
  $kode = $_REQUEST['kode'];

  // Query untuk mendapatkan data mahasiswa berdasarkan nim
  $q = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$kode'");

  // Periksa apakah ada hasil dari query atau tidak
  if (mysqli_num_rows($q) > 0) {
    $ary = mysqli_fetch_array($q);
  } else {
    echo "Data mahasiswa tidak ditemukan.";
    exit; // Berhenti eksekusi script jika data tidak ditemukan
  }
  ?>

  <form action="index.php?page=mahasiswa/ex_edit" method="POST" enctype="multipart/form-data">
    <div>
      <input type="hidden" value="<?php echo $ary['id'] ?>" name="id">
      <label for="nim" class="form-label">Nim :</label>
      <input type="text" name="nim" value="<?php echo $ary['nim'] ?>" class="form-control" placeholder="Nim" aria-describedby="defaultFormControlHelp">
    </div>
    <div>
      <label for="nama" class="form-label">Nama :</label>
      <input type="text" name="nama" value="<?php echo $ary['nama'] ?>" class="form-control" placeholder="Nama Mahasiswa" aria-describedby="defaultFormControlHelp">
    </div>
    <div class="col-md">
      <label for="jeniskelamin" name="jeniskelamin" value="<?php echo $ary['jenis_kelamin'] ?>" class="form-label">Jenis Kelamin :</label>
      <div class="form-check mt-3">
        <input name="jeniskelamin" value="lakilaki" class="form-check-input" type="radio" id="defaultRadio1" <?php echo ($ary['jenis_kelamin'] == 'lakilaki') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="defaultRadio1"> Laki-Laki </label>
      </div>
      <div class="form-check">
        <input name="jeniskelamin" value="perempuan" class="form-check-input" type="radio" id="defaultRadio2" <?php echo ($ary['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="defaultRadio2"> Perempuan </label>
      </div>
    </div>

    <div>
      <label for="defaultFormControlInput" class="form-label">No Telp :</label>
      <input type="text" class="form-control" name="notelp" value="<?php echo $ary['no_telp'] ?>" id="defaultFormControlInput" placeholder="No Telp" aria-describedby="defaultFormControlHelp">
    </div>
    <div>
      <label for="defaultFormControlInput" class="form-label">Alamat :</label>
      <input type="text" class="form-control" name="alamat" value="<?php echo $ary['alamat'] ?>" id="defaultFormControlInput" placeholder="Alamat" aria-describedby="defaultFormControlHelp">
    </div>
    <div>
      <label for="defaultFormControlInput" class="form-label">Foto :</label>
      <input type="file" class="form-control" name="foto" id="defaultFormControlInput" placeholder="" aria-describedby="defaultFormControlHelp">
    </div>
   
    <div>
      <button type="submit" name="input">Input</button>
    </div>
  </form>

</body>

</html>
