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

  <body id="laporan">
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg  navbar-dark shadow sm fixed-top " style="background-color:#212121; ">
      <div class="container">
        <a class="navbar-brand fs-2 fw-bold" href="beranda.php"><img src="img/logo5 (4) (11).png" alt=""></a>
        <div class="container-fluid">
    <form class="d-flex w-50 p-3" role="search">
      <input class="form-control me-2  type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit">Cari</button>
    </form>
  </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="beranda.php" target="self">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil.php">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="layanan.php">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dasboard.php">dasboard</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Berita
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ekonomi.php">ekonomi</a></li>
            <li><a class="dropdown-item" href="pemerintahan.php">pemerintahan</a></li>
            <li><a class="dropdown-item" href="teknologi.php">teknologi</a></li>
            <li><a class="dropdown-item" href="kesehatan.php">Kesehatan</a></li>
            <li><a class="dropdown-item" href="sosial.php">sosial</a></li>
            <li><a class="dropdown-item" href="pendidikan.php">pendidikan</a></li>
          </ul>
        </li>
        <li class="nav-item">
              <a class="nav-link active" href="laporan.php">Laporan</a>
            </li>

            
            <a class="btn btn-light ms-3 me-2" href="login.php" role="button">masuk</a>
            <a class="btn btn-outline-light" href="daftar.php" role="button">daftar</a>
            
          </ul>
        </div>
      </div>
    </nav>
    
    <!--end-->

    <!--form-->
  <div class="container" style="width:auto; height:570px">
        <div class="mb-1 mt-5 pt-5">
          <div class="display-3 mt-5 ms-2 pt-5 mb-5 fw-bolder">Laporan!</div>
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Laporan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div> 
   </div> 

      

  </div>
  </div>
  <div class="mt-3 pt-3 " style="height:100px; background-color:#212121;">
    <footer class="text-center">
    <p class="text-light">created by <a href="https://www.instagram.com/_zhrutmzll/" class="text-light text-decoration-none p-2">Azhar Utama </a> </p>
  </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>