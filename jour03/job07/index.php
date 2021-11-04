<?php

$str = 'Certaines choses changent, et d autres ne changeront jamais.'; 

for($i=0;isset($str[$i]);$i++){
    for($y=1;isset($str[$y]);$y++){
        if($i == 0){
        $var1 = $str[$i-1];
        $str[$i-1] = $str[$i];
        $str[$i] = $var1;
        }
        else{
        $var1 = $str[$y];
        $str[$y] = $str[$i];
        $str[$i] = $var1;
        }
        
    }
}
echo $str;
?>
