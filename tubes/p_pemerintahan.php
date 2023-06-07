<?php
require('functions.php');
$nama = 'PORTAL PEMERINTAHAN';

$berita = [
  [
    'gambar' => 'img/pemerintahan1.jpg',
    'judul' => 'Menjelang Bulan Ramadan, Pemerintah Kabupaten Garut Gelar Rapat Forkopimda',
    'tanggal' => 'Kamis, 23 Maret 2023',
    'tombol' => 'pemerintahan1.php',

  ],

  [
    'gambar' => 'img/pemerintahan2.jpg',
    'judul' => 'Wabup Garut Terima Tim BPK Provinsi Jawa Barat dalam Entry Meeting Pemeriksaan LKPD Kabupaten Garut Tahun 2022',
    'tanggal' => 'Rabu, 22 Maret 2023',
    'tombol' => 'pemerintahan2.php',

  ],

  [
    'gambar' => 'img/pemerintahan3.jpeg',
    'judul' => 'Diskop UKM Hadirkan Garut Packaging House sebagai Layanan Publik bagi UMKM',
    'tanggal' => 'Senin, 1 Mei 2023',
    'tombol' => 'pemerintahan3.php',

  ]


];

require('views/portal_pemerintahan.view.php');
