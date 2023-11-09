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
                <li> <a href="#">Home</a></li>
                <li> <a href="../courses/show.php">Read</a></li>
                <li> <a href="../courses/create.php">Create</a></li>
                <li> <a href="../courses/edit.php">Update</a></li>
                <li> <a href="../courses/delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>

    <form action="../../assets/php/controllers/crud_courses/delete_courses.php" method="POST">
        <div>
            <label for="id-delete">Id</label>
            <input type="text" id="id-delete" name="id-delete">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>