<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Tambah Data Mahasiswa
    </h3>
  </div>
  <form action="mahasiswa/ex_mahasiswa.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
    <div class="form-group row">
        <div class="col-sm-6">
          <input type="hidden" class="form-control" id="nama_pengguna" name="id" placeholder="Nim" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nim</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama_pengguna" name="nim" placeholder="Nim" required>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa">
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-4">
          <select name="jurusan" id="jurusan" class="form-control">
            <option>- Pilih -</option>
            <?php 
            //ambil data jurusan
            $query = "SELECT * FROM jurusan";
            $hasil = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($hasil)){
              ?>
              <option value = "<?= $row['kode']?>">
              <?= $row['nm_jurusan'] ?>
              </option>
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
            <option>- Pilih -</option>
            <?php
            //ambil data dari database
            $query = "SELECT * FROM tb_kelas";
            $hasil = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($hasil)){
              ?>
              <option value="<?php echo $row['id_kelas'] ?>">
                <?php echo $row['kelas'] ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>
      </div>
      <br>

      <div class="col-md">
        <label for="jeniskelamin" name="jeniskelamin" class="form-label">Jenis Kelamin </label>
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
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telp</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telp" required>
        </div>
      </div>
      <br>
      
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="No Telp" required>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-6">
          <input type="file" class="form-control" id="foto" name="foto" placeholder="" required>
        </div>
      </div>
      <br>


    </div>
    <div class="card-footer">
      <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
      <a href="?page=mahasiswa" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>