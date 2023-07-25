<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Jurusan
        </h3>
    </div>
    <form action="jurusan/ex_jurusan.php" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Jurusan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="jurusan" placeholder="Nama jurusan"
                        required>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sarana & Prasarana</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="sarpras" placeholder="Sarana dan Prasarana">
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenjang</label>
                <div class="col-sm-6">
                   <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="jenjang">
                          <option selected="">Pilih Jenjang</option>
                          <?php 
                          $query = "SELECT * FROM tb_jenjang";
                          $hasil = mysqli_query($koneksi, $query);
                          while ($row = mysqli_fetch_array($hasil)){
                            ?>
                            <option value="<?= $row['kode']?>">
                              <?= $row['nama_jenjang'] ?>
                            </option>
                            <?php
                          }
                           ?>

                        </select>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Akreditasi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="" name="akre" placeholder="Akreditasi Jurusan"
                        required>
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