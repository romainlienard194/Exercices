<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 TD4</title>
</head>

<body>
<?php
    function afficher_requete_select($marequete){
        $sql = new PDO("mysql:host=localhost;dbname=exo2td2romain;charset=utf8;", "pi", "raspberry");

        $result = $sql->query($marequete);
    
        ?>
    
        <table>
            <?php 
    
            while($req = $result->fetch()) {
                echo "<tr><td>" . $req["numSS"] . " " . $req['nom'] . " " . $req['prenom'] . "</td></tr>";
            }
            ?>

        </table>
    
        <?php
    
    }
?>
</body>

</html>