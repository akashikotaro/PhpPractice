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

    $n = $line[0][0];

    //var_dump($line);

    for($i=1;$i<$n+1;$i++){
        $cnt = 1;
        $sum = 0;

        for($j=0;$j<$line[$i][0];$j++){
            if(($line[$i][0] % $cnt) == 0 && $line[$i][0] != $cnt){
                $sum = $sum + $cnt;
                //echo "j=".$j."\n";
                /*
                echo "line=".$line[$i][0]."\n";
                echo "あまり=".$line[$i][0] % $cnt."\n";
                echo "sum=".$sum."\n";
                echo "cnt=".$cnt."\n";
                */
            }
            //echo "sum=".$sum."\n";
            $cnt++;
        }

        //echo $sum." ".$cnt."\n";

        if($sum == $line[$i][0]){
            echo "perfect\n";
        }elseif(($line[$i][0] - $sum) == 1){
            echo "nearly\n";
        }else{
            echo "neither\n";
        }
    }

?>
