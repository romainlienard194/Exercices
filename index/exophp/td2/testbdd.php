<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=k, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo 'saluuuuuut !!!!! ';

        try{

            //code bdd
            $maBase=new PDO('mysql:host=192.168.65.138; dbname=ex2td2romain;
            charset=utf8','siteweb','siteweb');
            echo 'Je suis connecté.';

            $LesDonneesBrutesDeLaBdd = $maBase->query("SELECT * FROM `médicament`");
            echo " J'ai fait une requête de ".$LesDonneesBrutesDeLaBdd->rowCount()." Tuple";

            while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch()){
            echo $TableauDeDonnée["nom"] ;
            }
            $LesDonneesBrutesDeLaBdd ->closeCursor();


        }catch(Exception $e){

            echo "J'ai un problème".$e->getMessage();

        }
        
    ?>
</body>

</html>