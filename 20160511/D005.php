<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");
    $a = explode(" ",$input_lines);


    $b = 0;
    $i = 10;

    echo $a[0];

    while($i > 1){
        $a[0] = $a[0] + $a[1];
        echo " ";
        echo $a[0];
        $i--;
    }

?>
