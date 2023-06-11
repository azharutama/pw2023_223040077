<?php
require('functions.php');
$nama = "ADMIN";
$users = query("SELECT * FROM users");
$reports = query("SELECT * FROM laporan");

//function cari admin
if (isset($_GET['search-button'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM 
            berita
            WHERE 
            judul LIKE '%$keyword%' OR
            tanggal LIKE '%$keyword%' OR
            isi LIKE '%$keyword%'
            ";

  $news = query($query);
} else {

  $news = query("SELECT * FROM berita");
}





require('views/admin.view.php');
