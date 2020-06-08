<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 8</title>
</head>
<body>
<h1>exercice 8</h1>
<span>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</span>


<?php

for ($varPas = 200; $varPas >= 0; $varPas -=12 ){
    echo $varPas .' ' . 'Enfin !!!!','<br>';
}

?>
    
</body>
</html>