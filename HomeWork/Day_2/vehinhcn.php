<?php
$n = 3;
$m = 5;
    for($i = 0; $i<$n; $i++){
      for($j = 0; $j<$m; $j++){
          if($i == 0 || $i == $n-1 || $j == 0 || $j == $m-1){
              echo "* ";
          }else{
              echo "  ";
          }
      }
      echo '<br>';
  }