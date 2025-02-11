<?php
require('functions.php');
// Memasukkan file functions.php yang berisi fungsi-fungsi yang akan digunakan

$news = query("SELECT * FROM berita");
// Mengambil semua data dari tabel "berita" menggunakan fungsi query dan hasilnya disimpan dalam variabel $news

$nama = 'BERANDA';
// Mendefinisikan variabel $nama dengan nilai 'BERANDA'

// Memulai session
session_start();

// Mengecek apakah pengguna sudah login atau belum
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
// Jika pengguna belum login, akan mengarahkan pengguna ke halaman login.php dan keluar dari script

// Fungsi pencarian untuk halaman utama
if (isset($_GET['button-search'])) {
  $key = $_GET['key'];
  // Mengambil nilai parameter 'key' dari URL menggunakan metode GET dan menyimpannya dalam variabel $key

  $sql = "SELECT * FROM 
            berita
            WHERE 
            judul LIKE '%$key%' OR
            tanggal LIKE '%$key%' OR
            isi LIKE '%$key%'
            ";
  // Membuat query SQL untuk mencari berita berdasarkan judul, tanggal, atau isi yang mengandung nilai $key

  $news = query($sql);
  // Menjalankan query SQL yang dibuat dan hasilnya disimpan dalam variabel $news

  if (empty($news)) {
    echo "<script>alert('Data not found.');</script>";
  }
  // Jika variabel $news kosong, menampilkan pesan "Data not found." menggunakan JavaScript alert
}

require('views/index.view.php');
// Memasukkan file index.view.php yang berisi tampilan HTML dan kode untuk menampilkan halaman utama