<?php

function showCookie()
{
    if (isset($_COOKIE['Login']) && isset($_COOKIE['Motdepasse'])) {
        var_dump($_COOKIE);
    } else {
        return 'Vous n\'avez pas de cookie enregistré';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <h1>Exercice 4</h1>
    <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>

    <p><?= showCookie() ?></p>

</body>

</html>