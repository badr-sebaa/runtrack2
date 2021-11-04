<?php

$str = 'On n est pas le meilleur quand on le croit mais quand on le sait';

$dic=   [
            ['Voyelles' =>    'a','e','i','o','u','y','A', 'E', 'I', 'O', 'U','Y',],
            ['Consonnes' =>   'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z','b' ,'c' , 'd' , 'f' , 'g' , 'h' , 'j' , 'k' , 'l' , 'm', 'n' , 'p' ,
                              'q' , 'r' , 's' , 't' , 'v' , 'w' , 'x' , 'z' ]
        ];

        foreach($str as $char){
            foreach($dic as $line){
                foreach($line as $cle=>$value){
                    if($char == $value){
                    $voyelles++;
                }
                    else{$consonnes++;}
                }
            }
        }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th scope="col">Voyelles</th>
                <th scope="col">Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $voyelles ;?></th>
                <th><?php echo $consonnes ;?></th>
            </tr>
        </tbody>
    </table>
</body>
</html>