<?php
include_once("dbconnection.php");

$email = $_POST["email"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];

$query = "UPDATE admin SET email='$email', password='$password', shipping='$shipping' WHERE id=1";
mysqli_query($link, $query) or die("Failed to query the admin settings...");

exit("Successfully updated the admin settings!");
?>