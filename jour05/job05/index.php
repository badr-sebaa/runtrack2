<?php

    function occurrences($str,$char){
        $count;
        for($i=0;isset($str[$i]);$i++){
            
            if($str[$i] == $char){
                $count++;
            }

        }
        return $count;
    }

    $result = occurrences($_GET['txt'],$_GET['char']);
    
?>

<form action="index.php" method="get">

    <label for="txt">Ecrire une phrase: </label>
    <input type="text" name="txt" >
    
    <label for="char">Entrer un caractere : </label>
    <input type="text" name="char" >

    <input type="submit" value="Envoyer">
</form>   
     
<?php
    if (isset($_GET['txt']) and isset($_GET['char'])) {
    echo 'Il y a '.$result.' occurence de ce caractere dans cette phrase';
    }
?>
   