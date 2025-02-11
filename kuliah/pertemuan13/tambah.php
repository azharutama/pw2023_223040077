<?php
require('functions.php');

$title = 'form tambah data';

if(isset($_POST['tambah'])){

  if(tambah($_POST) > 0 ){

    echo"<script>
        alert('data berhasil ditambah');
        document.location.href = 'index.php';
    </script>";
  }

}

require('views/tambah.view.php');
