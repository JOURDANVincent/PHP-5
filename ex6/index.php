<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - ex6</title>
</head>

<body>

    <h1>Partie 5 - ex6</h1>

    <p>
        Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

        Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
    </p>

    <?php
        
        // Déclaration des variables
        $dept = ['02'=>'aisne', '59'=>'nord', '60'=>'oise', '62'=>'pas-de-calais', '80'=>'somme'];

        echo $dept['59'];

        //boucle foreach
        foreach($dept as $index => $month){
            if ($index == '59') {
                echo $month;
            }
        }

    ?>

</body>

</html>