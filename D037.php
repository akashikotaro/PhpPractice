<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = trim(fgets(STDIN));
      $k++;
    }

    echo ceil($line[1]/$line[0]);

?>
