<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Kelas</title>
</head>
<body>
    <?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>

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
                <select name="nm_jurusan" class="form-control" required>
                    <option value="" disabled selected>Pilih jurusan</option>
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
                <select class="form-control" id="defaultFormControlSelect" name="kelas" required>
                    <option value="" disabled <?php if (empty($ary['kelas'])) { echo 'selected'; } ?>>Pilih Kelas</option>
                    <option value="Pagi" <?php if ($ary['kelas'] == 'Pagi') { echo 'selected'; } ?>>Pagi</option>
                    <option value="Sore" <?php if ($ary['kelas'] == 'Sore') { echo 'selected'; } ?>>Sore</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=kelas" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</body>
</html>
