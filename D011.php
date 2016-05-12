<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");

    $all = range('A','Z');
    echo array_search($input_lines,$all,true) + 1;

?>
