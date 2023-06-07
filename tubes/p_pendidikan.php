<?php
require('functions.php');
$nama = 'PORTAL PENDIDIKAN';

$berita = [
  [
    'gambar' => 'img/pendidikan1.jpg',
    'judul' => 'SMK Telkom Sekar Kemuning Cirebon Tidak Terkait Dengan Yayasan Pendidikan Telkom',
    'tanggal' => 'Kamis, 23 Maret 2023',
    'tombol' => 'pendidikan1.php',

  ],

  [
    'gambar' => 'img/pendidikan2.jpeg',
    'judul' => 'Garut Targetkan Naik Peringkat Madya pada Penilaian Kabupaten Layak Anak Tahun 2023',
    'tanggal' => 'Kamis, 23 Maret 2023',
    'tombol' => 'pendidikan2.php',

  ],

  [
    'gambar' => 'views/img/pendidikan3.jpg',
    'judul' => 'Pengumuman Seleksi Calon Direktur PT Jamkrida Jabar 2023',
    'tanggal' => 'Jumat, 28 April 2023',
    'tombol' => 'pendidikan3.php',

  ]


];

require('views/portal_pendidikan.view.php');
