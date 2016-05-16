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

    //var_dump($line);

    $xc = $line[0][0];
    $yc = $line[0][1];
    $r1 = $line[0][2];
    $r2 = $line[0][3];
    $n = $line[1][0];

    for($i=2;$i<$n+2;$i++){
        $x = $line[$i][0];
        $y = $line[$i][1];


        if(pow($r1,2) <= pow(($x - $xc),2) + pow(($y - $yc),2) && pow(($x - $xc),2) + pow(($y - $yc),2) <= pow($r2,2)){
            echo "yes\n";
        }else{
            echo "no\n";
        }

    }


?>
