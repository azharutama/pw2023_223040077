<?php 
$rLuas = 10;
$rKeliling = 20;


function luas($r)
{
  return 3.14 * $r * $r;
}

function KeliLing($r)
{
  return 2 * 3.14 * $r;
}

echo "<h4>Menghitung Luas Lingkaran</h4><br>";
echo "Jari-jari = $rLuas <br>";
echo "Luas Lingkaran = " . luas($rLuas) . "<br>";
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4><br>";
echo "Jari-jari = $rKeliling <br>";
echo "Keliling Lingkaran = " . Keliling($rKeliling) . "<br>";
echo "<hr>";



?>