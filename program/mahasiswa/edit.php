<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Edit Data Mahasiswa
    </h3>
  </div>
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
  <form action="index.php?page=mahasiswa/ex_edit" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <input type='hidden' class="form-control" name="id" value="<?php echo $ary['id']; ?>" />
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nim</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $ary['nim']; ?>" readonly/>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $ary['nama']; ?>" />
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-4">
          <select name="jurusan" id="jurusan" class="form-control">
            <?php
            //ambil data jurusan
            $query = "SELECT * FROM jurusan ";
            $hasil = mysqli_query($koneksi, $query);
            while ($ary = mysqli_fetch_array($hasil)) {
            ?>
              <option value="<?= $ary['kode'] ?>">
                <?= $ary['nm_jurusan'] ?>
              <?php
            }
              ?>
          </select>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-4">
          <select name="kelas" id="kelas" class="form-control">
            <?php
            //ambil data dari database
            $query = "SELECT * FROM tb_kelas";
            $hasil = mysqli_query($koneksi, $query);
            while ($ary = mysqli_fetch_array($hasil)) {
            ?>
              <option value="<?php echo $ary['id_kelas'] ?>">
                <?php echo $ary['kelas'] ?>
              </option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>
      <br>

      <?php
      $q = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE id='$kode'");

      if (mysqli_num_rows($q) > 0) {
        $ary = mysqli_fetch_array($q);
      }
      ?>
      <div class="col-md">
        <label for="jeniskelamin" name="jeniskelamin" value="<?php echo $ary['id'] ?>" class="form-label">
          Genre </label>
        <div class="form-check mt-3">
          <input name="jeniskelamin" value="LakiLaki" class="form-check-input" type="radio" id="defaultRadio1" <?php echo ($ary['jenis_kelamin'] == 'LakiLaki') ? 'checked' : ''; ?>>
          <label class="form-check-label" for="defaultRadio1"> Laki-Laki </label>
        </div>
        <div class="form-check">
          <input name="jeniskelamin" value="Perempuan" class="form-check-input" type="radio" id="defaultRadio2" <?php echo ($ary['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
          <label class="form-check-label" for="defaultRadio2"> Perempuan </label>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telp</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $ary['no_telp']; ?>" required>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $ary['alamat']; ?>" required>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-6">
          <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $ary['foto']; ?>" required>
        </div>
      </div>
      <br>

    </div>
    <div class="card-footer">
      <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
      <a href="?page=mahasiswa" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>