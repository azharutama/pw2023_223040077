<?php require('partials/header.php'); ?>

<nav class="navbar bg-dark navbar-dark shadow sm  navbar-expand-lg fixed-top ">
  <div class="container-fluid ms-3">
    <a class="navbar-brand <?= uriIs('index.php'); ?>" href="index.php" href="index.php"><img src="views/img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


      </ul>
      </li>
      </ul>


    </div>
  </div>
</nav>
<!--form-->
<form action="" method="POST">
  <div class="container " style="width:350px; margin-bottom:100px;">
    <div class="mb-3" style="margin-top: 50px;">
      <div class="mb-3">
        <div class="display-3 mt-5 ms-2 pt-5 mb-5 fw-bolder">user</div>
        <input type="hidden" name="id" value="<?= $users['id']; ?>">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputUsername1" value="<?= $users['username']; ?>">
          <div id="usernamelHelp" class="form-text">Masukan Username Anda</div>
        </div>
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $users['email']; ?>>
        <div id=" emailHelp" class="form-text">Masukan Email yang akan anda daftarkan
      </div>
    </div>

    <button class=" btn btn-dark" type="submit" name="change">ubah</button>
  </div>
</form>



<?php require('partials/footer.php'); ?>