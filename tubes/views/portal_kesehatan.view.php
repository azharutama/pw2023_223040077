

<?php require('partials/header.php'); ?>

    <?php require('partials/nav.php'); ?> 
  

  <!--berita-->
  <div id="berita">

  <div id="beranda">
    <div class="container text-center mt-5 pt-5 ">
     <div class="display-3 mb-5 ">Berita Kesehatan</div>
      <div class="row ps-5">

        <?php foreach ($berita as $c) : ?>
 
          <div class="col-md-4 mt-5 ps-3 mb-5">
          
            <div class="card " style="width: 18rem;">
              <img src=" <?= $c['gambar']; ?>" class="card-img-top" alt="...">
               <div class="card-body">
                    <h5 class="card-title"> <?= $c['judul']; ?></h5>
                    <p class="card-text"> <?= $c['tanggal']; ?></p>
                    <a class="btn btn-dark" href=" <?= $c['tombol']; ?>" role="button">kunjungi</a>
                  
              
          </div>
          
          </div>
          
    </div>
      <?php endforeach; ?>
      </div>
      </div>
      </div>

  </div>


  
 <?php require('partials/footer2.php'); ?>