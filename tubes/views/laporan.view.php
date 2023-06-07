<?php require('partials/header.php'); ?>

<?php require('partials/nav.php'); ?>
<!--form-->
<form action="" method="post">
  <div class="container" style="width:auto; height:570px; margin-bottom:200px;">
    <div class="mb-1 mt-5 pt-5">
      <div class="display-3 mt-5 ms-2 pt-5 mb-5 fw-bolder">Laporan!</div>


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal" placeholder="name@example.com">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">gambar</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="gambar" placeholder="masukan gambar">
      </div>

      <div class="mb-3 ">
        <label for="exampleFormControlTextarea1" class="form-label">Laporan</label>
        <textarea class="form-control" name="laporan" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>



      <button class="btn btn-dark" type="submit" name="tambah">Kirim</button>
    </div>
</form>


</div>
</div>

<?php require('partials/footer.php'); ?>