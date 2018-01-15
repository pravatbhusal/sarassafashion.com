<?php
include("dbconnection.php");
$website = "http://$_SERVER[HTTP_HOST]";
$itemId = $_POST["itemId"];
$category = $_POST["category"];

$queryCategory = "DELETE FROM $category WHERE id = '$itemId'";
$queryNew = "DELETE FROM new WHERE categoryid = '$itemId' AND category = '$category'";

//check if we deleted the item from both tables successfully
if(mysqli_query($link, $queryCategory) && mysqli_query($link, $queryNew)) {
	header("refresh:10;url=$website");
	echo '<h2 style="color:green">Success, the item of id '.$itemId.' was deleted from the database!</h2>';
	echo 'Redirecting in 10 seconds...';
	exit;
} else {
	header("refresh:10;url=$website");
	echo '<h2 style="color:red">Error connecting to the database...</h2>';
	echo 'Redirecting in 10 seconds...';
	exit;
}
?>