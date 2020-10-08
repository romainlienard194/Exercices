<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 4</title>

    <nav>
        <ul>
            <li><a href="exo1php.php" title="Exercice 1">Exercice 1</a></li>
            <li><a href="exo2_1php.php" title="Exercice 2.1">Exercice 2.1</a></li>
            <li><a href="exo2_2php.php" title="Exercice 2.2">Exercice 2.2</a></li>
            <li><a href="exo3php.php" title="Exercice 3">Exercice 3</a></li>
            <li><a href="exo4php.php" title="Exercice 4">Exercice 4</a></li>
        </ul>
    </nav>
</head>
<body>

        <form action="formulaire.php" method="POST">
        
        <p> Votre prénom : <input type="text" name ="nom"/> </p>
        <p> Votre âge : <input type="text" name ="age"/> </p>
        <p><input type="submit" name ="OK"/> </p>

        </form>

    
    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>
</body>