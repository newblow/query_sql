<?php 

require_once('../../middleware/connect.php');

$delete_courses = $_POST['delete-courses'];

$db_connect->query("DELETE FROM `courses` WHERE courses.title = '$delete_courses' ");

header("Location: http://localhost/public/sportime-vanilla");
