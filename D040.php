<?php

$k++;
}

unset($line[$k-1]);

foreach($line as $value){
  if($value <= 30){
      $sum = $sum + 1;
  }
  $i++;
}

echo $sum;

?>
