<?php
require('functions.php');
$nama = "ADMIN";

//function cari berita
if (isset($_GET['button-search'])) {
  $key = $_GET['key'];
  $sql = "SELECT * FROM 
            berita
            WHERE 
            judul LIKE '%$key%' OR
            tanggal LIKE '%$key%' OR
            isi LIKE '%$key%'
            ";

  $berita = query($sql);
} else {
  $berita = query("SELECT * FROM berita");
}

require('views/berita.view.php');
