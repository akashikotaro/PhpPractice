<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = trim(fgets(STDIN));
      $k++;
    }

    unset($line[$k-1]);

    $array =  array_count_values($line);

    echo $array["no"];

?>
