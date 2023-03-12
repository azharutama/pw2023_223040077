<?php 
$binatang= ['🦁', '🐶', '🐨' ,'🐮', '🦖'];
$makanan = ['🍝', '🍕', '🍝', '🍖', '🧆',];
$mahasiswa = ['azhar', 'reza', 'aril', 'aldi', 'lutfiadi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 3</title>
</head>
<body>
  <h2>daftar mahasiswa</h2>
  <?php foreach( $mahasiswa as $i => $mahasiswa) { ?>
  <ul>
    <li> Nama : <?= $mahasiswa; ?></li>
    <li> makanan : <?= $makanan[$i]; ?></li>
    <li> hewan : <?= $binatang[$i]; ?></li>
    
    </li>
  </ul>
  <?php } ?>
  
</body>
</html>