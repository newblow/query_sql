<?php 

require_once('../../middleware/connect.php');

$delete_reservation = $_POST['delete-reservation'];

$db_connect->query("DELETE FROM collections_reservation WHERE collections_reservation.user_email = '$delete_reservation' ");

header("Location: http://localhost/public/sportime-vanilla");
