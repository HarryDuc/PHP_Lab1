<?php
$tong = 0;
$tong2 = 0;
$n = 4;
for ($i=1; $i <= $n; $i++) {
  # code...
  for ($j=2; $j <= $n; $j++) {
    $tong = +(float) (1/$i) - (float)(1/$j);
  }
}

echo $tong;
