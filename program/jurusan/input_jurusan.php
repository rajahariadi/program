<?php 
include "proses/koneksi.php";

// Ambil data jenjang dari tabel tb_jenjang
$query_jenjang = "SELECT * FROM tb_jenjang";
$query_akre = "SELECT * FROM tb_akreditasi";
$result_jenjang = mysqli_query($koneksi, $query_jenjang);
$result_akre = mysqli_query($koneksi, $query_akre);
 ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Jurusan
        </h3>
    </div>
    <form action="jurusan/ex_jurusan.php" method="POST" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Jurusan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="jurusan" placeholder="Nama jurusan"
                        required/>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sarana & Prasarana</label>
                <div class="col-sm-6">
                    <textarea type="text" class="form-control" id="" name="sarpras" placeholder="Sarana dan Prasarana"></textarea>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Akreditasi</label>
                <div class="col-sm-4">
                  <select name="akre" id="akre" class="form-control" required>
                <?php
                // Tampilkan data akreditasi dalam pilihan dropdown
                while ($row = mysqli_fetch_assoc($result_akre)) {
                    echo "<option value='" . $row['id_akre'] . "'>" . $row['nm_akre'] . "</option>";
                }
                ?>
                 </select>  
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenjang</label>
                <div class="col-sm-4">
                <select name="jenjang" id="jenjang" class="form-control" required>
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
            <input type="submit" name="input" value="Simpan" class="btn btn-info">
            <a href="?page=jurusan" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>