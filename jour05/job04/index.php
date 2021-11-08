<?php

    function calcul($a,$operation,$b){
        
        switch ($operation) {
            case '+':
                return $a + $b;
                
            case '-':
                return $a - $b;
                
            case '*':
                return $a * $b;
                
            case '/':
                return $a / $b;
    }
}

$resultat = calcul($_GET['num1'],$_GET['op'],$_GET['num2']);
     
?>

<form action="index.php" method="get">

    <label for="num1">Enter first number: </label>
    <input type="text" name="num1"  >
    
    
     

    <label for="operator">Choose an operator:</label>

    <select name="op" id="pet-select">    
        <option value="">--Please choose an operator--</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="+">+</option>
    </select>

    <label for="num2">Enter second number: </label>
    <input type="text" name="num2" >

    <input type="submit" value="Envoyer">
</form>

<?php
    if (isset($_GET['num1']) and isset($_GET['op']) and isset($_GET['num2'])) {
    echo 'LE RESULTAT EST : '.$resultat;
    }
?>
   