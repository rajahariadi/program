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
      <tr>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Jumlah SKS</th>
      <th scope="col">Jenjang</th>
      <th scope="col">Action</th>
    </tr>
  <?php include "komponen/menu.php" ?>
    <?php 
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");

    while($row = mysqli_fetch_array($data)){
    ?>
  <tbody>
    <tr>
      <td><?php echo $row['nama_jurusan'];?></td>
      <td><?php echo $row['jml_sks'] ;?></td>
      <td><?php echo $row['jenjang'] ;?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id_jurusan']; ?>">Edit</a>
        <a href="jurusan/hapus.php?id=<?php echo $row['id_jurusan']; ?>">Hapus</a>
      </td>  
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
</body>
</html>