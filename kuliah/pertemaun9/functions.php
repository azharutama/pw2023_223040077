<?php

define('BASE_URL', '/pw2023_223040077/tubes/');

function dd ($value){

  echo "<pre>";
  var_dump($value);

  
 echo  "</pre>";
 die();
}

function uriIs($uri){
  return($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}

 ?>
