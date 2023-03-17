<?php 

//array didalam array


$mahasiswa = [

  ['azhar' , '🦁' , '🍝'],
  ['reza' , '🐶' , '🍕'],
  ['aril' , '🐨' , '🍜 '], 
  ['aldi' , '🐮' , '🍖'],
  ['lutfiadi' , '🦖' , '🧆'] 
];


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
  <?php foreach( $mahasiswa as $mhs) { ?>
  <ul>
    <li> Nama : <?= $mhs[0]; ?></li>
    <li> hewan : <?=$mhs[1];  ?></li>
    <li> makanan : <?=$mhs[2]; ?></li>
    
    </li>
  </ul>
  <?php } ?>
  
</body>
</html>