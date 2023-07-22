<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kelas</title>
</head>

<body>
    <h5>Data Kelas</h5>
    <!-- <a href="index.php?page=kelas/form_kelas">Tambah</a> -->
    <?php

    if ($_SESSION['level'] == 'admin') {

        ?>
        <a href="index.php?page=kelas/form_kelas"><button class="btn btn-outline-primary" type="submit" name="input"
                id="button-addon1">Tambah</button></a>
        <?php
    }
    ?>
    </br>
    <br>
    <table>
        <div class="table-responsive text-nowrap">
            <table class="table ">
                <thead>
                    <tr>
                        <th>kelas</th>
                        <?php
                        if ($_SESSION['level'] == 'admin') {
                            ?>
                            <th>action</th>

                        </tr>
                        <?php
                        }
                        ?>
                </thead>
                <?php
                include "kelas/proses/koneksi.php";
                $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas");

                while ($row = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['kelas'] ?>
                        </td>
                        <td>



                            <?php

                            if ($_SESSION['level'] == 'admin') {

                                ?>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" data-bs-popper="none">
                                        <a class="dropdown-item"
                                            href="index.php?page=kelas/edit&kode=<?php echo $row['id_kelas'] ?>"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="kelas/hapus.php?kode=<?php echo $row['id_kelas'] ?>"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                    <?php
                            }
                            ?>
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