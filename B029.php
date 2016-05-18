<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $X = $line[0][0];
    $Y = $line[0][1];
    $K = $line[1][0];
    $N = $line[2][0];

    $ROOT = sqrt(pow($X,2) + pow($Y,2));

    for($i=3;$i<$N+3;$i++){
        $x = $line[$i][0];
        $y = $line[$i][1];
        $p = $line[$i][2];
        $root[$i-3] = sqrt(pow($X - $x,2) + pow($Y - $y,2));
    }

    asort($root);
    $keys = array_keys($root);

    $ttl = 0;

    for($j=0;$j<$K;$j++){
        $key = $keys[$j];
        $ttl += $line[$key+3][2];
    }

    echo round($ttl / $K);



?>
