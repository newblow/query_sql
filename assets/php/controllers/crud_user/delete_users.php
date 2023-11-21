<?php 

require_once('../../middleware/connect.php');

$delete_user = $_POST['delete-user'];

$db_connect->query("DELETE FROM `user` WHERE user.email= '$delete_user' ");

header("Location: http://localhost/public/sportime-vanilla");
