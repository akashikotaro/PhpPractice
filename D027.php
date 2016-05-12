<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $i = 1;
    $sum = 0;

    while($i <= $input_lines){
        $sum = $sum + $i;
        $i++;
    }

    echo $sum;

?>
