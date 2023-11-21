<?php 

require_once('../../middleware/connect.php');


$title = $_POST['title'];
$image = $_POST['image'];
$courses_category = $_POST['courses-category'];
$subscription = $_POST['subscription'];
$chapter = $_POST['chapter'];


$db_connect->query("INSERT INTO courses (id, image, title, courses_category, subscription, chapter) VALUES(NULL, '$title', '$image', '$courses_category', '$subscription', '$chapter')");

header("Location: http://localhost/public/sportime-vanilla");
