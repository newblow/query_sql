<?php
  
  require_once('./assets/php/middleware/connect.php');
  $query_user_course = $db_connect->query('SELECT USER.*, courses.* FROM user_courses JOIN USER ON user_courses.user_id_courses = USER.email JOIN courses ON user_courses.courses_id_user = courses.category;');
  ?>
  <div class="container">
      <?php
       foreach ($query_user_courses as $user_courses) {
  } 
      ?>
  </div>

