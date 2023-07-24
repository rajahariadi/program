<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-table"></i> Data Jurusan
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="index.php?page=jurusan/input_jurusan" class="btn btn-primary">
                    <i class="fa fa-edit"></i> Tambah Data Jurusan</a>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jurusan</th>
                        <th>Sarana dan Prasarana</th>
                        <th>Jenjang</th>
                        <th>Akreditasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "jurusan/proses/koneksi.php";
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM jurusan");
                    while ($row = mysqli_fetch_array($data)) {
                        ?>

                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $row['nm_jurusan'] ?>
                            </td>
                            <td>
                                <?php echo $row['sarpras'] ?>
                            </td>
                            <td>
                                <?php echo $row['jj'] ?>
                            </td>
                            <td>
                                <?php echo $row['akreditasi'] ?>
                            </td>
                            <td>
                                <a href="index.php?page=jurusan/edit&kode=<?php echo $row['kode'] ?>" title="Ubah"
                                    class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="jurusan/hapus.php?kode=<?php echo $row['kode'] ?>""
                                    onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus"
                                    class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->