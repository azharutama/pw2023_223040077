<?php
require('functions.php');
$news = query("SELECT * FROM berita");
$nama = 'BERANDA';

//harus login untuk memasuki web
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

//function cari untuk halaman utama
if (isset($_GET['button-search'])) {
  $key = $_GET['key'];
  $sql = "SELECT * FROM 
            berita
            WHERE 
            judul LIKE '%$key%' OR
            tanggal LIKE '%$key%' OR
            isi LIKE '%$key%'
            ";

  $news = query($sql);

  if (empty($news)) {
    echo "<script>alert('Data not found.');</script>";
  }
}
require('views/index.view.php');
