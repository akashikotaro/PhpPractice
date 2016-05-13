<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $var1 = 0;
    $var2 = 0;

    for($i=1;$i<$line[0][0]+1;$i++){
        switch($line[$i][0]){
            case "SET":
                if($line[$i][1] == 1){
                    $var1 = $line[$i][2];
                }else{
                    $var2 = $line[$i][2];
                }
                break;
            case "ADD":
                $var2 = $var1 + $line[$i][1];
                break;
            case "SUB":
                $var2 = $var1 - $line[$i][1];
                break;
        }
    }

    echo $var1." ".$var2;

    //var_dump($line);

?>
