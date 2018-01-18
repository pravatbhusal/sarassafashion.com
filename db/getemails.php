<?php
include("dbconnection.php");

//get all the emails within the newsletter table
$query = "SELECT * FROM newsletter";
$result = mysqli_query($link, $query);
$emails = "";
while($row = mysqli_fetch_array($result)) {
	$emails .= $row["email"] . ",";
}
exit($emails);
?>