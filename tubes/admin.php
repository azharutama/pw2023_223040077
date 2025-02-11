<?php
require('functions.php'); // Memasukkan file functions.php yang berisi definisi fungsi-fungsi yang diperlukan

$nama = "ADMIN"; // Menginisialisasi variabel $nama dengan nilai "ADMIN"

$users = query("SELECT * FROM users"); // Mengambil semua data dari tabel "users" menggunakan fungsi query() yang terdefinisi dalam file functions.php

$reports = query("SELECT * FROM laporan"); // Mengambil semua data dari tabel "laporan" menggunakan fungsi query() yang terdefinisi dalam file functions.php

// Mengecek apakah tombol search-button ditekan pada form pencarian ($_GET['search-button'] adalah parameter yang diberikan pada input button)
if (isset($_GET['search-button'])) {
  $keyword = $_GET['keyword']; // Mengambil nilai keyword dari input form dengan name="keyword"
  
  // Membuat query SQL untuk mencari berita berdasarkan keyword yang diberikan
  $query = "SELECT * FROM 
            berita
            WHERE 
            judul LIKE '%$keyword%' OR
            tanggal LIKE '%$keyword%' OR
            isi LIKE '%$keyword%'
            ";

  $news = query($query); // Menjalankan query SQL menggunakan fungsi query() yang terdefinisi dalam file functions.php dan menyimpan hasilnya dalam variabel $news
} else {
  // Jika tombol search-button tidak ditekan, maka ambil semua data berita tanpa filter
  $news = query("SELECT * FROM berita"); // Mengambil semua data dari tabel "berita" menggunakan fungsi query() yang terdefinisi dalam file functions.php
}




require('views/admin.view.php');
