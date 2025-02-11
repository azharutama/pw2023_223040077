<?php
require('functions.php');
// Memasukkan file functions.php yang berisi fungsi-fungsi yang akan digunakan

$nama = 'LAPORAN';
// Mendefinisikan variabel $nama dengan nilai 'LAPORAN'

$reports = query("SELECT * FROM laporan");
// Mengambil semua data dari tabel "laporan" menggunakan fungsi query dan hasilnya disimpan dalam variabel $reports

// Fungsi tambah laporan
if (isset($_POST['tambah'])) {
  // Mengecek apakah tombol "tambah" telah diklik

  if (insert($_POST) > 0) {
    // Memanggil fungsi insert dan memasukkan data dari $_POST ke dalam tabel "laporan".
    // Jika jumlah baris yang terkena dampak lebih dari 0 (berhasil ditambahkan),

    echo "<script>
        alert('data berhasil ditambah');
        document.location.href = 'laporan.php';
    </script>";
    // Menampilkan pesan "data berhasil ditambah" menggunakan JavaScript alert dan mengarahkan pengguna ke halaman laporan.php
  }
}

require('views/laporan.view.php');
// Memasukkan file laporan.view.php yang berisi tampilan HTML dan kode untuk menampilkan halaman laporan
