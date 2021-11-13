<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <!-- CONNECTION ET SELECTION DE LA DB-->
    <?php
        $bdd  =mysqli_connect("localhost" , "root" ,"root","jour08");
        $req = mysqli_query($bdd , "SELECT * FROM `salles` ORDER BY capacite ASC");
        $res = mysqli_fetch_all($req);
        
    ?>

        <!-- CREATION DU TABLEAU -->

        <table>
            <!-- entete du tableau -->
    <thead>
    <tr> 
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">id_etage</th>
        <th scope="col">capacite</th>
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


