<?php
function angka($nomor)
{
  $nilai = 1;
  for ($x = 1; $x <= $nomor; $x++) {
    for ($y = 1; $y <= $x; $y++) {
      echo  $nilai++ . " ";
    }
    echo "<br>";
  }
}

angka(7);