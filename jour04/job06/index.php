<?php

if(isset($_GET['number'])){

    if($_GET['number'] % 2 == 1){
        echo 'Le nombre est impair !';
    }

    else{ echo 'Le nombre est pair !';}
}


?>

<form action="index.php" method="get">

    <label for="number">Enter a number: </label>
    <input type="text" name="number"  >

     
    <input type="submit" value="Envoyer">
    </form>