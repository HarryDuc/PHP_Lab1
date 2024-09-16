<?php
function ktnt($a) {
  if ($a < 2) {
    return 0;
  }
  for ($i = 2; $i < $a; $i++) {
    if ($a % $i == 0) {
      return 0;
    }
  }
  return 1;
}
function lietke() {
  for ($i = 0; $i < 100; $i++) {
    if (ktnt($i) == 1) {
      echo "$i, ";
    }
  }
}
echo lietke();

//c2
for($i = 2; $i <= 100; $i++) {
  $isPrime = true;
  for ($j=2; $j < sqrt($i); $j++) {
    if ($i % $j == 0) {
      $isPrime = false;
      break;
    }
  }
  if ($isPrime) {
    echo $i . " ";
  }
}