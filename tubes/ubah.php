
<?php
require 'functions.php';
$nama = "UBAH";
// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$nws = query("SELECT * FROM berita WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'admin.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'admin.php';
			</script>
		";
  }
}
require('views/ubah.view.php');
?>