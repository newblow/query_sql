<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les utilisateurs</title>
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
    
    <h1>Liste des utilisateurs</h1>

    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_users = $db_connect->query('SELECT * FROM user');

    foreach ($query_users as $users) {
        echo $users['email'];
        echo $users['id'] .'<br/>';   
        echo $users['alias'] .'<br/>';  
    }

    ?>
</body>
</html>