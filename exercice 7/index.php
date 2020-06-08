<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 7</title>
</head>
<body>
<h1>exercice 7</h1>
<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>


<?php

for ($varPas = 1; $varPas <= 100; $varPas += 15){
    echo $varPas .' ' . 'On tient le bon bout.','<br>';
}

?>
    
</body>
</html>