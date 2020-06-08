<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>
<body>
<h1>exercice 4</h1>
<span>Créer une variable et l'initialiser à 1.</span>  
<span>Tant que cette variable n'atteint pas 10, il faut :</span>
<span>- l'afficher</span>
<span>- l'incrementer de la moitié de sa valeur</span>


<?php

$varA = 1;

while ($varA <= 10){
    echo $varA, '<br>';
    $varA += $varA /2;
}

?>
    
</body>
</html>