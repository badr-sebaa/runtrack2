<?php

$maj = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z'];

    function gras($str){
        
        for($i = 0; isset($str[$i]);$i++){
            for($y=0 ; isset($maj[$y]);$y++){
                if($i = 0 and $str[$i] == $maj[$y]){
                    while($str[$i] != ' '){
                        echo '<b>'.$str[$i].'</b>';
                    }
                }
                
                elseif($str[$i-1] == ' ' and $str[$i] == $maj[$y]){
                    while($str[$i] != ' '){
                        echo '<b>'.$str[$i].'</b>';
                    }
                }
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

