<?php 

require_once('../../middleware/connect.php');

$user_email = $_POST['user_email'];
$courses_category = $_POST['courses_category'];
$nom = $_POST['title'];
$prenom = $_POST['image'];
$age = $_POST['category'];
$zip = $_POST['subscription'];
$address = $_POST['chapter'];




$db_connect->query("INSERT INTO collections_reservation (id, user_email, courses_category) VALUES(NULL, '$user_email', '$courses_category')");

header("Location: http://localhost/public/query_sql");
