<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    //echo $input_lines;

    $search = array('A','E','G','I','O','S','Z');
    $replace = array(4,3,6,1,0,5,2);

    echo str_replace($search, $replace, $input_lines);

?>
