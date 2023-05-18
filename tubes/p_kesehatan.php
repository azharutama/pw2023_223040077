<?php 
require('functions.php');
$nama = 'PORTAL KESEHATAN';

$berita = [
[
  'gambar' => 'views/img/kesehatan1.jpeg',
  'judul'=> 'Sempat Tolak 2 Kali Usulan Hiswana Migas, Akhirnya Pemdakab Garut Naikan HET Gas 3Kg',
  'tanggal'=>'Kamis, 23 Maret 2023',
  'tombol'=>'kesehatan1.php' , 

],

[
  'gambar' => 'views/img/kesehatan2.jpeg',
  'judul'=> 'Menjelang Bulan Ramadan, Pemerintah Kabupaten Garut Gelar Rapat Forkopimda',
  'tanggal'=>'Jumat, 17 Maret 2023  ',
  'tombol'=>'kesehatan2.php' , 
  
],

[
  'gambar' => 'views/img/kesehatan3.jpeg',
  'judul'=> 'Peringatan Hari Buruh: Menjamin Hak-Hak Pekerja Melalui Pemberlakuan Jam Kerja yang Layak',
  'tanggal'=>'Rabu, 3 Mei 2023',
  'tombol'=>'kesehatan3.php' , 
  
]


];


require('views/portal_kesehatan.view.php');
?>