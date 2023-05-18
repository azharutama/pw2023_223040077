<?php 
$film = [

  [
    'poster' => '1.jpg' ,
    'judul' => 'Iron Man' ,
    'tahun' => '2008' ,
    'gendre' =>[ 'action' , 'adventure'],
    'pemeran' => ['Robert Downey Jr.' , 'Terrence Howard' , 'Jeff Bridges'],
    'sutradara' => 'mark fergus'


  ],

  [
    'poster' => '2.jpg' ,
    'judul' => 'Iron Man 2' ,
    'tahun' => '2010' ,
    'gendre' =>[  'action' , 'adventure'],
    'pemeran' => ['Robert Downey Jr.' , 'mickey rourke'],
    'sutradara' => 'jon pavreau'


  ],

  [
    'poster' => '3.jpg' ,
    'judul' => 'Iron Man 3' ,
    'tahun' => '2015' ,
    'gendre' =>[  'action' , 'adventure'],
    'pemeran' => ['Robert Downey Jr.' , 'Guy Pearce'],
    'sutradara' => 'Shane Black'


  ],

  [
    'poster' => '4.jpg' ,
    'judul' => 'Avenger Infinity War' ,
    'tahun' => '2018' ,
    'gendre' =>[  'action' , 'adventure'],
    'pemeran' => [' chris evans','Robert Downey Jr.' ,  ' chris hemsworth'],
    'sutradara' => ' russo brothers'


  ],

  [
    'poster' => '5.jpg' ,
    'judul' => 'Avenger Endgame' ,
    'tahun' => '2019' ,
    'gendre' =>[ 'action' , 'adventure' ],
    'pemeran' => [' chris evans','Robert Downey Jr.' ,  ' chris hemsworth'],
    'sutradara' => ' russo brothers'


  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 3</title>
</head>
<body>
  <h1>list film</h1>
  <?php  foreach($film as $f) { ?>
    <ul>
      <li><img src="img/<?= $f['poster']; ?>" alt=""></li>
      <li>Judul : <?= $f['judul']; ?></li>
      <li>Tahun : <?= $f['tahun']; ?></li>
      <li> gendre :
    <?php foreach($f['gendre']  as $g) {
      echo $g;
      } ?>
    </li>

    <li>
      pemeran utama :
    <?php
     foreach($f['pemeran']  as $mc) {
      echo $mc;
      
      } ?>
    </li>
      <li> <?= $f['sutradara']; ?></li>
    </ul>

  <?php } ?>
</body>
</html>


<?php 

$berita = [
[
'gambar' => '',
'judul'=> '',
'tanggal'=>'',
'tombol'=>'' , 

],



[
  'gambar' => '',
  'judul'=> '',
  'tanggal'=>'',
  'tombol'=>'' , 
  
  ],

[
    'gambar' => '',
    'judul'=> '',
    'tanggal'=>'',
    'tombol'=>'' , 
    
],


[
      'gambar' => '',
      'judul'=> '',
      'tanggal'=>'',
      'tombol'=>'' , 
      
],

[
        'gambar' => '',
        'judul'=> '',
        'tanggal'=>'',
        'tombol'=>'' , 
        
],

[
          'gambar' => '',
          'judul'=> '',
          'tanggal'=>'',
          'tombol'=>'' , 
        
      
],




]
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JabarGov

    </title>

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body id="Beranda">
    <!-- navbar-->

    <nav class="navbar navbar-expand-lg  navbar-dark shadow sm fixed-top " style="background-color:#212121;">
      <div class="container">
        <a class="navbar-brand fs-2 fw-bold" href="beranda.php"><img src="img/logo5 (4) (11).png" alt=""></a>
        <div class="container-fluid">
    <form class="d-flex w-50 p-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
              <a class="nav-link active" aria-current="page" href="beranda.php" target="self">Beranda</a>
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
              <a class="nav-link" href="laporan.php">Laporan</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.php"><i class="fa fa-user mt-2 md-2"  aria-hidden="true"></i></a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
    <!--end-->


    <!--slide image-->


    <div id="carouselExampleIndicators" class="carousel slide mt-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner z-3 mt-5">
  <h1 class="z-3 position-absolute d-flex p-2">JAWA BARAT</h1>
    <div class="carousel-item active">
      <img src="img/s3.sjpg" class="d-block w-100" alt=".">
    </div>
    <div class="carousel-item">
      <img src="img/s2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/s1.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

   
  <!--end-->

  <!--berita-->


  <div id="beranda">

  <div class="container text-center">

  <div class="display-3 pe-5 mb-5 ">Berita Terkini</div>
<div class="row">

  <?php foreach ( $berita as $news) : ?>
    <div class="g-col-4" ">
    <div class="card " style="width: 18rem;">
  <img src=" img/<?= $news['gambar']; ?>" class="card-img-top" alt="ekonomi 1">
  <div class="card-body">
    <h5 class="card-title"> <?= $news['judul']; ?> </h5>
    <p class="card-text"> <?= $news['tanggal']; ?></p>
    <a class="btn btn-dark" href=" <?= $news['tombol']; ?>" role="button">kunjungi</a>
    
  </div>
</div>
<?php endforeach; ?>

    <div class="col-md-4 mb-3 ps-5">
    <div class="card " style="width: 18rem;">
  <img src="img/1679555984-Screenshot_20230322-183325_2.png" class="card-img-top" alt="ekonomi 1">
  <div class="card-body">
    <h5 class="card-title">Sempat Tolak 2 Kali Usulan Hiswana Migas, Akhirnya Pemdakab Garut Naikan HET Gas 3Kg</h5>
    <p class="card-text">Kamis, 23 Maret 2023</p>
    <a class="btn btn-dark" href="ekonomi.php" role="button">kunjungi</a>
  </div>
</div>
    </div>

    <div class="col-md-4 mb-3 ps-5">
     <div class="card" style="width: 18rem;">
  <img src="img/pemerintahan1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Menjelang Bulan Ramadan, Pemerintah Kabupaten Garut Gelar Rapat Forkopimda</h5>
    <p class="card-text">Kamis, 23 Maret 2023</p>
    <a class="btn btn-dark" href="pemerintahan.php" role="button">kunjungi</a>
  </div>
</div>
    </div>

    <div class="col-md-4 mb-3 ps-5">
    <div class="card" style="width: 18rem;">
  <img src="img/teknologi1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kominfo RI Gelar Workshop  Prototype Pengembangan Desa Digital di Kabupaten Garut Diterbitkan</h5>
    <p class="card-text">Kamis, 9 Maret 2023</p>
    <a class="btn btn-dark" href="teknologi.php" role="button">kunjungi</a>
  </div>
</div>
    </div>

    <div class="col-md-4 mb-3 ps-5">
    <div class="card" style="width: 18rem;">
  <img src="img/kesehatan1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Plt Bupati Bogor Harap RSUD Leuwiliang Beri Pelayanan Kesehatan Optimal pada Masyarakat</h5>
    <p class="card-text">Kamis, 16 Maret 2023</p>
    <a class="btn btn-dark" href="kesehatan.php" role="button">kunjungi</a>
  </div>
</div>
    </div>


    <div class="col-md-4 mb-3 ps-5 ">
    <div class="card" style="width: 18rem;">
  <img src="img/sosial1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SAFARI RAMADAN, Wagub Uu Ruzhanul: Silaturahmi Bagian dari Ibadah agama Islam</h5>
    <p class="card-text">Kamis, 23 Maret 2023</p>
    <a class="btn btn-dark" href="sosial.php" role="button">kunjungi</a>
    
  </div>
</div>
    </div>

    <div class="col-md-4 mb-3 ps-5">
    <div class="card" style="width: 18rem;">
  <img src="img/pendidikan1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SMK Telkom Sekar Kemuning Cirebon Tidak Terkait Dengan Yayasan Pendidikan Telkom</h5>
    <p class="card-text">Kamis, 23 Maret 2023</p>
    <a class="btn btn-dark" href="pendidikan.php" role="button">kunjungi</a>
  </div>
  </div>
    </div>

  


  </div>
  </div>
  <div class=" mt-3 pt-3 bottom-0" style="height:100px; background-color:#212121;">
    <footer class="text-center">
    <p class="text-light">created by <a href="https://www.instagram.com/_zhrutmzll/" class="text-light p-2 text-decoration-none">Azhar Utama </a> </p>
  </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>