<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';

//cetak berita
$news = query("SELECT * FROM berita");

$mpdf = new \Mpdf\Mpdf();

$html = '<body>
<h1>Daftar Berita</h1>
<table border="1" cellpadding="10" cellspacing="0">

     <tr>
     <th scope="col">id</th>
     <th scope="col">gambar</th>
     <th scope="col">judul</th>
     <th scope="col">tanggal</th>
     <th scope="col">isi</th>
     
     </tr>';

$i = 1;
foreach ($news as $n) {
     $html .= '<tr>
         <td>' . $i++ . '</td>
         <td><img src="img/' . $n["gambar"] . '" width="50"></td>
         <td>' . $n["judul"] . '</td>
         <td>' . $n["tanggal"] . '</td>
         <td>' . $n["isi"] . '</td>
     </tr>';
}


$html .= '
</table>    
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output('admin.pdf', 'I');
