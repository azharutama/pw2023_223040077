<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JAWA BARAT | <?= $nama; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <nav class="navbar  navbar-light shadow sm  navbar-expand-lg ">
    <div class="container-fluid ms-3">
      <a class="navbar-brand <?= uriIs('index.php'); ?>" href="index.php" href="index.php"><img src="img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#news'); ?>" href="admin.php">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#report'); ?>" href="admin.php">Report</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#user'); ?>" href="admin.php">User</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link nav-link" href="logout.php " onclick="return confirm('yakin?');">logout</a>
          </li>

        </ul>

        <form action="" method="get" class="cari">
          <div class="input-group mb-3 my-3">
            <input type="search" class="form-control" placeholder="search.." name="keyword" id="keyword" autofocus autocomplete="off">
            <button class="btn btn-outline-dark" type="submit" name="search-button" id="search-button">search</button>
          </div>
        </form>

      </div>
    </div>
  </nav>



  <!--form-->
  <form action="" method="post" enctype="multipart/form-data">
    <div class="container" style="width:auto; height:570px; margin-bottom:200px;">
      <div class="mb-1 mt-5 pt-5">
        <div class="display-3 mt-5 ms-2 pt-5 mb-5 fw-bolder">tambah berita</div>


        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">judul</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" placeholder="masukan judul...">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">tanggal</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal" placeholder="masukan tanggal..">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">gambar</label>
          <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar" placeholder="masukan gambar" idategambar>
        </div>

        <div class="mb-3 ">
          <label for="exampleFormControlTextarea1" class="form-label">isi</label>
          <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>



        <button class="btn btn-dark" type="submit" name="submit">Kirim</button>
      </div>
  </form>


  </div>
  </div>

  <!--footer-->
  <div class="pt-3 bottom-0 bg-light" style="height:70px;">
    <footer class="text-center">
      <p class="text-dark">Copyright &copy; 2023<a href="https://www.instagram.com/_zhrutmzll/" class="text-dark p-2 text-decoration-none">Azhar Utama </a> </p>
    </footer>
  </div>
  </div>
  <!--end-->
  </div>
  </div>
  </div>
  </div>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>


</html>