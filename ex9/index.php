<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - ex9</title>
</head>

<body>

    <h1>Partie 5 - ex9</h1>

    <p>
        Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

        Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
    </p>

    <?php
        
        // Déclaration des variables
        $year = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
        $dept = ['02'=>'aisne', '59'=>'nord', '60'=>'oise', '62'=>'pas-de-calais', '80'=>'somme'];

        // affichage du tableau
        foreach($dept as $value) {
            echo $value. '<br>';
        }

    ?>

</body>

</html>