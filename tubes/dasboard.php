<?php
require('functions.php');
$nama = 'DASBOARD';
$reports = query("SELECT * FROM laporan");

$dasboard = [
  [
    'judul' => 'Jumlah Penduduk',
    'jumlah' => '48.220.094 Jiwa',
    'waktu' => 'Data tahun 2021',
  ],

  [
    'judul' => 'Jumlah UMKM (Unit)',
    'jumlah' => '6.257.390',
    'waktu' => 'Data tahun 2021',
  ],

  [
    'judul' => 'Angka Harapan Hidup (Avg)',
    'jumlah' => '69,79 Tahun',
    'waktu' => 'Data tahun 2021',
  ],


  [
    'judul' => 'Rata-Rata Lama Sekolah (Avg)',
    'jumlah' => '8,54 Tahun',
    'waktu' => 'Data tahun 2020',
  ],

  [
    'judul' => 'Imunisasi Keseluruhan',
    'jumlah' => '5.051.189',
    'waktu' => 'Data tahun 2020'
  ],




];
require('views/dasboard.view.php');
