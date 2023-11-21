<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un cours</title>
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

    <h1>Supprimer un cours</h1>

    <form action="../../assets/php/controllers/crud_courses/delete_courses.php" method="POST">
        <select name="delete-courses" id="delete-courses">
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
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>