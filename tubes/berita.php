<?php
require('functions.php');
// Memasukkan file functions.php yang berisi fungsi-fungsi yang akan digunakan

$nama = "BERITA";
// Mendefinisikan variabel $nama dengan nilai "BERITA"

$berita = query("SELECT * FROM berita");
// Mengambil semua data dari tabel "berita" menggunakan fungsi query dan hasilnya disimpan dalam variabel $berita

// Fungsi pencarian berita
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

  $berita = query($sql);
  // Menjalankan query SQL yang dibuat dan hasilnya disimpan dalam variabel $berita
}

if (empty($berita)) {
  echo "<script>alert('Data not found.');</script>";
  // Jika variabel $berita kosong, menampilkan pesan "Data not found." menggunakan JavaScript alert
}

require('views/berita.view.php');
// Memasukkan file berita.view.php yang berisi tampilan HTML dan kode untuk menampilkan artikel berita atau hasil pencarian