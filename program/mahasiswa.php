<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">
      <i class="fa fa-table"></i> Data Mahasiswa
    </h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="table-responsive">
      <div>
        <a href="index.php?page=mahasiswa/input_mahasiswa" class="btn btn-primary">
          <i class="fa fa-edit"></i> Tambah Data</a>
      </div>
      <br>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include "mahasiswa/proses/koneksi.php";
          $data = mysqli_query($koneksi, "SELECT a.id, a.nim, a.nama, b.nm_jurusan, c.kelas, a.jenis_kelamin, a.no_telp, a.alamat, a.foto
          FROM tb_mahasiswa a, jurusan b, tb_kelas c WHERE b.kode = a.kode AND a.id_kelas = c.id_kelas");

          while ($row = mysqli_fetch_array($data)) {

          ?>

            <tr>
              <td>
                <?php echo $row['nim'] ?>
              </td>
              <td>
                <?php echo $row['nama'] ?>
              </td>
              <td>
                <?php echo $row['nm_jurusan'] ?>
              </td>
              <td>
                <?php echo $row['kelas'] ?>
              </td>
              <td>
                <?php echo $row['jenis_kelamin'] ?>
              </td>
              <td>
                <?php echo $row['no_telp'] ?>
              </td>
              <td>
                <?php echo $row['alamat'] ?>
              </td>
              <td>
                <a href="mahasiswa/foto/<?php echo $row['foto'] ?>">Download</a>
              </td>
              <td>
                <a href="index.php?page=mahasiswa/edit&kode=<?php echo $row['id'] ?>" title="Ubah" class="btn btn-success btn-sm">
                  <i class="fa fa-edit"></i>
                </a>
                <a href="mahasiswa/hapus.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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