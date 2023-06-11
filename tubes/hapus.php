<?php
require('functions.php');

//menangkap id
$id = $_GET['id'];

//hapus laporan
if (hapusL($id) > 0) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
}

//hapus user
if (hapusU($id) > 0) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
}

//hapus berita
if (hapusB($id) > 0) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'admin.php';
		</script>
	";
}
require('views/admin.view.php');
require('dasboard_admin.php');
