<?php

function bonjour($jour){

    if($jour == true){
        echo 'Bonjour !';
    }

    else{echo 'Bonsoir  !';}
}

echo 'test true :'.'<br/>';
bonjour(true);
echo '<br/>';
echo 'test false :'.'<br/>';
bonjour(false);
?>