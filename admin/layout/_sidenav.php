<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.php">
        <img src="../assets/img/logo.png" alt="logo" width="30">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.php">EF</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="../"><i class="fas fa-fire"></i> <span>Home</span></a></li>
      <li class="menu-header">Menu Utama</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Profil</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="../profil/index.php">Profil</a></li>
          <li><a class="nav-link" href="../guru/index.php">Data Guru</a></li>
          <li><a class="nav-link" href="../siswa/index.php">Data Siswa</a></li>
          <li><a class="nav-link" href="../kelas/index.php">Data Kelas</a></li>
        </ul>
      </li>
      <li><a class="nav-link" href="../fasilitas/index.php"><i class="fas fa-book"></i> <span>Fasilitas</span></a></li>
      <li><a class="nav-link" href="../berita/index.php"><i class="fas fa-book"></i> <span>Berita</span></a></li>
      <li><a class="nav-link" href="../agenda/index.php"><i class="fas fa-book"></i> <span>Agenda</span></a></li>
      <li><a class="nav-link" href="../prestasi/index.php"><i class="fas fa-book"></i> <span>Prestasi</span></a></li>
      <li><a class="nav-link" href="../postingan/index.php"><i class="fas fa-book"></i> <span>Postingan</span></a></li>

      <?php if ($_SESSION['login']['role'] == 'admin'){ ?>
      <li><a class="nav-link" href="../user/index.php"><i class="fas fa-users"></i> <span>User</span></a></li>
      <?php } ?>
    </ul>
  </aside>
</div>