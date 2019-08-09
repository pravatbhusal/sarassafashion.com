<?php
include("dbconnection.php");
$website = "http://$_SERVER[HTTP_HOST]";
$eventName = $_POST["eventName"];
$expires = $_POST["expires"];

//create file directory in case it doesn't exist
if (!is_dir('icons/events')) {
    mkdir('icons/events', 0777, true);
}

$unique_hash = md5(uniqid(rand(), true)); //generate a unique hash
$icon = "db/icons/events/" . $unique_hash;
$icon .= preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $_FILES['eventPicture']['name']);

//add the item into the database
$query = "INSERT INTO events (name, expires, picture) VALUES('$eventName', '$expires', '$icon')";
if (mysqli_query($link, $query)) {
    header("refresh:10;url=$website");
    echo '<h2 style="color:green">Success, the event '.$eventName.' was added!</h2>';
    echo 'Redirecting in 10 seconds...';
} else {
    header("refresh:10;url=$website");
    echo '<h2 style="color:red">Error connecting to the database...</h2>';
    echo 'Redirecting in 10 seconds...';
    exit;
}

//upload the icon into the file directory
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //uploading icon
    if (is_uploaded_file($_FILES['eventPicture']['tmp_name'])) {
        $upload_file_name = $unique_hash;

        //replace any non-alpha-numeric cracters in the file name
        $upload_file_name .= preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $_FILES['eventPicture']['name']);

        //Save the file
        $dest=__DIR__.'/icons/events/'.$upload_file_name;
        if (move_uploaded_file($_FILES['eventPicture']['tmp_name'], $dest)) {
            //success
        }
    }
}
exit;
