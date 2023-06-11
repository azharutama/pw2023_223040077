<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>

<!--berita-->
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col">
      <div class="card mb-3">
        <img src="img/<?= $berita['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?= $berita['judul']; ?></h5>
          <p class="card-text">
            <?= $berita['isi']; ?>

          </p>
          <p class="card-text"><small class="text-body-secondary"><?= $berita['tanggal']; ?></small></p>


        </div>
      </div>

      <a class="btn btn-primary" href="cetak_content.php" role="button">cetak</a>


    </div>
  </div>
  <!--end-->

</div>
</div>

<?php require('partials/footer.php'); ?>