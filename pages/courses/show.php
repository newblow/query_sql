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
            <ul>
                <li> <a href="#">Home</a></li>
                <li> <a href="../courses/show.php">Read</a></li>
                <li> <a href="../courses/create.php">Create</a></li>
                <li> <a href="../pages/courses/edit.php">Update</a></li>
                <li> <a href="../pages/courses/delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Liste des utilisateurs</h1>

    <?php 

    require_once('../../assets/php/middleware/connect.php');

    $query_courses = $db_connect->query('SELECT * FROM courses');

    foreach ($query_courses as $courses) {
      
        echo $courses['title'] .'<br/>';
        echo $courses['image'] .'<br/>';
        echo $courses['category'] .'<br/>';
        echo $courses['subscription'] .'<br/>'; 
        echo $courses['chapter'] .'<br/>';   
    }

    ?>
</body>
</html>