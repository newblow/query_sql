<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les réservations</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/main.js"></script>
</head>
<body>

    <header>
        <nav>
            <ul class="nav" >
            <li> <a href="../../index.php">Home</a></li>
                <li class="nav-items"> <a href="./show.php">Read</a></li>
                <li class="nav-items"> <a href="./create.php">Create</a></li>
                <li class="nav-items"> <a href="./edit.php">Update</a></li>
                <li class="nav-items"> <a href="./delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>
    
    <h1 class="">Liste des réservations</h1>

    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_reservations = $db_connect->query('SELECT u.alias, c.title, cr.date FROM collections_reservation cr JOIN user u ON u.email = cr.user_email JOIN courses c ON c.title = cr.courses_title');

    foreach ($query_reservations as $reservation) {
        echo 'Pseudonyme de l\'utilisateur: ' . $reservation['alias'] .'<br/>'; 
        echo 'Catégorie du cours: ' . $reservation['title'] .'<br/>'; 
        echo 'Date: ' . $reservation['date'] .'<br/>'; 
    }

    ?>
</body>
</html>