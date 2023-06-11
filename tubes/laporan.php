<?php


require('functions.php');
$nama = 'LAPORAN';
$reports = query("SELECT * FROM laporan");

//function tambah laporan
if (isset($_POST['tambah'])) {

  if (insert($_POST) > 0) {

    echo "<script>
        alert('data berhasil ditambah');
        document.location.href = 'admin.php';
    </script>";
  }
}


require('views/laporan.view.php');
