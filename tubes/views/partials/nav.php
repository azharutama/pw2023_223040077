<nav class="navbar bg-dark shadow sm navbar-dark  navbar-expand-lg fixed-top " style="background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(56, 56, 56));">
  <div class="container-fluid ms-3">
    <a class="navbar-brand <?= uriIs('index.php'); ?>" href="index.php" href="index.php"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-link fw-bold <?= uriIs('index.php'); ?>" href="index.php">Beranda</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link nav-link fw-bold <?= uriIs('profil.php'); ?>" href="profil.php ">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link fw-bold <?= uriIs('layanan.php'); ?>" href="layanan.php">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link fw-bold <?= uriIs('dasboard.php'); ?>" href="dasboard.php">Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link fw-bold <?= uriIs('laporan.php'); ?>" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link fw-bold <?= uriIs('berita.php'); ?>" href="berita.php">Berita</a>
        </li>





        <li class="nav-item ">
          <a class="nav-link nav-link  fw-bold" href="logout.php " onclick="return confirm('yakin?');">logout</a>
        </li>

      </ul>
      <form action="" method="get" class="d-flex md-0 pd-0" role="search">
        <input type="text" class="form-control me-2" name="key" id="key" autofocus placeholder="search.." autocomplete="off">
        <button class="btn btn-outline-light" type="submit" name="button-search" id="button-search">Search</button>
      </form>


    </div>
  </div>
</nav>