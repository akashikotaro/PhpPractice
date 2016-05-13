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

    //var_dump($line[0]);
    //var_dump($line);

    $a = $line[0][0];
    $b = $line[0][1];
    $R = $line[0][2];
    $N = $line[1][0];
    //echo $a.",".$b.",".$R;
    //echo $line[1][0];

    for($i=2;$i<=$N+1;$i++){
        $result = pow($line[$i][0] - $a,2) + pow($line[$i][1] - $b,2);
        if($result >= pow($R,2)){
            echo "silent\n";
        }else{
            echo "noisy\n";
        }
        //echo $result." ".pow($R,2)."\n";
    }




?>
