<?php 
require_once('dbconnection.php');

$hostname = 'localhost';
$hostuser = 'warren';
$hostpass = 'warren';
$database = 'juansakahan';

$conn = new mysqli($hostname, $hostuser, $hostpass, $database);
?>