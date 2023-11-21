<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer un cours</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul class="nav">
            <li> <a href="../../index.php">Home</a></li>
                <li class="nav-items"> <a href="./show.php">Read</a></li>
                <li class="nav-items"> <a href="./create.php">Create</a></li>
                <li class="nav-items"> <a href="./edit.php">Update</a></li>
                <li class="nav-items"> <a href="./delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>

    <h1>Editer un cours</h1>

    <form action="../../assets/php/controllers/crud_courses/update_courses.php" method="POST">
    <select name="edit-courses" id="edit-courses">
            <option value="">-- Choisir un cours --</option>

            <?php

                require_once('../../assets/php/middleware/connect.php');

                $courses = $db_connect->query("SELECT courses.title FROM courses");

                foreach ($courses as $course) {
                    $title = $course['title'];

                    echo "<option value='$title'>$title</option>";
                }

            ?>
        </select>
        <div>
            <label for="title">title</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="image">image</label>
            <input type="text" id="image" name="image">
        </div>
        <div>
            <label for="courses-category">category</label>
            <input type="courses-category" id="courses-category" name="courses-category">
        </div>
        <div>
            <label for="subscription">subscription</label>
            <input type="subscription" id="subscription" name="subscription">
        </div>
        <div>
            <label for="description">description</label>
            <input type="subscription" id="description" name="description">
        </div>
            <label for="chapter">chapter</label>
            <input type="text" id="chapter" name="chapter">
        </div>
        <button type="submit">Envoyer</button>
    </form>



</body>
</html>