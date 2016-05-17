<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    //入力されたデータを配列に代入
    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      //$line[$k] = trim(fgets(STDIN));
      $k++;
    }

    unset($line[$k-1]);

    $N = $line[0][0];   //データの個数
    $S = $line[0][1];   //糖分の基準値
    $p = $line[0][2];   //許容誤差

    $array;             //質量を格納する配列
    $flag = 0;          //条件を満たすにんじんがあるかどうかのフラグ

    for($i=1;$i<$N+1;$i++){         //糖分が許容範囲内のにんじんを検索
        if($line[$i][1] <= $S+$p && $line[$i][1] >= $S-$p){
            $array[$i] = $line[$i][0];
            $flag = 1;
        }
    }

    if($flag == 1){     //条件を満たすにんじんが見つかった場合、容量が一番大きいものを表示
        echo array_search(max($array),$array);
    }else{
        echo "not found";
    }

?>
