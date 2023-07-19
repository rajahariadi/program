<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jurusan</title>
</head>
<body>
  </div>
<table class="table">
  <?php include "jurusan/komponen/menu.php" ?>
  <thead>
    <?php 

    include "jurusan/proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");

    ?>
    <tr>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Jumlah SKS</th>
      <th scope="col">Logo</th>
      <?php 
            if($_SESSION['level'] == 'admin') {
            ?>
      <th scope="col">Action</th>
      <?php
            }
      ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
       while($row = mysqli_fetch_array($data)){
      ?>
      <td><?php echo $row['nama_jurusan']; ?></td>
      <td><?php echo $row['jml_sks'] ;?></td>
      <td><img src="gambar_jurusan/<?php echo $row['logo'] ;?>" width="100"></td> 
      <?php 
            if($_SESSION['level'] == 'admin') {
            ?>
      <td>
      <a href="hapus.php?kode=<?php echo $row['id_jurusan']; ?>">Hapus</a> - 
      <a href="jurusan/edit.php?kode=<?php echo $row['id_jurusan'] ;?>">Edit</a>
      </td>
      <?php
            }
      ?>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
</body>
</html>