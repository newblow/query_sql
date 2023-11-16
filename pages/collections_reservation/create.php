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
                <li> <a href="#">Home</a></li>
                <li> <a href="../collections_reservation/show.php">Read</a></li>
                <li> <a href="../collections_reservation/create.php">Create</a></li>
                <li> <a href="../collections_reservation/edit.php">Update</a></li>
                <li> <a href="../collections_reservation/delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>
    <form action="../../assets/php/controllers/crud_collections_reservation/create_collections.php" method="POST">
        <div>
            <label for="user_email">Email</label>
            <input type="text" id="user_email" name="user_email">
        </div>
        <div>
            <label for="courses_category">Catégory cours</label>
            <input type="text" id="courses_category" name="courses_category">
        </div>
       
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>