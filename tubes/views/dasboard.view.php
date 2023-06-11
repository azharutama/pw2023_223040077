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
      <img src="img/s3.jpg" class="d-block w-100" alt="...">
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
      <img src="img/s1.jpeg" class="d-block w-100" alt="...">
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


<div class="display-3 mb-3 mt-5 pt-5 text-center"> Dasboard</div>
<div class="container">
  <div class="row">

    <?php foreach ($dasboard as $d) : ?>

      <div class="col mt-5 mb-5">
        <div class="card">
          <div class="card-header">
            <?= $d['judul']; ?>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $d['jumlah']; ?></h5>
            <p class="card-text"><?= $d['waktu']; ?></p>
          </div>
        </div>


      <?php endforeach; ?>

      </div>
  </div>
</div>
</div>
</div>
</div>
</div>


<?php require('partials/footer.php'); ?>