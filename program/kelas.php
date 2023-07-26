<div class="card">
    <div class="card-body">

    <h3 class="card-title"> <i class="fa fa-table"></i> Data Kelas</h3>
    <?php if ($_SESSION['level'] == 'Administrator') { ?>
        <a href="index.php?page=kelas/form_kelas" class="btn btn-primary">
            <i class="fa fa-edit"></i> Tambah Data
        </a>
    <?php } ?>
    <br><br>
    <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>jurusan</th>
                    <th>kelas</th>
                    <?php if ($_SESSION['level'] == 'Administrator') { ?>
                        <th>action</th>
                    <?php } ?>
                </tr>
            </thead>
            <?php
            include "kelas/proses/koneksi.php";
            $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
            while ($row = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $row['nm_jurusan'] ?></td>
                    <td><?php echo $row['kelas'] ?></td>
                    <td>
                        <?php if ($_SESSION['level'] == 'Administrator') { ?>
                            <a href="index.php?page=kelas/edit&kode=<?php echo $row['id_kelas'] ?>" title="Ubah"
                                class="btn btn-success btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="kelas/hapus.php?kode=<?php echo $row['id_kelas'] ?>"
                                onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus"
                                class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

            </div>
    </div>

