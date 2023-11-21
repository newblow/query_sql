<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une réservation</title>
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

    <h1>Supprimer une réservation</h1>


    <form action="../../assets/php/controllers/crud_collections_reservation/delete_courses.php" method="POST">
    <select name="delete-reservation" id="delete-reservation">
            <option value="">-- Choisir une réservation --</option>

            <?php

                require_once('../../assets/php/middleware/connect.php');

                $reservations = $db_connect->query("SELECT * FROM collections_reservation");

                foreach ($reservations as $reservation) {
                    $email = $reservation['user_email'];
                    $title = $reservation['courses_title'];
                    $date = $reservation['date'];

                    echo "<option value='$email'>'$email $title $date'</option>";
                }

            ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>