<?php 
  
require_once('../../middleware/connect.php');
$query_user = $db_connect->query('SELECT* FROM user');
?>
<div class="container">
    <?php
     foreach ($query_user as $user) {
        echo $user['email'] .'<br/>';
        echo $user['alias'] .'<br/>';  
        echo $user['id'] .'<br/>';    

} 
    ?>
</div>

<form action='../../middleware/connect.php' method="POST" class="flex flex-row">
    <div>
        
        <input type="text" id="email" name="email" placeholder="email">
    </div>
    <div>
    
        <input type="text" id="alias" name="bollo" placeholder="alias">
    </div>
    <div>
        <input type="text" id="password" name="password" placeholder="password">
    </div>
    <button type="submit">envoyer</button>
</form>