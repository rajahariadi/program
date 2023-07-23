<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data User
		</h3>
	</div>
	<?php
	include "proses/koneksi.php";

	// Ambil kode nim dari URL
	$kode = $_REQUEST['kode'];

	// Query untuk mendapatkan data mahasiswa berdasarkan nim
	$q = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id='$kode'");

	// Periksa apakah ada hasil dari query atau tidak
	if (mysqli_num_rows($q) > 0) {
		$ary = mysqli_fetch_array($q);
	} else {
		echo "Data mahasiswa tidak ditemukan.";
		exit; // Berhenti eksekusi script jika data tidak ditemukan
	}
	?>
	<form action="datauser/ex_edit.php" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<input type='hidden' class="form-control" name="id" value="<?php echo $ary['id']; ?>" />
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama User</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $ary['nama']; ?>" />
				</div>
			</div>
			<br>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="username" name="username"
						value="<?php echo $ary['username']; ?>" />
				</div>
			</div>
			<br>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="pass" name="password"
						value="<?php echo $ary['password']; ?>" />
					<input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
				</div>
				<script>
					function change() {
						var x = document.getElementById("pass");
						var btn = document.getElementById("mybutton");
						if (x.type === "password") {
							x.type = "text";
						} else {
							x.type = "password";
						}
					}
				</script>
			</div>
			<br>

			<<div class="form-group row">
				<label class="col-sm-2 col-form-label">Level</label>
				<div class="col-sm-4">
					<select name="level" id="level" class="form-control">
						<option value="">-- Pilih Level --</option>
						<?php
						$selectedAdmin = ($ary['level'] == "Administrator") ? "selected" : "";
						$selectedUser = ($ary['level'] == "User") ? "selected" : "";
						?>
						<option value="Administrator" <?php echo $selectedAdmin; ?>>Administrator</option>
						<option value="User" <?php echo $selectedUser; ?>>User</option>
					</select>
				</div>
		</div>

</div>
<div class="card-footer">
	<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
	<a href="?page=datauser" title="Kembali" class="btn btn-secondary">Batal</a>
</div>
</form>
</div>