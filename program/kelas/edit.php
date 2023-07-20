<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kelas</title>
</head>
<body>
<?php
    include "proses/koneksi.php";
    $kode = $_REQUEST['kode'];
    $q = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE id_kelas='$kode'");
    $ary = mysqli_fetch_array($q);
    ?>
    
<h5>Input Data Kelas</h5>
<form action="index.php?page=kelas/proses/ex_edit" method="POST">
    <table>
        <tr>
            <td><input type="hidden" value="<?php echo $ary['id_kelas'] ?>" name="id_kelas"></td>
</tr>

        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" value="<?php echo $ary['kelas'] ?>"></td>
            <!-- <td><input type="text" name="kelas"></td> -->
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Submit" name="login"></td>
        </tr>
    </table>
</form>

</body>
</html>