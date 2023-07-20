<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>

<body>
  <h1>Data Jurusan</h1>

  <?php 
  
  if($_SESSION['level'] == 'admin'){
    include "jurusan/proses/menu.php";
  }
  
?>
  

  <table>
    <div class="card">

      <div class="table-responsive text-nowrap">
        <table class="table">
          <tr>
            <th>NamaJurusan</th>
            <th>Jumlah SKS</th>
            <th>Jenjang</th>
            <?php
            if($_SESSION['level'] == 'admin'){
            ?>
            <th>Action</th>
            <?php
            }
            ?>
          </tr>
          <?php
          include "jurusan/proses/koneksi.php";
          $data = mysqli_query($koneksi, "SELECT * FROM jurusan");

          while ($row = mysqli_fetch_array($data)) {

          ?>
            <tbody class="table-border-bottom-0">
              <tr>
                <td><?= $row['nm_jurusan'] ?></td>
                <td><?= $row['jm_sks'] ?></td>
                <td><?= $row['jj'] ?></td>
                <?php
              if($_SESSION['level'] == 'admin'){

              
            ?>
                <td>
                  <a href="index.php?page=jurusan/edit&kode=<?php echo $row['kode']?>">Edit</a> |
                  <a href="jurusan/hapus.php?kode=<?php echo $row['kode'] ?>">Hapus</a>
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

</body>

</html>