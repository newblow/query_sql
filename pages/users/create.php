<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../index.php">Accueil</a>
                </li>
                <li>
                    <a href="../users/show.php">Afficher</a>
                </li>
                <li>
                    <a href="../users/create.php">Créer</a>
                </li>
                <li>
                    <a href="../users/edit.php">Editer</a>
                </li>
                <li>
                    <a href="../users/delete.php">Supprimer</a>
                </li>
            </ul>
        </nav>
    </header>
    <form action="../../assets/php/controllers/crud_user/create_users.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="alias">Pseudonyme</label>
            <input type="text" id="alias" name="alias">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>