<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $n = $line[0][0];
    $r = $line[0][1]*2;

    for($i=0;$i<=$n;$i++){
        if($line[$i][0] >= $r && $line[$i][1] >= $r && $line[$i][2] >= $r){
            echo $i;
            echo "\n";
        }
    }

    //var_dump($line);

?>
