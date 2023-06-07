<?php
require('functions.php');

$nama = 'Admin';
//ambil data url
$id = $_GET['id'];

$lprn = query("SELECT * FROM users WHERE id = $id ")[0];

//cek tombol ubah ditekan 
if (isset($_POST['change'])) {

  if (change($_POST) > 0) {

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
require('views/change.view.php');
