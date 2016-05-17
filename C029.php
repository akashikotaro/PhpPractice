<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $M = $line[0][0];
    $N = $line[0][1];
    $cnt;
    $perttl;
    $num = 0;

    for($i=1;$i<$M+2-$N;$i++){
        for($j=0;$j<$N;$j++){
            $perttl[$i-1] += $line[$i+$j][1];
        }
    }

    $num = array_search(min($perttl),$perttl);
    echo $line[$num+1][0]." ".$line[$num+$N][0]."\n";

?>
