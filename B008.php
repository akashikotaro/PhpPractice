<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $N = $line[0][0];   //会員数
    $M = $line[0][1];   //イベント数
    $sum;               //利益
    $sumttl = 0;        //利益の総計

    for($i=1;$i<$M+1;$i++){
        $sum = 0;
        for($j=0;$j<$N;$j++){
            $sum += $line[$i][$j];
        }
        if($sum > 0){
            $sumttl += $sum;
        }
    }
    echo $sumttl;
?>
