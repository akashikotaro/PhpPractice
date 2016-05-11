<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");
    $a = explode(" ",$input_lines);

    echo floor($a[0] / $a[1]);
    echo " ";
    echo $a[0] % $a[1];

?>
