<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - ex10</title>
</head>

<body>

    <h1>Partie 5 - ex10</h1>

    <p>
    Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
    Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département  

    </p>

    <?php
        
        // Déclaration des variables
        $year = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
        $dept = ['02'=>'aisne', '59'=>'nord', '60'=>'oise', '62'=>'pas-de-calais', '80'=>'somme'];

        // affichage du tableau
        foreach($dept as $index => $item) {
            echo 'dept n° ' .$index. ' : ' .$item. '<br>';
        }

    ?>

</body>

</html>