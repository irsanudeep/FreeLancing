<?php
$currency = '&#8377; '; //Currency Character or code

$db_username = 'root';
$db_password = '';
$db_name = 'se';
$db_host = 'localhost';


$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>