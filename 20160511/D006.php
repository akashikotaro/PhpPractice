<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");
    $a = explode(" ",$input_lines);

    $sum;

    switch($a[1]){
        case "km":
            $sum = $a[0] * 1000000;
            break;
        case "m":
            $sum = $a[0] * 1000;
            break;
        case "cm":
            $sum = $a[0] * 10;
            break;
    }

    echo $sum;

?>
