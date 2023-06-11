
<?php
require('functions.php');
//membuat template untuk detail berika
$id = $_GET["id"];
$berita = query("SELECT * FROM berita WHERE id = $id")[0];
$nama = 'Berita';
require('views/content.view.php');


?>