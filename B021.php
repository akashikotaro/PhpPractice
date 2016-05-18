<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $k = 0;

    while ( ! feof(STDIN) ) {
      $line[$k] = explode(" ",trim(fgets(STDIN)));
      $k++;
    }
    unset($line[$k-1]);

    $num = $line[0][0];

    for($i=1;$i<$num+1;$i++){
        $sub = substr($line[$i][0],-2);
        $flag = 0;
        switch($sub){
            case "sh":
            case "ch":
                echo $line[$i][0]."es\n";
                $flag = 1;
                break;
            case "fe":
                echo substr($line[$i][0],0,-2)."ves\n";
                $flag = 1;
                break;
        }

        if($flag == 0){
            $sub2 = substr($line[$i][0],-1);
            switch($sub2){
                case "s":
                case "o":
                case "x":
                    echo $line[$i][0]."es\n";
                    break;
                case "f":
                    echo substr($line[$i][0],0,-1)."ves\n";
                    break;
                case "y":
                    if(substr($line[$i][0],-2,-1) != "a" && substr($line[$i][0],-2,-1) != "i" && substr($line[$i][0],-2,-1) != "u" && substr($line[$i][0],-2,-1) != "e" && substr($line[$i][0],-2,-1) != "o"){
                        echo substr($line[$i][0],0,-1)."ies\n";
                    }else{
                        echo $line[$i][0]."s\n";
                    }
                    break;
                default:
                    echo $line[$i][0]."s\n";
            }
        }
    }

?>
