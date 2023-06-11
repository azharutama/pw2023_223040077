<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>
<div id="carouselExampleCaptions" class="carousel slide" style="margin-top:77px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/s2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>JAWA BARAT</h2>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/s1.jpeg" class="d-block w-100" alt="...">
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



<div class="container text-center mt-5 pt-5 ">
  <div class="display-3 mb-5 ">Berita Terkini</div>
  <div class="row ps-5">

    <?php foreach ($news as $n) : ?>

      <div class="col-md-4 mt-5 ps-3 mb-5">

        <div class="card " style="width: 18rem;">
          <img src=" img/<?= $n['gambar']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> <?= $n['judul']; ?></h5>
            <p class="card-text"> <?= $n['tanggal']; ?></p>
            <a class="btn btn-dark" href="content.php?id=<?= $n['id']; ?>  " role="button">kunjungi</a>

          </div>

        </div>

      </div>
    <?php endforeach; ?>
  </div>
</div>






<?php require('partials/footer.php'); ?>