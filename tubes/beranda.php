<?php 

$berita = [
[
  'gambar' => 'img/ekonomi1.png',
  'judul'=> 'Sempat Tolak 2 Kali Usulan Hiswana Migas, Akhirnya Pemdakab Garut Naikan HET Gas 3Kg',
  'tanggal'=>'Kamis, 23 Maret 2023',
  'tombol'=>'ekonomi1.php' , 

],

[
  'gambar' => 'img/pemerintahan1.jpg',
  'judul'=> 'Menjelang Bulan Ramadan, Pemerintah Kabupaten Garut Gelar Rapat Forkopimda',
  'tanggal'=>'Kamis, 23 Maret 2023',
  'tombol'=>'pemerintahan1.php' , 
  
],

[
  'gambar' => 'img/teknologi1.jpeg',
  'judul'=> 'Kominfo RI Gelar Workshop  Prototype Pengembangan Desa Digital di Kabupaten Garut Diterbitkan',
  'tanggal'=>'Kamis, 9 Maret 2023',
  'tombol'=>'teknologi1.php' , 
    
],

[
  'gambar' => 'img/kesehatan1.jpeg',
  'judul'=> 'Plt Bupati Bogor Harap RSUD Leuwiliang Beri Pelayanan Kesehatan Optimal pada Masyarakat',
  'tanggal'=>'Kamis, 16 Maret 2023',
  'tombol'=>'kesehatan1.php' , 
      
],

[
  'gambar' => 'img/sosial1.jpg',
  'judul'=> 'SAFARI RAMADAN, Wagub Uu Ruzhanul: Silaturahmi Bagian dari Ibadah agama Islam',
  'tanggal'=>'Kamis, 23 Maret 2023',
  'tombol'=>'sosial1.php' , 
        
],

[
  'gambar' => 'img/pendidikan1.jpg',
  'judul'=> 'SMK Telkom Sekar Kemuning Cirebon Tidak Terkait Dengan Yayasan Pendidikan Telkom',
  'tanggal'=>'Kamis, 23 Maret 2023',
  'tombol'=>'pendidikan1.php' , 
          
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
    <nav class="navbar bg-dark navbar-dark shadow sm  navbar-expand-lg fixed-top ">
  <div class="container-fluid ms-3">
    <a class="navbar-brand" href="beranda.php"><img src="img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"href="beranda.php">Beranda</a>
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
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!--slide image-->
    <div id="carouselExampleCaptions" class="carousel slide" style="margin-top:75px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img src="img/s1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>JAWA BARAT</h2>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/s2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>JAWA BARAT</h2>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/s3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>JAWABARAT</h2>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   
  <!--end-->
  <!--berita-->
  <div id="beranda">
    <div class="container text-center ">
     <div class="display-3 mb-5 ">Berita Terkini</div>
      <div class="row ps-5">

        <?php foreach ($berita as $b) : ?>
 
          <div class="col-md-4 mt-5 ps-3 mb-5">
          <div data-aos="zoom-in">
            <div class="card " style="width: 18rem;">
              <img src=" <?= $b['gambar']; ?>" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title"> <?= $b['judul']; ?></h5>
                    <p class="card-text"> <?= $b['tanggal']; ?></p>
                    <a class="btn btn-dark" href=" <?= $b['tombol']; ?>" role="button">kunjungi</a>
                  
               </div>
          </div>
          
          </div>
          
    </div>
      <?php endforeach; ?>
      </div>
      </div>
      </div>

 <!--footer-->
    <div class=" mt-3 pt-3 bottom-0" style="height:70px; background-color:#212121;">
      <footer class="text-center">
        <p class="text-light">Copyright &copy; 2023<a href="https://www.instagram.com/_zhrutmzll/" class="text-light p-2 text-decoration-none">Azhar Utama </a> </p>
      </footer>
      </div>
    </div>
  <!--end-->


  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>