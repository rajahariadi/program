<!DOCTYPE html>
<html lang="en">

<head>
    
</head>

<body>
    <h3 class="card-title"> <i class="fa fa-edit"></i> Input Data Kelas</h3>
    <form action="index.php?page=kelas/proses/ex_kelas" method="post" enctype="multipart/form-data">
        <div class="card-body">
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
                            echo "<option value='$nm_jurusan'>$nm_jurusan</option>";
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
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Sore">Sore</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=kelas" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</body>

</html>
