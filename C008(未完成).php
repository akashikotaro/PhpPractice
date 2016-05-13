<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $a[$k] = explode(" ",trim(fgets(STDIN)));
      $line[$k] = trim(fgets(STDIN));
      $k++;
    }

    unset($a[$k-1]);
    //var_dump($a[0]);

    preg_match("/".$a[0][0].$a[0][1]."/", $line[1],$mch);

    var_dump($mch);
    echo $mch;

?>
