<?php

function nbPremier($number) {

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

for ($i = 3; $i < 1000; $i++) {
    if (nbPremier($i)) {
        echo "<br/>".$i;
    }
}

?>