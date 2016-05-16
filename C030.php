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

    $h = $line[0][0];
    $w = $line[0][1];

    for($i=1;$i<$h+1;$i++){
        for($j=0;$j<$w;$j++){
            if($line[$i][$j] <= 127){
                echo 0;
            }else{
                echo 1;
            }

            if($j==$w-1){
                echo "\n";
            }else{
                echo " ";
            }

        }
    }
?>
