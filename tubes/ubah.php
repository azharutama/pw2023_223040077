<?php
require('functions.php');

$nama = 'LAPORAN';
//ambil data url
$id = $_GET['id'];

$lprn = query("SELECT * FROM laporan WHERE id = $id ")[0];

//cek tombol ubah ditekan 
if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {

    echo "<script>
        alert('data berhasil diubah');
        document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal diubah');
    document.location.href = 'admin.php';
</script>";
  }
}
require('views/ubah.view.php');
