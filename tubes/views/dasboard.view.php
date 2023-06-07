<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>
<!-- navbar-->



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