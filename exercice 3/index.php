<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>
<body>
<h1>exercice 3</h1>
<span>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.</span> 
<span>Tant que la première variable n'est pas inférieure ou égale à 10 :</span>
<span>- multiplier la première variable avec la deuxième</span>
<span>- afficher le résultat</span>
<span>- décrémenter la première variable</span>


<?php

$varA = 100;
$varB = 42;

while ($varA >= 10){
    echo $varA-- * $varB. '<br>';
}

?>
    
</body>
</html>