<?php
  
  require_once('./assets/php/middleware/connect.php');
  $query_courses = $db_connect->query('SELECT* FROM courses');
  ?>
  <div class="container">
      <?php
       foreach ($query_courses as $courses) {
          echo $courses['title'] .'<br/>';
          echo $course['image'] .'<br/>';
          echo $courses['category'] .'<br/>';
          echo $courses['subscription'] .'<br/>'; 
          echo $courses['chapter'] .'<br/>';    



  } 
      ?>
  </div>

  <form action='../../assets/php/middleware/connect.php' method="POST" class="flex flex-row">
      <div>
          
          <input type="text" id="email" name="email" placeholder="email">
      </div>
      <div>
      
          <input type="text" id="bollo" name="bollo" placeholder="nom">
      </div>
      <div>
          <input type="text" id="password" name="password" placeholder="password">
      </div>
      <button type="submit">envoyer</button>
  </form>