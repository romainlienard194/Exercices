<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>

    <nav>
        <ul>
            <li><a href="#" title="exo1php.php">Exercice 1</a></li>
            <li><a href="#" title="exo2php.php">Exercice 2</a></li>
            <li><a href="#" title="exo3php.php">Exercice 3</a></li>
        </ul>
    </nav>
</head>
<body>
    <?php 
        $NombreAleatoire = rand (0,100);

        if($NombreAleatoire%2 == 1){

            echo "<div> test 1 </div>";
            
        }else{
            
            echo "<div> test 2 </div>";
        }
    

    //Code source//
    highlight_file(__FILE__);
    ?>
</body>
</html>