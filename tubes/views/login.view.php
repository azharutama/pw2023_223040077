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
      <form class="d-flex md-0 " role="search">
        <a class="btn btn-outline-light active" href="login.php" role="button">masuk</a>
        <a class="btn btn-outline-light ms-2" href="register.php" role="button">daftar</a>
      </form>


    </div>
  </div>
</nav>

<!--form-->
<?php if (isset($error)) : ?>
  <p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>


<form action="" method="post">
  <div class="container " style="width:350px; margin-bottom:150px;">
    <div class="display-5 text-center fw-bolder" style="margin-top:150px;">Sign In!</div>
    <div class="mb-3" style="margin-top: 50px; ">
      <div class="mb-3">

        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" id="username" class="form-control">
        <div id="usernameHelp" class="form-text">Masukan Username yang sudah terdaftar</div>
      </div>


      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <div id="passwordHelp" class="form-text">Masukan password anda</div>
      </div>

      <div>
        <label for="remember">remember me</label>
        <input type="checkbox" name="remember">

      </div>

      <button type="submit" name="login" class="btn btn-dark">Masuk</button>
    </div>
</form>

</div>
</div>
</div>

<!--end-->


<?php require('partials/footer.php'); ?>