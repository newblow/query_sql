<?php 

require_once('../../middleware/connect.php');

$edit_user = $_POST['edit-user'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$alias = $_POST['alias'];

$db_connect->query("UPDATE user SET email='$email', password='$password', alias='$alias' WHERE user.email = '$edit_user' ");

header("Location: http://localhost/public/sportime-vanilla");
