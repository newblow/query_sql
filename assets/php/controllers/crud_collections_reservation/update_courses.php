<?php 

require_once('../../middleware/connect.php');

$edit_user = $_POST['edit-user'];
$edit_courses = $_POST['edit-courses'];
$date = date($_POST['edit-date']);



$db_connect->query("UPDATE collections_reservation SET user_email='$edit_user', courses_title='$edit_courses', date='$date' WHERE collections_reservation.user_email = '$edit_user' ");

header("Location: http://localhost/public/sportime-vanilla");
