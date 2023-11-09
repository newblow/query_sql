<?php 

require_once('../../middleware/connect.php');


$title = $_POST['title'];
$image = $_POST['image'];
$category = $_POST['category'];
$subscription = $_POST['subscription'];
$chapter = $_POST['chapter'];


$db_connect->query("INSERT INTO courses (id, image, title, category, subscription, chapter) VALUES(NULL, '$title', '$image', '$category', '$subscription', '$chapter')");

header("Location: http://localhost/public/query_sql");
