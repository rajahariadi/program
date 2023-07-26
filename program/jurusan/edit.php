<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-edit"></i> Edit Data Jurusan
    </h3>
  </div>
  <?php
  include "proses/koneksi.php";
    // Ambil kode jurusan dari URL
  $kode = $_GET['kode'];
  $query_jenjang = "SELECT * FROM tb_jenjang";
  $result_jenjang = mysqli_query($koneksi, $query_jenjang);
  $query_jurusan = "SELECT * FROM jurusan WHERE kode='$kode'";

  // Query untuk mendapatkan data jurusan berdasarkan kode
  $q = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE kode='$kode'");

  // Periksa apakah ada hasil dari query atau tidak
  if (mysqli_num_rows($q) > 0) {
    $ary = mysqli_fetch_array($q);
  } else {
    echo "Data jurusan tidak ditemukan.";
    exit; // Berhenti eksekusi script jika data tidak ditemukan
  }
  ?>
  <form action="jurusan/ex_edit.php" method="post" enctype="multipart/form-data">

    <div class="card-body">
      <input type='hidden' class="form-control" name="kode" value="<?php echo $ary['kode']; ?>" />

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Jurusan</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="jurusan" value="<?php echo $ary['nm_jurusan']; ?>"/>
        </div>
      </div>
      <br>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sarana & Prasarana</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="" name="sarpras"
            value="<?php echo $ary['sarpras']; ?>"/>
        </div>
      </div>
      <br>

       <div class="form-group row">
                <label class="col-sm-2 col-form-label">Akreditasi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="akre" placeholder="Akreditasi Jurusan" value="<?php echo $ary['akreditasi']; ?>"/>
                </div>
            </div>
            <br>

      <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenjang</label>
                <div class="col-sm-4">
                <select name="jenjang" id="jenjang" class="form-control" ?>">
                <?php
                // Tampilkan data jenjang dalam pilihan dropdown
                while ($row = mysqli_fetch_assoc($result_jenjang)) {
                    echo "<option value='" . $row['id_jenjang'] . "'>" . $row['nm_jenjang'] . "</option>";
                }
                ?>
                 </select>
                </div>
            </div>
            <br>


</div>
<div class="card-footer">
  <input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
  <a href="?page=jurusan" title="Kembali" class="btn btn-secondary">Batal</a>
</div>
</form>
</div>