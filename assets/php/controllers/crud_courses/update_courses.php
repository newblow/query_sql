<?php 

require_once('../../middleware/connect.php');

$id = $_POST['id'];
$title = $_POST['title'];

$category = $_POST['category'];
$subscription = $_POST['subscription'];
$chapter = $_POST['chapter'];


$db_connect->query("UPDATE courses SET id=$id, title='$title', category='$category', subscription='$subscription', chapter='$chapter' WHERE courses.id=$id");

header("Location: http://localhost/public/query_sql");
