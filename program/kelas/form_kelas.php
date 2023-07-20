<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Kelas</title>
</head>
<body>
<h5>Input Data Kelas</h5>
<form action="index.php?page=kelas/proses/ex_kelas" method="POST">
    <table>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input name="kelas" type="text" class="form-control" id="defaultFormControlInput" placeholder="Masukkan Nama Kelas" aria-describedby="defaultFormControlHelp"></td>
            <!-- <td><input type="text" name="kelas"></td> -->
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input class="btn btn-outline-primary" type="submit" name="login" id="button-addon1"></td>
        </tr>
    </table>
</form>

</body>
</html>