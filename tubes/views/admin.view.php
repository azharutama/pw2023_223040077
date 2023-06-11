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
            <a class="nav-link nav-link <?= uriIs('#news'); ?>" href="#news">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#report'); ?>" href="#report">Report</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#user'); ?>" href="#user">User</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              cetak
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cetak_berita.php">cetak berita</a></li>
              <li><a class="dropdown-item" href="cetak_laporan.php">cetak laporan</a></li>
              <li><a class="dropdown-item" href="cetak_users.php">cetak users</a></li>
            </ul>
          </li>
          <li class="nav-itemb ">
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






  <div id="search-container" style="margin-top: 150px; margin-bottom: 150px;" class="container">

    <?php if ($news) : ?>
      <section id="news">
        <div class="display-4 mb- mt-5 text-center mb-5 fw-bold">Data Berita</div>
        <table class="table table table-bordered border-DARK">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">gambar</th>
              <th scope="col">judul</th>
              <th scope="col">tanggal</th>
              <th scope="col">isi</th>
              <th scope="col">ubah</th>
              <th scope="col">hapus</th>



            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($news as $n) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>

                <td><img src="img/<?= $n['gambar']; ?>" width="50"></td>
                <td><?= $n['judul']; ?></td>
                <td><?= $n['tanggal']; ?></td>
                <td><?= $n['isi']; ?></td>
                <td class="aksi">
                  <a href="ubah.php?id=<?= $n['id']; ?>" class="ubah">ubah</a>
                </td>
                <td class="aksi">
                  <a href="hapus.php?id=<?= $n['id']; ?>" class="hapus" onclick="return confirm('yakin?');">hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else :  ?>
        <div class="row">
          <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
              data not found!
            </div>
          </div>
        </div>
      <?php endif; ?>

      <a href="tambah.php" class="tambah">Tambah +</a>
      </section>

      <section id="report">


        <div class="display-4 mb- mt-5 text-center mb-5 fw-bold">Data laporan</div>
        <table class="table table table-bordered border-DARK">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">gambar</th>
              <th scope="col">Email</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Laporan</th>
              <th class="aksi" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($reports as $report) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="img/<?= $report['gambar']; ?>" width="50"></td>
                <td><?= $report['email']; ?></td>
                <td><?= $report['tanggal']; ?></td>

                <td><?= $report['laporan']; ?></td>

                <td class="aksi">

                  <a href="hapus.php?id=<?= $report['id']; ?>" class="hapus" onclick="return confirm('yakin?');">hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>



        <section id="user">

          <div class="display-4 mb- mt-5 text-center mb-5 fw-bold">Data user</div>
          <table class="table table table-bordered border-DARK">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">username</th>
                <th scope="col">Email</th>
                <th class="aksi" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $user['username']; ?></td>
                  <td><?= $user['email']; ?></td>


                  <td class="aksi">

                    <a href="hapus.php?id=<?= $user['id']; ?>" class="hapus" onclick="return confirm('yakin?');">hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>


        </section>
  </div>

  </div>
  </section>





  <!--footer-->
  <div class="pt-3 bottom-0 bg-light" style="height:70px;">
    <footer class="text-center">
      <p class="text-dark">Copyright &copy; 2023<a href="https://www.instagram.com/_zhrutmzll/" class="text- p-2 text-decoration-none">Azhar Utama </a> </p>
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