
<nav class="navbar bg-dark navbar-dark shadow sm  navbar-expand-lg fixed-top ">
  <div class="container-fluid ms-3">
    <a class="navbar-brand <?= uriIs('index.php'); ?>"href="index.php" href="index.php"><img src="views/img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-link <?= uriIs('index.php'); ?>"href="index.php">Beranda</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link nav-link <?= uriIs('profil.php'); ?>" href="profil.php ">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link <?= uriIs('layanan.php'); ?>" href="layanan.php">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link <?= uriIs('dasboard.php'); ?>" href="dasboard.php">Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link <?= uriIs('laporan.php'); ?>" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= uriIs('berita.php'); ?> <?= uriIs('p_ekonomi.php'); ?> <?= uriIs('p_pemerintahan.php'); ?> <?= uriIs('p_teknologi.php'); ?>  <?= uriIs('p_kesehatan.php'); ?> <?= uriIs('p_sosial.php'); ?> <?= uriIs('p_pendidikan .php'); ?>  " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Berita
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="p_ekonomi.php">Ekonomi</a></li>
            <li><a class="dropdown-item" href="p_pemerintahan.php">Pemerintahan</a></li>
            <li><a class="dropdown-item" href="p_teknologi.php">Teknologi</a></li>
            <li><a class="dropdown-item" href="p_kesehatan.php">Kesehatan</a></li>
            <li><a class="dropdown-item" href="p_sosial.php">Sosial</a></li>
            <li><a class="dropdown-item" href="p_pendidikan.php">Pendidikan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= uriIs('login.php'); ?> <?= uriIs('daftar.php'); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Akun
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="login.php">Masuk</a></li>
            <li><a class="dropdown-item" href="daftar.php">Daftar</a></li>
           
          </ul>
        </li>
      </ul>
      <form class="d-flex md-0 pd-0" role="search" >
        <input class="form-control me-2" style="width:180px;" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

      
    </div>
  </div>
</nav>