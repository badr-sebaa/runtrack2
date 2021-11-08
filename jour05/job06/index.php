<?php

function leetspeak($str){
    
    for($i=0;isset($str[$i]);$i++){
   
        switch ($str[$i]) {
            case $str[$i] == 'a' or $str[$i] == 'A':
                $str[$i] = '4';
                break;
            case $str[$i] == 'b' or $str[$i] == 'B':
                $str[$i] = '8';
                break;
            case $str[$i] == 'e' or $str[$i] == 'E':
                $str[$i] = '3';
                break;
            case $str[$i] == 'g' or $str[$i] == 'G':
                $str[$i] = '6';
                break;
            case $str[$i] == 'l' or $str[$i] == 'L':
                $str[$i] = '1';
                break;
            case $str[$i] == 's' or $str[$i] == 'S':
                $str[$i] = '5'; 
                break;
            case $str[$i] == 't' or $str[$i] == 'T':
                $str[$i] = '7';
                break;
            default:
                $str[$i]  = $str[$i];
                break;
        }

    }
    return $str;
} 

$speak = leetspeak($_GET['txt']);
?>





<form action="index.php" method="get">

    <label for="txt">Ecrire une phrase: </label>
    <input type="text" name="txt" >

    <input type="submit" value="Envoyer">
</form> 

<?php
    if (isset($_GET['txt'])) {
    echo $speak;
    }
?>