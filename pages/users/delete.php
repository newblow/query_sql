<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un utilisateur</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="../../index.php">Accueil</a>
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

    <form action="../../assets/php/controllers/crud_user/delete_users.php" method="POST">
        <div>
            <label for="id-delete">Id</label>
            <input type="text" id="id-delete" name="id-delete">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>