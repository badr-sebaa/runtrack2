<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <!-- CONNECTION ET SELECTION DE LA DB-->
    <?php
        $bdd  =mysqli_connect("localhost" , "root" ,"root","jour08");
        $req = mysqli_query($bdd , "SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");
        $res = mysqli_fetch_all($req);
        
    ?>

        <!-- CREATION DU TABLEAU -->

        <table>
            <!-- entete du tableau -->
    <thead>
    <tr> 
        <th scope="col">Prenom</th>
        <th scope="col">Nom</th>
        <th scope="col">Naissance</th>
    </tr>
    </thead>
            <!-- corps du tableau -->
    <tbody>
        <?php
        foreach($res AS $key => $value){
            echo '<tr>';
            foreach($value AS $key2 => $value2){
            echo '<th>'.$value2.'</th>';
            }
            echo '</tr>';
        }
        ?>  
    </tbody>    
    </table>
    
    </body>
    </html>


