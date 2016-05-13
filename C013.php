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
    $m = $line[1][0];
    $flag = 0;

    for($i=2;$i<$m+2;$i++){
        if(strpos($line[$i][0],$n) === false){
            echo $line[$i][0]."\n";
            $flag = 1;
        }
    }

    if($flag == 0){
        echo "none\n";
    }

?>
