<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.php?page=welcome" class="app-brand-link">
      <img src="assets/img/stt/logo.png" alt="" width="50px">
      <span style="font-size: 25px;" class=" demo menu-text fw-bolder ms-2">STT Dumai</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  <?php include "koneksi.php" ?>
  <li style="margin-left: 30px;" class=" small text-uppercase"><span class="menu-header-text">welcome
      <?php
      $nama = $_SESSION['username'];
      $query = "SELECT nama FROM tb_login WHERE username = '$nama'";
      $result = mysqli_query($koneksi, $query);
      $data = mysqli_fetch_assoc($result);
      echo $data['nama'];
      ?>

    </span></li>
  <div class="menu-inner-shadow"></div>
  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Dashboard</span></li>



    <li class="menu-item active">
      <a href="index.php?page=jurusan" class="menu-link">
        <div data-i18n="Analytics">Jurusan</div>
      </a>
    </li>

    <li class="menu-item active">
      <a href="index.php?page=kelas" class="menu-link">
        <div data-i18n="Analytics">Kelas</div>
      </a>
    </li>

    <li class="menu-item active">
      <a href="index.php?page=mahasiswa" class="menu-link">
        <div data-i18n="Analytics">Data Mahasiswa</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Settings</span></li>

    <?php
    if ($_SESSION['level'] == 'admin') {
      ?>
      <li class="menu-item active">
        <a href="index.php?page=datauser" class="menu-link">
          <div data-i18n="Analytics">Data User</div>
        </a>
      </li>
    <?php } ?>
    <li class="menu-item active">
      <a href="component/logout.php" class="menu-link">
        <div data-i18n="Analytics">Logout</div>
      </a>
    </li>
  </ul>

</aside>