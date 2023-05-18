<?php
require('functions.php');
$title ='Home';
$students = [

  [
    'nama' => 'Muhamamd Azhar Utama',
    'npm' => '223040077',
    'email'=> 'azhar@gmail.com'

  ],

  [
    'nama' => 'Reza Ageng ',
    'npm' => '223040085',
    'email'=> 'reza@gmail.com'

  ]
  
];



// dd($_SERVER['REQUEST_URI']);
// string(45) "/pw2023_223040077/kuliah/pertemaun9/index.php"
require('views/index.view.php');
?>