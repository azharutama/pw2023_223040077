<?php
require('functions.php');
$nama = 'PORTAL SOSIAL';

$berita = [
  [
    'gambar' => 'img/sosial1.jpg',
    'judul' => 'SAFARI RAMADAN, Wagub Uu Ruzhanul: Silaturahmi Bagian dari Ibadah agama Islam',
    'tanggal' => 'Kamis, 23 Maret 2023',
    'tombol' => 'sosial1.php',

  ],

  [
    'gambar' => 'vimg/sosial2.jpg',
    'judul' => 'Jelang Ramadan, Wabup Garut didampingi Sekda Garut Cek Harga Sembako di Pasar Guntur',
    'tanggal' => 'Kamis, 23 Maret 2023',
    'tombol' => 'sosial2.php',

  ],

  [
    'gambar' => 'img/sosial3.jpeg',
    'judul' => 'Tim SAR Berhasil Temukan 2 Orang Tenggelam di Pantai Bobos',
    'tanggal' => 'Senin, 1 Mei 2023',
    'tombol' => 'sosial3.php',

  ]


];

require('views/portal_sosial.view.php');
