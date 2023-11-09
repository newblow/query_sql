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
                <li> <a href="../courses/show.php">Read</a></li>
                <li> <a href="../courses/create.php">Create</a></li>
                <li> <a href="../courses/edit.php">Update</a></li>
                <li> <a href="../courses/delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>
    <form action="../../assets/php/controllers/crud_courses/create_courses.php" method="POST">
        <div>
            <label for="title">titre</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="image">image</label>
            <input type="text" id="image" name="image">
        </div>
        <div>
            <label for="category">Category</label>
            <input type="category" id="category" name="category">
        </div>
        <div>
            <label for="subscription">Subscription</label>
            <input type="subscription" id="subscription" name="subscription">
        </div>
        <div>
            <label for="chapter">Chapter</label>
            <input type="chapter" id="chapter" name="chapter">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>