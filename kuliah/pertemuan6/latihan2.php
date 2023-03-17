<?php 

//array didalam array
//mengubah index array dari numerik menjadi stri


$mahasiswa = [

  ['nama'=> 'azhar' ,
   'binatang'=> '🦁',
   'makanan'=> ['🍝','🍕' ]
  ],

  ['nama' => 'reza' ,
  'binatang' => '🐶',
  'makanan' => ['🍕' ]
  ],

  ['nama'=>'aril',
   'binatang'=>'🐨',
   'makanan'=> ['🍜']
  ], 

  ['nama'=>'aldi',
  'binatang' =>'🐮',
  'makanan' => ['🍖' ,'🍜']
 ],
  ['nama'=>'lutfiadi',
  'binatang' =>'🦖',
  'makanan' =>  ['🧆']
  ] 
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
    <li> Nama : <?= $mhs['nama']; ?></li>
    <li> hewan : <?=$mhs['binatang'];  ?></li>
    
    <li>
      makanan :
    <?php
     foreach($mhs['makanan']  as $makanan) {
      echo $makanan;
      
      } ?>
    </li>
   
  </ul>
  <?php } ?>
  
</body>
</html>