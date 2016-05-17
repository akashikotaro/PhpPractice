<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $in = trim(fgets(STDIN));
    while($in){
        $line[] = $in;
        $in = trim(fgets(STDIN));
    }

    //var_dump($line);

    $num1 = $line[0];
    $num2 = $line[$num1+1];
    $flag = 0;

    for($i=0;$i<$num1;$i++){
        $line2[$i] = explode(" ", $line[$i+1]);
    }

    for($h=0;$h<$num2;$h++){
        $line3[$h] = explode(" ", $line[$h+$num1+2]);
    }

    //var_dump($line2);
    //var_dump($line3);

    for($d=0;$d<$num1;$d++){
        for($k=0;$k<$num2;$k++){
            if($line2[$d][0] == $line3[$k][0]){
                $cnt[$d] = floor($line3[$k][1] / $line2[$d][1]);
                $flag++;
            }
        }
    }

    //var_dump($cnt);

    if($flag != $num1){
        echo "0\n";
    }else{
        echo min($cnt);
    }

?>
