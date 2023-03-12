<?php 
 //array
 //membuat array
 $hari = array('senin ', 'selasa ', 'rabu ');
 $bulan= [ 'januari', 'februari ', 'maret'];
 $myarray = ['azhar', 19, false ];
 $binatang= ['🦁', '🐶', '🐨' ,'🐮'];


 //mencetak array

 //satu elemen saja
 echo $hari[2];

 echo "<hr>";

 //var_dump
 var_dump ($hari);
 echo "<br>";
 
 //print_r

 print_r ($hari);
 echo "<br>";

 var_dump($myarray);
 echo"<br>";

print_r($binatang);
echo "<br>";

echo "<hr>";

//menambahkan elemen
//mengunakan index

$hari[3] = 'kamis';
print_r ($hari);
echo "<br>";

$hari[] = "jum'at";
$hari[] = 'sabtu';
print_r($hari);

echo "<hr>";

//menambah elemen diakhir array menggunakan array push

array_push($bulan, 'april','mei', 'juni','juli');
print_r($bulan);
echo "<br>";

array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";

//menghapus elemen dibelakang array
array_pop($hari);
print_r($hari);
echo "<hr>";

array_shift($bulan);
print_r($bulan);

?>