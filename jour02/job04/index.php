<?php

$number=0;

while($number<=99):
    if(!($number%3) and !($number%5)){
    echo "<br/>"."FizzBuzz";
     }
    elseif(!($number%5)){
        echo "<br/>"."Buzz";
         }
    elseif(!($number%3)){
        echo "<br/>"."Fizz";
    }
    else{echo "<br/>".$number;}
    $number++;
endwhile;
?>