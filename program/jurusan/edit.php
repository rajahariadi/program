// edit.php

<?php
include 'proses/koneksi.php';

if (isset($_GET['id_jurusan'])) {
    $id = $_GET['id_jurusan'];
    $query = "SELECT * FROM tb_jurusan WHERE id_jurusan='$id_jurusan'";
    $result = $koneksi->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
    } else {
        die("Data tidak ditemukan.");
    }
} else {
    die("ID tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Jurusan</title>
</head>

<body>
    <h1>Edit Jurusan</h1>
    <form method="POST" action="ex_edit.php">
        <input type="hidden" name="id_jurusan" value="<?php echo $row['id_jurusan']; ?>">
        <label>Nama Jurusan:</label>
        <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>"><br>
        <label>Jumlah SKS:</label>
        <input type="text" name="sks" value="<?php echo $row['sks']; ?>"><br>
        <label>Jenjang:</label>
        <textarea name="jenjang"><?php echo $row['jenjang']; ?></textarea><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
