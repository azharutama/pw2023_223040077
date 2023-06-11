<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';

//cetak lusers ke pdf
$users = query("SELECT * FROM users");

$mpdf = new \Mpdf\Mpdf();

$html = '<body>
<h1>Daftar Users</h1>
<table border="1" cellpadding="10" cellspacing="0">

     <tr>
     <th scope="col">id</th>
     <th scope="col">username</th>
     <th scope="col">Email</th>
              
     
     </tr>';

$i = 1;
foreach ($users as $user) {
     $html .= '<tr>
         <td>' . $i++ . '</td>
     
         <td>' . $user["username"] . '</td>
         <td>' . $user["email"] . '</td>
     </tr>';
}



$html .= '
</table>    
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output('admin.pdf', 'I');
