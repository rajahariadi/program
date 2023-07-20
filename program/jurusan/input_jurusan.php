<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Input Jurusan</title>
</head>
<body>
<form action="index.php?page=jurusan/ex_jurusan" method="POST">
  <h5 class="card-header">INPUT JURUSAN</h5>
    <div class="card-body">
      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Nama Jurusan</label>
          <div class="col-md-10">
            <input class="form-control" type="text" value="" name="nm_jurusan" placeholder="Masukkan Nama Jurusan" id="html5-text-input">
          </div>                               
      </div>

      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah SKS</label>
          <div class="col-md-10">
            <input class="form-control" type="text" value="" name="jm_sks" placeholder="Masukkan Jumlah SKS" id="html5-text-input">
          </div>                               
      </div>

      <div class="mb-3 row">
        <label for="html5-text-input" class="col-md-2 col-form-label">Jenjang</label>
          <div class="col-md-10">
            <input class="form-control" type="text" value="" name="jj" placeholder="Masukkan Jenjang Pendidikan" id="html5-text-input">
          </div>                               
      </div>

      <!-- Tidak perlu input untuk kolom id_jurusan -->

      <!-- Berikan name pada tombol agar dapat dikenali saat form di-submit -->
      <button type="submit" name="input">Input</button>
    </div>
</form>
</body>
</html>
