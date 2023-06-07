<?php
require('functions.php');


$reports = query("SELECT * FROM laporan");
if (isset($_POST['cari'])) {
  $reports = cari($_POST["keyword"]);
}

$users = query("SELECT * FROM users");

$nama = 'DASBOARD ADMIN';

require('views/admin.view.php');
