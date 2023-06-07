<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JAWA BARAT | <?= $nama; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav class="navbar bg-dark navbar-dark shadow sm  navbar-expand-lg fixed-top ">
    <div class="container-fluid ms-3">
      <a class="navbar-brand <?= uriIs('index.php'); ?>" href="index.php" href="index.php"><img src="views/img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#laporan'); ?>" href="#laporan">Laporan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link nav-link <?= uriIs('#user'); ?>" href="#users">User</a>
          </li>
        </ul>

        <form action="" method="post" class="d-flex md-0 pd-0" role="search">
          <input class="form-control me-2" style="width:180px;" type="text" name="keyword" autofocus placeholder="search">>
          <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
        </form>


      </div>
    </div>
  </nav>



  <section id="laporan">

    <div class="container  " style="margin-top: 150px; margin-bottom: 150px;">
      <div class="display-1 mb-5 text-center">ADMIN</div>
      <div class="display-4 mb-5">Data laporan</div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">gambar</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Laporan</th>
            <th scope="col">Aksi</th>
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

              <td>
                <a href="ubah.php?id=<?= $report['id']; ?>" class="badge text-bg-primary">ubah</a> |
                <a href="hapus.php?id=<?= $report['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <a href="laporan.php" class="btn btn-dark text-center mb-5">Tambah</a>
    </div>
  </section>

  <section id="users">

    <div class="container  " style="margin-top: 150px; margin-bottom: 150px;">
      <div class="display-4 mb-5">Data user</div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">username</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $user['username']; ?></td>
              <td><?= $user['email']; ?></td>

              <td>

                <a href="hapus.php?id=<?= $user['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </section>
  <!--footer-->
  <div class="pt-3 bottom-0 bg-dark" style="height:70px;">
    <footer class="text-center">
      <p class="text-light">Copyright &copy; 2023<a href="https://www.instagram.com/_zhrutmzll/" class="text-light p-2 text-decoration-none">Azhar Utama </a> </p>
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
</body>

</html>