<?php 
  $hardware = [ "Motherboard", "Processor", "Hard Disk", "PC coller", "VGA card", "SSD" ];
  asort($hardware);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Macam macam perangkat keras komputer </h2>
<ol>
  <?php 
  for($i=0; $i <count($hardware); $i++ ){
  ?><li> <?= $hardware[$i]; ?></li> 
  <?php } ?>
</ol>
 

<h2>Macam macam perangkat keras terbaru</h2>
<ol>
<?php
array_push( $hardware, "Card Reader", "Modem");
asort($hardware);
foreach ($hardware as $H){?> 
   <li>
    <?= $H; ?>
   </li>
  <?php } ?>

</ol>

</body>
</html>