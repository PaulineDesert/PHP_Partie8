<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    if (empty($_COOKIE)) {
        setcookie('Login', htmlspecialchars($_POST['login']), time() + 365 * 24 * 3600, '/', null, false, true);
        setcookie('Motdepasse', htmlspecialchars($_POST['password']), time() + 365 * 24 * 3600, '/', null, false, true);
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>
    <h1>Exercice 3</h1>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>

    <form method="post" action="index.php">
        <div class="form-group">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" aria-describedby="login">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" aria-describedby="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</body>

</html>