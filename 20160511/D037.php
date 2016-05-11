<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $array = explode("\n", $input_lines);
    $array = array_map('trim', $array);

    $M = $array[0];
    $N = $array[1];

    $sum = $N / $M;
    $sum2 = $N % $M;
    $sum3;

    if($sum2 > 0){
        $sum2 = $sum2 + 1;
    }

    echo $sum2;

?>
