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

    <form action="../../assets/php/controllers/crud_collections_reservation/update_courses.php" method="POST">
        <div>
            <label for="id">Id</label>
            <input type="text" id="id" name="id">
        </div>
    
        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email">
        </div>
        <label for="cours-category">category</label>
            <input type="text" id="cours-category" name="cours-category">
        </div>
       
        

        <button type="submit">Envoyer</button>
    </form>



</body>
</html>