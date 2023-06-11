<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>


<?php $nws = query("SELECT * FROM berita WHERE id = $id ")[0]; ?>
<!--form-->
<form action="" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $nws["id"]; ?>">
  <input type="hidden" name="gambarLama" value="<?= $nws["gambar"]; ?>">
  <div class="container" style="width:auto; height:570px; margin-bottom:200px;">
    <div class="mb-1 mt-5 pt-5">
      <div class="display-3 mt-5 ms-2 pt-5 mb-5 fw-bolder">tambah berita</div>

      <input type="hidden" name="id" value="<?= $nws['id']; ?>">

      <div class="mb-3">
        <label for="judul" class="form-label">judul</label>
        <input type="text" class="form-control" name="judul" placeholder="masukan judul" value="<?= $nws['judul']; ?>">
      </div>

      <div class="mb-3">
        <label for="tanggal" class="form-label">tanggal</label>
        <input type="date" class="form-control" name="tanggal" placeholder="name@example.com" value="<?= $nws['tanggal']; ?>">
      </div>

      <div class="mb-3">
        <label for="gambar">Gambar :</label> <br>
        <img src="img/<?= $nws['gambar']; ?>" width="50"> <br>
        <input type="file" name="gambar" id="gambar">
      </div>

      <div class="mb-3 ">
        <label for="isi" class="form-label">isi</label>
        <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3">  <?= $nws['isi']; ?></textarea>
      </div>



      <button class="btn btn-dark" type="submit" name="submit">Kirim</button>
    </div>
</form>


</div>
</div>

<?php require('partials/footer.php'); ?>