<?php

    function gras($str){
        
        for($i = 0; isset($str[$i]);$i++){
            for($y=0;$str[$y] != ' ';$y++)
            if(ctype_upper($str[$y])){

                    return '<b>'.$str[$y].'</b>';
            }
        }



    }

$result = gras($_GET['txt']);

echo $result;
     
?>

<form action="index.php" method="get">

    <label for="txt">Enter a text: </label>  
    <input type="text" name="txt" >
    

    <label for="pet-select">Choose an operator :</label>

    <select name="fonction" id="fonction">    
        <option value="">--Please choose an option--</option>
        <option value="gras">-</option>
        <option value="cesar">*</option>
        <option value="plateforme">/</option>
    </select>


    <input type="submit" value="Envoyer">
</form>

