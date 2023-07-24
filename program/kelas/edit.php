<div class="card card-primary">
    <div class="card-header">
    <?php

    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>


</form>
    <h3 class="card-title"><i class="fa fa-edit"></i> Update Data Kelas</h3>
    <form action="index.php?page=kelas/proses/ex_edit" method="POST" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $ary['id_kelas'] ?>" name="id_kelas">

        <?php
        $query = "SELECT nm_jurusan FROM jurusan";
        $result = mysqli_query($koneksi, $query);
        $data_array = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data_array[] = $row;
        }
        ?>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-6">
                <select name="nm_jurusan" class="form-control">
                    <?php
                    $sql = "SELECT nm_jurusan FROM jurusan";
                    foreach ($data_array as $data) {
                        $nm_jurusan = $data['nm_jurusan'];
                        $selected = ($nm_jurusan == $ary['nm_jurusan']) ? 'selected' : '';
                        echo "<option value='$nm_jurusan' $selected>$nm_jurusan</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
<br>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-6">
                <input type="text" name="kelas" class="form-control" id="defaultFormControlInput" aria-describedbySS="defaultFormControlHelp" value="<?php echo $ary['kelas'] ?>">
            </div>
        </div>

        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=kelas" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</body>



    </div>
</div>
