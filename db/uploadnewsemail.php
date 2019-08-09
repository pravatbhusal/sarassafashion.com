<?php
require_once("dbconnection.php");
$email = $_POST["email"];

//check if this email already is in the system, if not then add it into the system
$query = "SELECT * FROM newsletter WHERE email = '$email'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) == 0) {
    //row not found
    $query = "INSERT INTO newsletter (email) VALUES('$email')";
    if (mysqli_query($link, $query)) {
        exit("Your email $email was added into our newsletter system!");
    } else {
        exit("An error occured within our systems...");
    }
} else {
    //row found, notify the user
    exit("The email address is already apart of the newsletter service!");
}
