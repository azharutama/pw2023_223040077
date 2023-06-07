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
      <form class="d-flex md-0 ">
        <a class="btn btn-outline-light " href="login.php" role="button">masuk</a>
        <a class="btn btn-outline-light ms-2 active" href="register.php" role="button">daftar</a>
      </form>


    </div>
  </div>
</nav>
<!--form-->
<form action="" method="POST">
  <div class="container " style="width:350px; margin-bottom:100px;">
    <div class="display-5 text-center fw-bolder" style="margin-top:150px;">Sign Up!</div>
    <div class="mb-3" style="margin-top: 50px;">
      <div class="mb-3">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputUsername1">
          <div id="usernamelHelp" class="form-text">Masukan Username Anda</div>
        </div>
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Masukan Email yang akan anda daftarkan</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        <div id="passwordHelp" class="form-text">Masukan Password anda</div>
      </div>
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password2" class="form-control" id="exampleInputPassword1">
      <div id="passwordHelp" class="form-text">konfirmasi password</div>
    </div>
    <button type="submit" class="btn btn-dark text-center" name="register" value="Daftar">Daftar</button>
  </div>
</form>



<?php require('partials/footer.php'); ?>