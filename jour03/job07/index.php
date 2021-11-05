<?php

$str = 'Certaines choses changent, et d autres ne changeront jamais.'; 
 
        $var1 = $str[-1];
        $str[-1] = $str[0];
        $str[0] = $var1;

echo $str;

?>
