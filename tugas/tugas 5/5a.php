<?php 
$students = [

  [
    'gambar' => '1.jpg',
    'nama' => 'Harry Potter',
    'nrp' => '0001',
    'email' => 'harry@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],
  
  [
    'gambar' => '2.jpg',
    'nama' => 'Ron weasley',
    'nrp' => '0002',
    'email' => 'ron@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '3.jpg',
    'nama' => 'Hermionie Granger',
    'nrp' => '0003',
    'email' => 'hermionie@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '4.jpg',
    'nama' => 'Draco Malfoy',
    'nrp' => '0004',
    'email' => 'draco@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '5.jpg',
    'nama' => 'Ginny weasley',
    'nrp' => '0005',
    'email' => 'ginny@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '6.jpg',
    'nama' => 'Nevile Longbottom',
    'nrp' => '0006',
    'email' => 'Nevile@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],
  
  [
    'gambar' => '7.jpg',
    'nama' => 'Cedric Diggory',
    'nrp' => '0007',
    'email' => 'cedric@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '8.jpg',
    'nama' => 'Luna Lovegood',
    'nrp' => '0008',
    'email' => 'luna@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '9.jpg',
    'nama' => 'Fred Weasley',
    'nrp' => '0009',
    'email' => 'fred@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],

  [
    'gambar' => '10.jpg',
    'nama' => 'George Weasley',
    'nrp' => '0010',
    'email' => 'george@gmail.com',
    'jurusan' => 'ilmu sihir'

  ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas 5</title>
</head>
<body>
  <h2>Hogwarts Student List </h2>

  <?php foreach ($students as $student) : ?>

    <ul>
      <li> <img src="img/<?= $student['gambar']; ?> " alt=""></li>
      <li>Nama : <?= $student['nama']; ?></li>
      <li>NRP : <?= $student['nrp']; ?> </li>
      <li>Email : <?= $student['email']; ?> </li>
      <li>Jurusan : <?= $student['jurusan']; ?> </li>
    </ul>

    <?php endforeach; ?>
</body>
</html>