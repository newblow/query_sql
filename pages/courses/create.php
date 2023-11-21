<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un cours</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul class="nav">
                <li class="nav-items"> <a href="../../index.php">Home</a></li>
                <li class="nav-items"> <a href="./show.php">Read</a></li>
                <li class="nav-items"> <a href="./create.php">Create</a></li>
                <li class="nav-items"> <a href="./edit.php">Update</a></li>
                <li class="nav-items"> <a href="./delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>-
    <h1>Créer un cours</h1>

    <form action="../../assets/php/controllers/crud_courses/create_courses.php" method="POST" class="middle">
        <div>
            <label for="title">titre</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="image">image</label>
            <input type="text" id="image" name="image">
        </div>
        <div>
            <label for="courses-category">Category</label>
            <input type="category" id="courses-category" name="courses-category">
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