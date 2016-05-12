<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = trim(fgets(STDIN));
      $k++;
    }

    $i = $line[0];
    $j = 1;

    echo "Hello ";

    while($i > 0){
        echo $line[$j];
        $j++;
        $i--;
        if($i > 0){
            echo ",";
        }
    }

    echo ".";

?>
