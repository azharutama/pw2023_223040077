<?php
require('functions.php');
$nama = "BERITA";
$berita = query("SELECT * FROM berita");
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
}
if (empty($berita)) {
  echo "<script>alert('Data not found.');</script>";
}

require('views/berita.view.php');
