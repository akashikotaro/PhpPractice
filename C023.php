<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    //var_dump($line[2]);
    //var_dump($line[0]);
    //echo array_search($line[0],$line[2]);

    for($i=2;$i<$line[1][0]+2;$i++){
        $cnt = 0;
        for($j=0;$j<6;$j++){
            for($k=0;$k<6;$k++){
                if($line[0][$j] == $line[$i][$k]){
                    $cnt++;
                }
            }
        }
        echo $cnt."\n";
    }


?>
