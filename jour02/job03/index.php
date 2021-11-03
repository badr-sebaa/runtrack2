<?php

$i=0;

while($i<=99):
    $i++;
    if($i <= 20){
    echo "<br/>"."<i>".$i."</i>";
     }
    elseif($i >= 25 and $i <=50 and $i != 42){
        echo "<br/>"."<u>".$i."</u>";
         }
    elseif($i == 42){
        echo "<br/>"."La Plateforme_";
    }
    else{echo "<br/>".$i;}
endwhile;
?>