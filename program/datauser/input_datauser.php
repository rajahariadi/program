<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-edit"></i> Tambah Data User
        </h3>
    </div>
    <form action="datauser/ex_datauser.php" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_pengguna" name="nama" placeholder="Nama user"
                        required>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="pass" name="password">
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

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-4">
                    <select name="level" id="level" class="form-control">
                        <option>- Pilih -</option>
                        <option>Administrator</option>
                        <option>User</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="?page=datauser" title="Kembali" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>