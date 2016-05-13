<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $cnt = 0;

    //var_dump($line[2]);
    //var_dump($line[0]);
    echo array_search($line[0],$line[2]);

    for($i=2;$i<$line[1][0]+2;$i++){
        //$cnt = $cnt + array_intersect($line[0],$line[$i]);
        //var_dump($line[$i]);
        //echo $line[$i]." ";
        //echo "cnt=".$cnt."\n";
    }

    //var_dump($line);

?>
