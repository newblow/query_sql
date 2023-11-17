<?php 

require_once('../../middleware/connect.php');

$id = $_POST['id'];
$courses_category = $_POST['cours-category'];
$email = $_POST['email'];



$db_connect->query("UPDATE collections_reservation SET user_email='$email', courses_category='$courses_category' WHERE collections_reservation.id=$id");

header("Location: http://localhost/public/query_sql");
