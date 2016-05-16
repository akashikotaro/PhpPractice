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

    $num = $line[0][0]; //テストデータの行数
    $no;
    $no2;               //文字列の文字数
    $total = 0;         //合計点

    for($i=1;$i<$num+1;$i++){             //テストデータの最後の行まで繰り返す
        $no = iconv_strlen($line[$i][0]);     //正解の単語の文字数を代入
        $no2 = iconv_strlen($line[$i][1]);      //回答の単語の文字数を代入

        if($no == $no2){  //正解と回答の文字数が一致
            $cnt = 0;
            for($j=0;$j<$no;$j++){       //1文字目から正解と回答の単語を比較して、一致していれば$cntをカウントしていく
                if(substr($line[$i][0],$j,1) == substr($line[$i][1],$j,1)){
                        $cnt = $cnt + 1;
                }
            }
            //echo $cnt." ".$no."\n";
            if($cnt == $no){              //$cntと文字数が一致、つまり正解と回答の単語が一致している場合
                $total = $total + 2;      //$totalに＋２
            }elseif($cnt == $no -1){      //$cntと比較して文字数より1少ない、つまり1文字以外全て一致している場合
                $total = $total + 1;      //$totalに＋１
            }
        }
    }

    echo $total;

?>
