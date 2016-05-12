<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);

    $num = $input_lines % 2;

    if($num == 0){
        echo "even";
    }else{
        echo "odd";
    }

?>
