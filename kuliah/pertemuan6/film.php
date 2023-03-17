<?php 
$film = [

  [
    'poster' => '1.jpg' ,
    'judul' => 'Iron Man' ,
    'tahun' => '2008' ,
    'gendre' =>[ 'action' , 'adventure'],
    'pemeran' => ['Robert Downey Jr.' , 'Terrence Howard' , 'Jeff Bridges'],
    'sutradara' => 'mark fergus'


  ],

  [
    'poster' => '2.jpg' ,
    'judul' => 'Iron Man 2' ,
    'tahun' => '2010' ,
    'gendre' =>[  'action' , 'adventure'],
    'pemeran' => ['Robert Downey Jr.' , 'mickey rourke'],
    'sutradara' => 'jon pavreau'


  ],

  [
    'poster' => '3.jpg' ,
    'judul' => 'Iron Man 3' ,
    'tahun' => '2015' ,
    'gendre' =>[  'action' , 'adventure'],
    'pemeran' => ['Robert Downey Jr.' , 'Guy Pearce'],
    'sutradara' => 'Shane Black'


  ],

  [
    'poster' => '4.jpg' ,
    'judul' => 'Avenger Infinity War' ,
    'tahun' => '2018' ,
    'gendre' =>[  'action' , 'adventure'],
    'pemeran' => [' chris evans','Robert Downey Jr.' ,  ' chris hemsworth'],
    'sutradara' => ' russo brothers'


  ],

  [
    'poster' => '5.jpg' ,
    'judul' => 'Avenger Endgame' ,
    'tahun' => '2019' ,
    'gendre' =>[ 'action' , 'adventure' ],
    'pemeran' => [' chris evans','Robert Downey Jr.' ,  ' chris hemsworth'],
    'sutradara' => ' russo brothers'


  ],
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
  <h1>list film</h1>
  <?php  foreach($film as $f) { ?>
    <ul>
      <li><img src="img/<?= $f['poster']; ?>" alt=""></li>
      <li>Judul : <?= $f['judul']; ?></li>
      <li>Tahun : <?= $f['tahun']; ?></li>
      <li> gendre :
    <?php foreach($f['gendre']  as $g) {
      echo $g;
      } ?>
    </li>

    <li>
      pemeran utama :
    <?php
     foreach($f['pemeran']  as $mc) {
      echo $mc;
      
      } ?>
    </li>
      <li> <?= $f['sutradara']; ?></li>
    </ul>

  <?php } ?>
</body>
</html>

