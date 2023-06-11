<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>


<!--berita-->



<div id="berita-container" style="margin-top:150px; width:auto;">
  <div class="display-3 mb-5 pt-3 ms-5 text-center">BERITA JABAR</div>

  <div class="row  ms-5">
    <?php foreach ($berita as $b) : ?>
      <div class="col-md-4 mt-5 ps-3 mb-5">
        <div class="card " style="width: 18rem;">
          <img src=" img/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> <?= $b['judul']; ?></h5>
            <p class="card-text"> <?= $b['tanggal']; ?></p>
            <a class="btn btn-dark" href="content.php?id=<?= $b['id']; ?>  " role="button">kunjungi</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<?php require('partials/footer.php'); ?>