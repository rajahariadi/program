<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>

  <?php 
  
  if($_SESSION['level'] == 'admin'){
    include "mahasiswa/proses/menu.php";
  }
  
?>
  <table>
    <div class="card">

      <div class="table-responsive text-nowrap">
        <table class="table">
          <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Foto</th>
            <?php
            if($_SESSION['level'] == 'admin'){
            ?>
            <th>Actions</th>
            <?php
            }
            ?>
          </tr>
          <?php
          include "mahasiswa/proses/koneksi.php";
          $data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");

          while ($row = mysqli_fetch_array($data)) {

          ?>
            <tbody class="table-border-bottom-0">
              <tr>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td><?= $row['no_telp'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                  <a href="mahasiswa/foto/<?php echo $row['foto'] ?>">Download</a></td>
                <?php
                        if($_SESSION['level'] == 'admin'){
                ?>
                  <td>
                  <a href="index.php?page=mahasiswa/edit&kode=<?= $row['id'] ?>">edit</a> |
                  <a href="mahasiswa/hapus.php?kode=<?= $row['id'] ?>">hapus</a>
                </td>
                <?php
                        }
                ?>
              </tr>
            </tbody>
          <?php
          }
          ?>
        </table>
      </div>
    </div>
  </table>
</body>

</html>
