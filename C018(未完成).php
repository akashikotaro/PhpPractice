<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    //var_dump($line);

    $num1 = $line[0][0];
    $num2 = $line[$num1+1][0];
    $cnt;

    for($i=1;$i<$num1+1;$i++){
        for($k=$num2;$k<$num1+$num2;$k++){
            if($line[$i][0] == $line[$k][0]){
                $cnt[$i] = floor($line[$k][1] / $line[$i][1]);
            }
        }
    }

    echo $cnt[1];

?>
