<?php
include "proses/koneksi.php";
$pesannim = "";
$pesannama = "";
$pesanjurusan = "";
$pesankelas = "";
$pesangender = "";
$pesannotelp = "";
$pesanalamat = "";
$pesanfoto = "";
$pesan = "";

if (isset($_POST['Simpan'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$gender = $_POST['jeniskelamin'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];

  if (empty($nim) && empty($nama) && empty($jurusan) && empty($kelas) && empty($gender) && empty($notelp) && empty($alamat) && empty($foto)) {
    $pesannim = "Nim harus diisi";
    $pesannama = "Nama harus diisi";
    $pesanjurusan = "Jurusan harus diisi";
    $pesankelas = "Kelas harus diisi";
    $pesangender = "Gender harus diisi";
    $pesannotelp = "No Telp harus diisi";
    $pesanalamat = "Alamat harus diisi";
    $pesanfoto = "Foto harus diisi";
  } elseif  (empty($nim) && empty($nama) && empty($jurusan)){
    $pesannim = "Nim harus diisi";
    $pesannama = "Nama harus diisi";
    $pesanjurusan = "Jurusan harus diisi";
  } elseif (empty($nama) && empty($jurusan) && empty($kelas)) {
    $pesannama = "Nama harus diisi";
    $pesanjurusan = "Jurusan harus diisi";
    $pesankelas = "Kelas harus diisi";
  } elseif (empty($jurusan) && empty($kelas) && empty($gender)) {
    $pesanjurusan = "Jurusan harus diisi";
    $pesankelas = "Kelas harus diisi";
    $pesangender = "Gender harus diisi";
  } elseif (empty($kelas) && empty($gender) && empty($notelp)) {
    $pesankelas = "Kelas harus diisi";
    $pesangender = "Gender harus diisi";
    $pesannotelp = "No Telp harus diisi";
  } elseif (empty($gender) && empty($notelp) && empty($alamat)) {
    $pesangender = "Gender harus diisi";
    $pesannotelp = "No Telp harus diisi";
    $pesanalamat = "Alamat harus diisi";
  } elseif (empty($notelp) && empty($alamat) && empty($foto)) {
    $pesannotelp = "No Telp harus diisi";
    $pesanalamat = "Alamat harus diisi";
    $pesanfoto = "Foto harus diisi";
  } elseif (empty($nim) && empty($nama)) {
    $pesannim = "Nim harus diisi";
    $pesannama = "Nama harus diisi";
  } elseif (empty($nama) && empty($jurusan)) {
    $pesannama = "Nama harus diisi";
    $pesanjurusan = "Jurusan harus diisi";
  } elseif (empty($jurusan) && empty($kelas)) {
    $pesanjurusan = "Jurusan harus diisi";
    $pesankelas = "Kelas harus diisi";
  } elseif (empty($kelas) && empty($gender)) {
    $pesankelas = "Kelas harus diisi";
    $pesangender = "Gender harus diisi";
  } elseif (empty($gender) && empty($notelp)) {
    $pesangender = "Gender harus diisi";
    $pesannotelp = "No Telp harus diisi";
  } elseif (empty($notelp) && empty($alamat)) {
    $pesannotelp = "No Telp harus diisi";
    $pesanalamat = "Alamat harus diisi";
  } elseif (empty($alamat) && empty($foto)) {
    $pesanalamat = "Alamat harus diisi";
    $pesanfoto = "Foto harus diisi";
  } elseif (empty($nim)) {
    $pesannim = "Nim harus diisi";
  } elseif (empty($nama)) {
    $pesannama = "Nama harus diisi";
  } elseif (empty($jurusan)) {
    $pesanjurusan = "Jurusan harus diisi";
  } elseif (empty($kelas)) {
    $pesankelas = "Kelas harus diisi";
  } elseif (empty($gender)) {
    $pesangender = "Gender harus diisi";
  } elseif (empty($notelp)) {
    $pesannotelp = "No Telp harus diisi";
  } elseif (empty($alamat)) {
    $pesanalamat = "Alamat harus diisi";
  } elseif (empty($foto)) {
    $pesanfoto = "Foto harus diisi";
  } else {
      // Periksa apakah nim sudah ada di database
      $check_query = "SELECT * FROM tb_mahasiswa WHERE nim = '$nim'";
      $check_result = mysqli_query($koneksi, $check_query);

      if (mysqli_num_rows($check_result) > 0) {
          $pesan = "Nim sudah ada. Silakan masukkan Nim lain."; }
      // } else {
      //     // Jika username belum ada, lakukan pendaftaran
      //     $data = "INSERT INTO tb_mahasiswa (nim, nama, jenis_kelamin, no_telp, alamat, foto, kode, id_kelas) VALUES ('$nim','$nama','$jeniskelamin','$notelp', '$alamat','$foto','$jurusan','$kelas')";
      //     $hasil = mysqli_query($koneksi, $data);
      //     echo '<script>window.location.href = "index.php?page=mahasiswa";</script>';
      //         // header("location: ../index.php?page=datauser");
      // }
  }
}
?>



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
          <input type="hidden" class="form-control" id="" name="id" placeholder="Nim" >
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nim</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="nim" placeholder="Nim" >
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" >
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-4">
          <select name="jurusan" id="jurusan" class="form-control" >
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
          <select name="kelas" id="kelas" class="form-control" >
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
          <input name="jeniskelamin" class="form-check-input" type="radio" value="LakiLaki" id="defaultRadio1">
          <label class="form-check-label" for="defaultRadio1"> Laki-Laki </label>
        </div>
        <div class="form-check">
          <input name="jeniskelamin" class="form-check-input" type="radio" value="Perempuan" id="defaultRadio2">
          <label class="form-check-label" for="defaultRadio2"> Perempuan </label>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">No Telp</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telp" >
        </div>
      </div>
      <br>
      
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" >
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-6">
          <input type="file" class="form-control" id="foto" name="foto" placeholder="" >
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