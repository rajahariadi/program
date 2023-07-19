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
  <?php include "komponen/menu.php" ?>
  <thead>
    <?php 
    
    include "proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_jurusan");

    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Jumlah SKS</th>
      <th scope="col">Logo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['nama_jurusan']; ?></td>
      <td><?php echo $row['jml_sks'] ;?></td>
      <td><img src="gambar_jurusan/<?php echo $row['logo'] ;?>" width="100"></td> 
      <td>
      <a href="hapus.php?kode=<?php echo $row['id_jurusan']; ?>">Hapus</a> - 
      <a href="edit.php?kode=<?php echo $row['id_jurusan'] ;?>">Edit</a>
      </td>   
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
</body>
</html>