<?php
require('functions.php');


$id = $_GET['id'];

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
require('views/admin.view.php');
require('dasboard_admin.php');
