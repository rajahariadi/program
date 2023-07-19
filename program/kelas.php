<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h5>Data Kelas</h5>
<!-- <a href="index.php?page=kelas/form_kelas">Tambah</a> -->
<a href="index.php?page=kelas/form_kelas"><button>Tambah</button></a>
</br>
<br>
<table>
<div class="table-responsive text-nowrap">
    <table class="table table-bordered">
        <thead>
    <tr>
        <th>kelas</th>
        <th>action</th>
    </tr>
</thead>
<?php 
    include "kelas/proses/koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas");

    while($row = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $row['kelas'] ?></td>
<td>
<div class="dropdown">
        <button type="button" class="btn p-0 dropdown-toggle hide-arrow show" data-bs-toggle="dropdown" aria-expanded="true">
        <i class="bx bx-dots-vertical-rounded"></i>
        </button>
        <div class="dropdown-menu show" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-77.6px, 27.2px, 0px);">
        <a class="dropdown-item" href="index.php?page=kelas/edit?kode=<?php echo $row['id_kelas'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
        <a class="dropdown-item" href="kelas/hapus.php?kode=<?php echo $row['id_kelas'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
        </div>
    </div>
        <!-- <a href="edit.php?kode=<?php echo $row['id_kelas'] ?>">Edit</a>
        <a href="kelas/hapus.php?kode=<?php echo $row['id_kelas'] ?>">Hapus</a>  -->
    </td>
</tr>
<?php
    }
    ?>
</table>
</body>
</html>