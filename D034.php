<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);

    $menu = 21 % $input_lines;

    if($menu == 0){
        echo $input_lines;
    }else{
        echo $menu;
    }

?>
