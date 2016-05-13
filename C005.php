<?php

    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = trim(fgets(STDIN));
      $k++;
    }

    unset($line[$k-1]);

    $k = 0;

    for($i=1;$i<=$line[0];$i++){
        $a = explode(".",$line[$i]);
        $cnt = count($a);
        $cnt2 = 0;

        if($cnt == 4){
            for($m=0;$m<4;$m++){
                if(0 <= $a[$m] && $a[$m] <= 255){
                    $cnt2 = $cnt2 + 1;
                }else{
                    echo "False\n";
                    break;
                }
                if($cnt2 == 4){
                    echo "True\n";
                    break;
                }
            }
        }else{
            echo "False\n";
        }

    }

?>
