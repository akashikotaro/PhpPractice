<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $i = 1;
    $j = 0;

    while($i < 10){
        $a[$j] = $i * $input_lines;
        $i++;
        $j++;
    }

    echo implode(" ", $a);

    foreach($b as $value){
        echo $value;
    }

?>
