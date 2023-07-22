<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>form mahasiswa</h1>

  <?php include "proses/menu.php" ?>

  <form action="mahasiswa/ex_mahasiswa.php" method="POST" enctype="multipart/form-data">
    <div>
      <input type="hidden" name="id" id="">
      <label for="nim" class="form-label">Nim :</label>
      <input type="text" name="nim" value="" class="form-control" placeholder="Nim"
        aria-describedby="defaultFormControlHelp">
    </div>
    <div>
      <label for="nama" class="form-label">Nama :</label>
      <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa"
        aria-describedby="defaultFormControlHelp">
    </div>

    <div class="mb-3">
      <label for="defaultSelect" class="form-label">Pilih Jurusan</label>
      <select id="defaultSelect" class="form-select" name="kode">
        <option>--</option>
        <?php
        // ambil data dari database
        $query = "select * from jurusan";
        $hasil = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_array($hasil)) {
          ?>
          <option value="<?php echo $row['kode'] ?>">
            <?php echo $row['nm_jurusan'] ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <div>

      <div class="mb-3">
        <label for="defaultSelect" class="form-label">Pilih Kelas</label>
        <select id="defaultSelect" class="form-select">
          <option>--</option>
          <?php
          // ambil data dari database
          $query = "select * from tb_kelas";
          $hasil = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo $row['id_kelas'] ?>">
              <?php echo $row['kelas'] ?>
            </option>
            <?php
          }
          ?>
        </select>
      </div>

      <div class="col-md">
        <label for="jeniskelamin" name="jeniskelamin" class="form-label">Jenis Kelamin :</label>
        <div class="form-check mt-3">
          <input name="jeniskelamin" class="form-check-input" type="radio" value="lakilaki" id="defaultRadio1">
          <label class="form-check-label" for="defaultRadio1"> Laki-Laki </label>
        </div>
        <div class="form-check">
          <input name="jeniskelamin" class="form-check-input" type="radio" value="perempuan" id="defaultRadio2"
            checked="">
          <label class="form-check-label" for="defaultRadio2"> Perempuan </label>
        </div>
      </div>

      <div>
        <label for="defaultFormControlInput" class="form-label">No Telp :</label>
        <input type="text" class="form-control" name="notelp" id="defaultFormControlInput" placeholder="No Telp"
          aria-describedby="defaultFormControlHelp">
      </div>
      <div>
        <label for="defaultFormControlInput" class="form-label">Alamat :</label>
        <input type="text" class="form-control" name="alamat" id="defaultFormControlInput" placeholder="Alamat"
          aria-describedby="defaultFormControlHelp">
      </div>
      <div>
        <label for="defaultFormControlInput" class="form-label">Foto :</label>
        <input type="file" class="form-control" name="foto" id="defaultFormControlInput" placeholder=""
          aria-describedby="defaultFormControlHelp">
      </div>
      <br>
      <div class="">
        <button class="btn btn-outline-primary" type="submit" name="input" id="button-addon1">Input</button>
      </div>
  </form>
</body>


</html>