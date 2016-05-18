<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $a = $line[0][0];    //配座駅へいくまでの時間
    $b = $line[0][1];    //配座駅から儀野駅の乗車時間
    $c = $line[0][2];    //儀野駅から会社までの時間
    $num = $line[1][0];  //データの個数
    $bcttl = $b + $c;     //配座からの電車にかかる時間の総計
    $time = 0;
    $hour = 0;
    $minute = 0;

    for($i=$num+1;$i>1;$i--){       //最後から見て条件に当てはまるデータを探す
        $hour = $line[$i][0];       //時間
        $minute = $line[$i][1];     //分
        $time = $bcttl + $minute;  //配座駅からの時間と分の総計
        $flag = 0;

        while($time >= 60){         //到着時間を計算
            $hour += 1;
            $time -= 60;
            $flag += 1;
        }

        if($hour <= 8 && $time <= 59){  //到着時間が8:59前であれば繰り返しを抜ける
            if($flag > 0){
                $hour -= $flag;
            }
            break;
        }
    }

    if(($minute - $a) < 0){
        $hour -= 1;
        $minute = 60 + ($minute - $a);
    }else{
        $minute = $minute - $a;
    }

    echo sprintf('%02d:%02d',$hour,$minute);

?>
