<?php


    $k = 0;

    //入力されたデータを配列に代入
    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }

    $M = $line[0][0];   //1度に運べる紙の最大枚数
    $N = $line[1][0];   //1日にファックスが届く回数
    $sum = 0;           //1時間のファックスの数
    $total = 0;         //取りに行く回数

    unset($line[$k-1]);

    for($i=2;$i<$N+2;$i++){     //データのある場所からデータの最後まで繰り返す
        if($line[$i][0] == $line[$i+1][0]){     //もし次の配列との時間が一致していれば
            $sum += $line[$i][2];               //$sumにファックスの量を追加する
        }else{                                  //次の配列との時間が一致していなければ
            $sum += $line[$i][2];               //$sumのファックスの量を追加する
            if(($sum % $M) == 0){               //$sumと$Mが割り切れる場合
                $total += $sum / $M;            //$sum/$Mの値を$totalに追加する
            }else{                              //もし割り切れない場合
                $total += 1;                    //$sum/$Mの商＋1を$totalに代入する
                $total += floor($sum / $M);
            }
            $sum = 0;                           //$sumをリセットする
        }
    }

    echo $total;


?>
