<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à jour une réservation</title>
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

    <h1>Editer une réservation</h1>

    <form action="../../assets/php/controllers/crud_collections_reservation/update_courses.php" method="POST">
            
    <select name="edit-user" id="edit-user">
            <option value="">-- Choisir un utilisateur --</option>

            <?php

                require_once('../../assets/php/middleware/connect.php');

                $users = $db_connect->query("SELECT user.email FROM user");

                foreach ($users as $user) {
                    $email = $user['email'];

                    echo "<option value='$email'>$email</option>";
                }

            ?>
        </select>

        <select name="edit-courses" id="edit-courses">
            <option value="">-- Choisir un cours --</option>

            <?php

                require_once('../../assets/php/middleware/connect.php');

                $courses = $db_connect->query("SELECT cr.courses_title FROM collections_reservation cr");

                foreach ($courses as $course) {
                    $title = $course['courses_title'];

                    echo "<option value='$title'>$title</option>";
                }

            ?>
        </select>

        <input type="datetime-local" name="edit-date" id="edit-date">

        <button type="submit">Envoyer</button>
    </form>



</body>
</html>