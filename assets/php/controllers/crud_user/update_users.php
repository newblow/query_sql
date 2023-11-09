<?php 

require_once('../../middleware/connect.php');

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$alias = $_POST['alias'];

$db_connect->query("UPDATE user SET email='$email', password='$password', alias='$alias' WHERE user.id=$id");

header("Location: http://localhost/public/query_sql");
