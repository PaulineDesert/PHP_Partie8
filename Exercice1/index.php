<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>

    <h1>Exercice 1</h1>
    <p>Faire une page HTML permettant de donner à l'utilisateur :
        son User Agent
        son adresse ip
        le nom du serveur</p>
    <p><?= 'User Agent : ' . $_SERVER['HTTP_USER_AGENT'] . '<br>' . 'Adresse IP : ' . $_SERVER['SERVER_ADDR'] . '<br>' . 'Nom du serveur : ' . $_SERVER['SERVER_NAME'] ?></p>

</body>

</html>