<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");
    $a = explode(" ",$input_lines);

    echo substr($a[0],0,1) . "." . substr($a[1],0,1);

?>
