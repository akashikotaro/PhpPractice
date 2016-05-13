<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN),"\n");
    $a = explode(" ",$input_lines);

    //var_dump($a);

    $total = $a[0] - $a[0] * ($a[1]/100);
    echo $total - $total * ($a[2]/100);

?>
