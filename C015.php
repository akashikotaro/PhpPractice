<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $point = 0;
    $num = $line[0][0];
    $total = 0;

    for($i=1;$i<$num+1;$i++){
        $day = $line[$i][0];
        $price = $line[$i][1];
        if(substr($day,0,1) == 3 or substr($day,-1,1) == 3){
            $total = $total + floor($price * 3 / 100);
        }elseif(substr($day,0,1) == 5 or substr($day,-1,1) == 5){
            $total = $total + floor($price * 5 / 100);
        }else{
            $total = $total + floor($price * 1 / 100);
        }
    }
    echo $total;
?>
