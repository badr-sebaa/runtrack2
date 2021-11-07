<?php

$_GET = ['name','email'] ; 
$var=0;
for($i= 0; isset($_GET[$i]);$i++){
    $var++;
}
echo 'Le nombre de variables GET est de : '.$var;  
?>


<body>
    
    <form action="index.php" method="get">

    <label for="name">Enter your name: </label>
    <input type="text" name="name"  >
    
    <label for="email">Enter your email: </label>
    <input type="email" name="email" >
     
    <input type="submit" value="Envoyer">
    </form>

</body>