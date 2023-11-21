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
            <ul class="nav">
            <li> <a href="../../index.php">Home</a></li>
                <li class="nav-items"> <a href="./show.php">Read</a></li>
                <li class="nav-items"> <a href="./create.php">Create</a></li>
                <li class="nav-items"> <a href="./edit.php">Update</a></li>
                <li class="nav-items"> <a href="./delete.php">Delete</a></li>
            </ul>
        </nav>
    </header>

    <h1>Editer un utilisateur</h1>

    <form action="../../assets/php/controllers/crud_user/update_users.php" method="POST">
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
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="alias">Pseudonyme</label>
            <input type="text" id="alias" name="alias">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>