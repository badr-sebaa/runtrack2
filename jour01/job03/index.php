<?php

$int = 5;
$bool = true;
$str = "hello";
$float = 5.5;
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
                <th scope="col">Type</th>
                <th scope="col">Nom</th>
                <th scope="col">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Entier</th>
                <th>int</th>
                <th><?php echo $int ?></th>
            </tr>   

            <tr>
                <th>Boolean</th>
                <th>Bool</th>
                <th><?php echo $bool ?></th>
            </tr>

            <tr>
                <th>String</th>
                <th>str</th>
                <th><?php echo $str ?></th>
            </tr>

            <tr>
                <th>Float</th>
                <th>float</th>
                <th><?php echo $float ?></th>
            </tr>
        </tbody>
    </table>
</body>
</html>