<?php
include_once("dbconnection.php");

$email = $_POST["email"];
$password = $_POST["password"];
$shipping = $_POST["shipping"];
$tax = $_POST["tax"];

$query = "UPDATE admin SET email='$email', password='$password', shipping='$shipping', tax='$tax' WHERE id=1";
mysqli_query($link, $query) or die("Failed to query the admin settings...");

exit("Successfully updated the admin settings!");
