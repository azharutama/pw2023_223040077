<?php
function angka($nomor)
{
  $nilai = "*";
  for ($x = 1; $x <= $nomor; $x++) {
    for ($y = 1; $y <= $x; $y++) {
      echo  $nilai++ . " ";
    }
    echo "<br>";
  }
}

angka(7);