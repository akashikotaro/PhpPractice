<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");
    while($input_lines > 0){
        echo $input_lines;
        echo "\n";
        $input_lines = $input_lines - 1;
    }
?>
