<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JabarGov

    </title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body id="login">
    <!-- navbar-->
    <nav class="navbar bg-dark navbar-dark shadow sm  navbar-expand-lg fixed-top ">
  <div class="container-fluid ms-3">
    <a class="navbar-brand" href="beranda.php"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "href="beranda.php">Beranda</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="layanan.php">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dasboard.php">Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Berita
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="portal_ekonomi.php">Ekonomi</a></li>
            <li><a class="dropdown-item" href="portal_pemerintahan.php">Pemerintahan</a></li>
            <li><a class="dropdown-item" href="portal_teknologi.php">Teknologi</a></li>
            <li><a class="dropdown-item" href="portal_kesehatan.php">Kesehatan</a></li>
            <li><a class="dropdown-item" href="portal_sosial.php">Sosial</a></li>
            <li><a class="dropdown-item" href="portal_pendidikan.php">Pendidikan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!--end-->

    <!--form-->
    <form>
    <div class="display-5 text-center fw-bolder" style="margin-top:200px;">Sign Up!</div>
      <div class="mb-3" style="margin-top: 50px;">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Masukan Email yang akan anda daftarkan</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Daftar</button>
    </form>

    
  <!--footer-->
     <div class=" mt-3 pt-3 bottom-0 fixed-bottom" style="height:70px; background-color:#212121;">
    <footer class="text-center">
    <p class="text-light">Copyright &copy; 2023<a href="https://www.instagram.com/_zhrutmzll/" class="text-light p-2 text-decoration-none">Azhar Utama </a> </p>
  </footer>
  </div>
  </div>
 <!--end-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

