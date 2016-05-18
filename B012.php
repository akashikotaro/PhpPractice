<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    //echo substr($line[1][0],0,1);
    //var_dump($line);
    $num = $line[0][0];   //データの個数

    for($i=1;$i<$num+1;$i++){
        $even = 0;
        $eventtl = 0;
        $odd = 0;
        $oddttl = 0;

        for($j=0;$j<16;$j=$j+2){        //evenの計算
            $even = 2 * substr($line[$i][0],$j,1);
            if(strlen($even) == 2){
                $even = substr($even,0,1) + substr($even,1);
            }
            $eventtl = $eventtl + $even;
        }


        for($k=1;$k<15;$k=$k+2){        //oddの計算(X以外)
            $odd = substr($line[$i][0],$k,1);
            $oddttl = $oddttl + $odd;
        }


        for($l=0;$l<10;$l++){           //$lをずつ増やしていき、10で割り切れるまで繰り返す
            if(($eventtl + $oddttl + $l) % 10 == 0){    //10で割り切れたら繰り返しを終了する。その時点での$lがxの値。
                    break;
            }
        }
        echo $l."\n";
    }

?>
