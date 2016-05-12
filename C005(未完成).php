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

        if(strlen($a[$k] < 4)){
            for($m=0;$m<4;$m++){
                if(0 <= $a[$m] && $a[$m] <= 255){
                    echo "True\n";
                    echo $a[0]." ".$a[1]." ".$a[2]." ".$a[3];
                    break;
                }else{
                    echo "False\n";
                    echo $a[0]." ".$a[1]." ".$a[2]." ".$a[3];
                    break;
                }
            }
        }else{
            echo "False\n";
            echo $a[0]." ".$a[1]." ".$a[2]." ".$a[3];
            echo "strlen>4\n";
        }

        $k++;
    }

?>
