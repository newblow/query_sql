<?php
  
  require_once('../../middleware/connect.php');
  $user_log = $_POST['user_email'];

  $query_user_courses = $db_connect->query("SELECT * FROM collections_reservation JOIN user ON collections_reservation.user_email = user.email WHERE user.email = '$user_log'" );

       foreach ($query_user_courses as $user_courses) {
        echo 'Email Utilisateur connécter: '. $user_courses['user_email']. '<br>';
        echo 'category'.$user_courses['courses_category']. '<br>'. '<br>'. '<br>';
  } 


