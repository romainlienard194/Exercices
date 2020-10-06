<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 1</title>

    <nav>
        <ul>
            <li><a href="exo2_1php.php" title="Exercice 2">Exercice 2</a></li>
            <li><a href="exo3php.php" title="Exercice 3">Exercice 3</a></li>
        </ul>
    </nav>
</head>
<body>
    <?php 
        $NombreAleatoire = rand (0,100);

        if($NombreAleatoire%2 == 1){

            echo '<div class="paire"> Paire </div>';
            
        }else{
            
            echo '<div class="impaire"> Impaire </div>';
        }
    

    //Code source//
    highlight_file(__FILE__);
    ?>
</body>
</html>