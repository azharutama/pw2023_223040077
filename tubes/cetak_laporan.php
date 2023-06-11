<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
//cetak laporan ke pdf
$reports = query("SELECT * FROM laporan");

$mpdf = new \Mpdf\Mpdf();

$html = '<body>
<h1>Daftar Laporan</h1>
<table border="1" cellpadding="10" cellspacing="0">

     <tr>
     <th scope="col">id</th>
              <th scope="col">gambar</th>
              <th scope="col">Email</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Laporan</th>
              
     
     </tr>';

$i = 1;
foreach ($reports as $report) {
     $html .= '<tr>
         <td>' . $i++ . '</td>
         <td><img src="img/' . $report["gambar"] . '" width="50"></td>
         <td>' . $report["email"] . '</td>
         <td>' . $report["tanggal"] . '</td>
         <td>' . $report["laporan"] . '</td>
     </tr>';
}



$html .= '
</table>    
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output('admin.pdf', 'I');
