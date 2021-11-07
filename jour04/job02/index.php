

<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="index.php" method="get">

    <label for="name">Enter your name: </label>
    <input type="text" name="name"  >
    
     <label for="email">Enter your email: </label>
    <input type="email" name="mail" >
     
    <input type="submit" value="Envoyer">
    </form>

    </br>

    <table>
        <thead>
            <tr>
                <th scope="col">Arguments</th>
                <th scope="col">Valeurs</th>
            </tr>
        </thead>
        <tbody>
            <?php

                foreach($_GET as $key => $value){
                    echo '<tr>
                             <th>'.$key.'</th>'.
                            '<th>'.$value.'</th>
                         </tr>'.'<br/>';
}

?>
        </tbody>
    </table>



