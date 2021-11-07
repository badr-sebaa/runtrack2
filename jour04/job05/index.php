<?php

if(isset($_POST['username']) and isset($_POST['password'])){

    if($_POST['username'] == 'john' and $_POST['password'] == 'rambo' ){
        echo 'C’est pas ma guerre';
    }

    else{echo 'Votre pire cauchemar';}
}

?>

<form action="index.php" method="post">

    <label for="username">Enter your Username: </label>
    <input type="text" name="username"  >
    
     <label for="password">Enter your Password: </label>
    <input type="password" name="password" >
     
    <input type="submit" value="Envoyer">
</form>