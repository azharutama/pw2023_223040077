<?php require('partials/header.php'); ?>

    <?php require('partials/nav.php'); ?>
    <!--form-->
    <form>
      <div class="container fluid">
    <div class="display-5 text-center fw-bolder" style="margin-top:200px;">Sign Up!</div>
      <div class="mb-3" style="margin-top: 50px;">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Masukan Email yang akan anda daftarkan</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Daftar</button>
      </div>
    </form>

    
  
 <?php require('partials/footer2.php'); ?>
