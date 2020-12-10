<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - ex4</title>
</head>

<body>

    <h1>Partie 5 - ex4</h1>

    <p>
        Créer un tableau months et l'initialiser avec les valeurs suivantes :

        janvier
        février
        mars
        avril
        mai
        juin
        juillet
        aout
        septembre
        octobre
        novembre
        décembre

        Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
    </p>

    <?php
        
        // Déclaration des variables
        $array = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];

        // test affichage
        foreach($array as $month){
            if($month == 'aout'){
                $month = 'août';
            }
            echo $month. '<br>';
        }

        // $array[7] = 'août';
        // echo $array[7];
    ?>

</body>

</html>