<?php

if (isset($_COOKIE['Login']) && $_COOKIE['Login'] != 'ok') {
    setcookie('Login', 'ok', time() + 365 * 24 * 3600, '/', null, false, true);
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>

<body>
    <h1>Exercice 5</h1>
    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>

    <p><?= var_dump($_COOKIE) ?></p>

</body>

</html>