
<?php require ('partials/header.php');?> 
<?php require ('partials/nav.php');?> 




<div class="container">
  <h1>Halaman Home</h1>
  <h3>Daftar Mahasiswa</h3>
  <?php foreach ($students as $s) : ?>
    <ul>
      <li>nama: <?= $s['nama']; ?></li>
      <li>npm: <?= $s['npm']; ?></li>
      <li>email: <?= $s['email']; ?></li>
      
      
    </ul>
    <?php endforeach ;?>

</div>
<?php require ('partials/footer.php');?> 