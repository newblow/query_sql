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
            <label for="chapter">chapter</label>
            <input type="chapter" id="chapter" name="chapter">
        </div>
        <div>
            <label for="alias">alias</label>
            <input type="alias" id="alias" name="alias">
        </div>
        <div>
            <label for="nom">nom</label>
            <input type="nom" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">prenom</label>
            <input type="prenom" id="prenom" name="prenom">
        </div>
        <div>
            <label for="age">age</label>
            <input type="age" id="age" name="age">
        </div>
        <div>
            <label for="zip">zip</label>
            <input type="zip" id="zip" name="zip">
        </div>
        <div>
            <label for="address">address</label>
            <input type="address" id="address" name="address">
        </div>
        <div>
            <label for="id">id</label>
            <input type="id" id="ids" name="id">
        </div>
        

        <button type="submit">Envoyer</button>
    </form>



</body>
</html>