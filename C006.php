<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ){
      $a[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }

    unset($a[$k-1]);

    $cnt = count($a[0]);
    $i = 0;

    while($i < $cnt){
        $C[$i] = $a[0][$i];
        $i++;
    }

    $cnt2 = count($a[1]);
    $j = 0;

    while($j < $cnt2){
        $X[$j] = $a[1][$j];
        $j++;
    }

    $cnt3 = count($a) -2;
    $k = 0;
    $l = 0;
    $score[] = 0;

    //var_dump($a);

    while($k < $cnt3){
        while($l < $cnt2){
            $score[$k] += $X[$l] * $a[$k+2][$l];
            //echo $X[$l] ." " . $a[$k+2][$l] . "\n";
            $l++;
        }
        $l = 0;
        $k++;
    }

    //var_dump($a);
    rsort($score);
    //var_dump($score);

    $m = 0;

    while($m < $C[2]){
        echo round($score[$m]) . "\n";
        $m++;
    }
?>
