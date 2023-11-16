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

    $query_user_courses = $db_connect->query('SELECT USER.*, courses.* FROM user_courses JOIN USER ON user_courses.user_id_courses = USER.email JOIN courses ON user_courses.courses_id_user = courses.category');

    foreach ($query_user_courses as $user_courses) {
      
    
        echo 'Email de l\'utilisateur: '.$user_courses['email']; 
        echo 'pseudo de l\'utilisateur: '.$user_courses['alias'] .'<br/>'; 
        echo 'Nom de l\'utilisateur: '.$user_courses['nom'] .'<br/>'; 
        echo 'Prenom de l\'utilisateur: '.$user_courses['prenom'] .'<br/>'; 
        echo 'Age de l\'utilisateur: '.$user_courses['age'] .'<br/>';
        echo 'Code Postal de l\'utilisateur: '.$user_courses['zip'] .'<br/>';
        echo 'Address de l\'utilisateur: '.$user_courses['address'] .'<br/>';
        echo 'ID de l\'utilisateur: '.$user_courses['id'] .'<br/>'.'<br/>'; 

        echo 'Titre de l\'utilisateur: '.$user_courses['title'] .'<br/>';
        echo 'Image de l\'utilisateur: '.$user_courses['image'] .'<br/>';
        echo 'Category de l\'utilisateur: '.$user_courses['category'] .'<br/>';
        echo 'Abonnement de l\'utilisateur: '.$user_courses['subscription'] .'<br/>'; 
        echo 'Chapitre de l\'utilisateur: '.$user_courses['chapter']  .'<br/>'.'<br/>'.'<br/>';   
         

    }

    ?>
</body>
</html>