<?php

$numbers = [200, 204, 173, 98, 171, 404, 459];

for($i = 0 ; $i < 7; $i++){
    
    if($numbers[$i] % 2 == 1){
        echo $numbers[$i].' est impair !'.'<br/>';
    }
    else{echo $numbers[$i].' est pair !'.'<br/>';}
}

?>