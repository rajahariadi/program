<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form action="proses/ex_jurusan.php" method="POST" enctype="multipart/form-data">
  <?php include "komponen/menu.php" ?>
  <h5 class="card-header">INPUT JURUSAN</h5>
    <div class="card-body">
    <div class="mb-3 row">
      <label for="html5-text-input" class="col-md-2 col-form-label">Nama Jurusan</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" placeholder="Masukkan Nama Jurusan"id="html5-text-input">
        </div>                               
    </div>

    <div class="mb-3 row">
      <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah SKS</label>
        <div class="col-md-10">
          <input class="form-control" type="text" value="" placeholder="Masukkan Jumlah SKS"id="html5-text-input">
        </div>                               
    </div>

    <div class="mb-3 row">
      <label for="formFile" class="form-label">Logo Jurusan</label>
        <input class="form-control" type="file" id="formFile">
    </div>

    <button class="btn btn-outline-primary" type="button" id="button-addon1">Input</button>

    </div>
</form>
</body>
</html>
