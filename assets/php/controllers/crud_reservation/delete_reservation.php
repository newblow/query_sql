<?php 

require_once('../../middleware/connect.php');

$id = $_POST['id-delete'];

$db_connect->query("DELETE FROM `courses_reservation` WHERE user.id=$id");

header("Location: http://localhost/public/query_sql");