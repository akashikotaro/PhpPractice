<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      //$line[$k] = trim(fgets(STDIN));
      $k++;
    }

    unset($line[$k-1]);

    $a = $line[0][0];
    $b = $line[0][1];
    $n = $line[1][0];


    for($i=2;$i<$n+2;$i++){
        if($line[$i][0] < $a){
            echo "High\n";
        }elseif($line[$i][0] == $a && $line[$i][1] > $b){
                echo "High\n";
        }else{
            echo "Low\n";
        }
    }
?>
