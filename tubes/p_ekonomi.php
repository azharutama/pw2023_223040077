<?php 
require('functions.php');
$nama = 'PORTAL EKONOMI';

$berita = [
  [
    'gambar' => 'img/ekonomi1.png',
    'judul'=> 'Sempat Tolak 2 Kali Usulan Hiswana Migas, Akhirnya Pemdakab Garut Naikan HET Gas 3Kg',
    'tanggal'=>'Kamis, 23 Maret 2023',
    'tombol'=>'ekonomi1.php' , 
  
  ],
  
  [
    'gambar' => 'img/ekonomi2.jpeg',
    'judul'=> 'Menjelang Bulan Ramadan, Pemerintah Kabupaten Garut Gelar Rapat Forkopimda',
    'tanggal'=>'Kamis, 23 Maret 2023',
    'tombol'=>'ekonomi2.php' , 
    
  ],
  
  [
    'gambar' => 'img/ekonomi4.jpeg',
    'judul'=> 'Peringatan Hari Buruh: Menjamin Hak-Hak Pekerja Melalui Pemberlakuan Jam Kerja yang Layak',
    'tanggal'=>'Senin, 1 Mei 2023',
    'tombol'=>'ekonomi3.php' , 
    
  ]
  
  
  ];


require('views/portal_ekonomi.view.php');
