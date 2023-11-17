<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un utilisateur</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li> <a href="#">Home</a></li>
                <li> <a href="./pages/courses/show.php">Read</a></li>
                <li> <a href="./pages/courses/create.php">Create</a></li>
                <li> <a href="./pages/courses/edit.php">Update</a></li>
                <li> <a href="./pages/courses/delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>

    <h1>Editer un utilisateur</h1>

    <form action="../../assets/php/controllers/crud_courses/update_courses.php" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
        <div>
            <label for="title">title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="img">image</label>
            <input type="text" id="image" name="img">
        </div>
        <div>
            <label for="category">category</label>
            <input type="category" id="category" name="category">
        </div>
        <div>
            <label for="subscription">subscriptiony</label>
            <input type="subscription" id="subscription" name="subscription">
        </div>
        <div>
            <label for="image">image</label>
            <input type="text" id="image" name="image">
        </div>

            <label for="description">chapter</label>
            <input type="text" id="description" name="description">
        </div>
        <div>
            <label for="eamil">chapter</label>
            <input type="email" id="email" name="e mail">
        </div>

        <button type="submit">Envoyer</button>
    </form>



</body>
</html>