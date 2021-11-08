<?php
$i =0;
if(isset($_GET['height']) and isset($_GET['width'])){

    while( $i <= $_GET['height']){
        echo '|'.'<br/>';
    
        if($i == 0 or $i == $_GET['height']){
            for($y = 0 ; $y <= $_GET['width'];$y++){
             echo '_';
            }
        }
    }
}


?>



<form action="index.php" method="get">

    <label for="height">Hauteur : </label>
    <input type="text" name="height"  >

    <label for="width">Largeur : </label>
    <input type="text" name="width"  >
     
    <input type="submit" value="Envoyer">
</form>