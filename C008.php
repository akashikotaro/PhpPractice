<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }

    unset($line[$k-1]);

    $tag1 = $line[0][0];
    $tag2 = $line[0][1];

    $line2[0] = explode($tag1,$line[1][0]);
    //var_dump($line2);

    for($i=0;$i<count($line2[0]);$i++){
        //echo $i."=".strpos($line2[0][$i],$tag2)."\n";
        if(strpos($line2[0][$i],$tag2) === 0){
            echo "<blank>\n";
        }elseif(strpos($line2[0][$i],$tag2) !== false){
            echo strstr($line2[0][$i],$tag2,true)."\n";
        }

    }



?>
