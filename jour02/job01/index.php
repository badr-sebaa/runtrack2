<?php

$number=0;

while($number<=1337):
    if($number==42){
        echo "<br/>"."<b><u>".$number."</b></u>";
    }
    echo "<br/>".$number;
    $number++;
endwhile;
?>