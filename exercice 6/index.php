<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
</head>
<body>
<h1>exercice 6</h1>
<p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>


<?php

for ($varPas = 20; $varPas >= 0; $varPas--){
    echo $varPas .' ' . 'C\'est presque bon.','<br>';
}

?>
    
</body>
</html>