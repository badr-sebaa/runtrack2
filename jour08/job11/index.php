<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <!-- CONNECTION ET SELECTION DE LA DB-->
    <?php
        $bdd  =mysqli_connect("localhost" , "root" ,"root","jour08");
        $req = mysqli_query($bdd , "SELECT AVG(capacite) AS 'Capacite_Moyenne' FROM `salles` ");
        $res = mysqli_fetch_all($req);
        
    ?>

        <!-- CREATION DU TABLEAU -->

        <table>
            <!-- entete du tableau -->
    <thead>
    <tr> 
        <th scope="col">Capacite_Moyenne</th>

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


