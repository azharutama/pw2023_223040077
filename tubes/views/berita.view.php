<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>


<!--berita-->



<div id="berita-container" style="margin-top:150px;">
  <div class="display-3 mb-5 pt-3 ms-5 text-center">Berita jabar</div>
  <?php if ($berita) : ?>

    <div class="row ps-5 ms-5">
      <?php foreach ($berita as $b) : ?>
        <div class="col-md-4 mt-5 ps-3 mb-5">
          <div data-aos="zoom-in">
            <div class="card " style="width: 18rem;">
              <img src=" img/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> <?= $b['judul']; ?></h5>
                <p class="card-text"> <?= $b['tanggal']; ?></p>
                <a class="btn btn-dark" href="content.php?id=<?= $b['id']; ?>  " role="button">kunjungi</a>


              </div>
            </div>

          </div>

        </div>
      <?php endforeach; ?>
    </div>
</div>
<?php else :  ?>
  <div class="row text-center">
    <div class="col-md-12">
      <div class="alert alert-danger text-center" role="alert">
        data not found!
      </div>
    </div>
  </div>
<?php endif; ?>


<?php require('partials/footer.php'); ?>