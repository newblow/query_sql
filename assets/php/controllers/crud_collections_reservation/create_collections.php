<?php 

require_once('../../middleware/connect.php');

$user_email = $_POST['create-user'];
$courses_category = $_POST['create-courses'];
$date = date($_POST['create-date']);


$db_connect->query("INSERT INTO collections_reservation (id, user_email, courses_title, date) VALUES (NULL, '$user_email', '$courses_category', '$date')");


header("Location: http://localhost/public/sportime-vanilla");
