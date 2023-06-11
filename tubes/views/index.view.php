<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>

<!--jumbotron-->
<section class="jumbotron jumbotron-fluid text-center ">
  <div class="display-1 fw-bold"> JAWA BARAT</div>
  <p class=" lead h1 fw-semibold" style="font-size:20px;">Satu Layanan Membantu Masyarakat dalam Segala Aspek Kehidupan</p>
  <p class="lead h1"> kunjungi berita</p>
  <a href=" berita.php" class="btn btn-light">kunjungi</a>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">

</section>
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