<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);
    $result = 0;

    for($i=1;$i<$line[0][0]+1;$i++){
        if($result > $line[$i][2]){
            $result = $line[$i][2];
            $result2 = $line[$i][3];
        }else{
            $result= $line[$i][2];
            $result2 = $line[$i][3];
        }
        $max[0][$i] = $result;
        $min[0][$i] = $result2;
        //echo "i=".$i."\n";
    }

    echo $line[1][0]." ";
    echo $line[$line[0][0]][1]." ";
    echo max($max[0])." ";
    echo min($min[0]);

    //var_dump($line);
?>
