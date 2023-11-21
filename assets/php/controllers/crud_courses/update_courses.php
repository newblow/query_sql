<?php 

require_once('../../middleware/connect.php');

$edit_courses = $_POST['edit-courses'];
$title = $_POST['title'];
$image = $_POST['image'];
$courses_category = $_POST['courses-category'];
$subscription = $_POST['subscription'];
$description = $_POST['description'];
$chapter = $_POST['chapter'];


$db_connect->query("UPDATE courses SET title='$title', image='$image', description= '$description', courses_category='$courses_category', subscription='$subscription', chapter='$chapter' WHERE courses.title = '$edit_courses'");

header("Location: http://localhost/public/sportime-vanilla");
