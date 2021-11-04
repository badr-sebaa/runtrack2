<?php

$str = 'I /d m sorry Dave I /d m afraid I can /d t
do that.';

for($i = 0; isset($str[$i]);$i++){

    switch ($str[$i]) {
        case 'a':
            echo $str[$i].'';
            break;
        case 'e':
            echo $str[$i].'';
            break;
        case 'i':
            echo $str[$i].'';
            break;
        case 'o':
            echo $str[$i].'';
            break;
        case 'u':
            echo $str[$i].'';
            break;
        case 'y':
            echo $str[$i].'';
            break;
        case 'I':
            echo $str[$i].'';    
            break; 
    }

}

?>  