<?php


require('functions.php');
$nama = 'LAPORAN';

if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {

    echo "<script>
        alert('data berhasil ditambah');
        document.location.href = 'admin.php';
    </script>";
  }
}


require('views/laporan.view.php');
