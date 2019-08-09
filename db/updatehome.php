<?php
include("dbconnection.php");
$website = "http://$_SERVER[HTTP_HOST]";

//create file directory in case it doesn't exist
if (!is_dir('icons/home')) {
    mkdir('icons/home', 0777, true);
}

//iterate through 4 times for the 4 pictures with indexes from 1 to 4
for ($i = 1; $i < 5; $i ++) {
    $unique_hash = md5(uniqid(rand(), true)); //generate a unique hash
    $icon = "db/icons/home/" . $unique_hash;
    $icon .= preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $_FILES['picture' . $i]['name']);

    //check if we're editing this picture file
    if ($_FILES['picture' . $i]["name"]) {
        $query = "REPLACE INTO home (id, picture) VALUES('$i', '$icon')";
        mysqli_query($link, $query);

        //add pictures into the file system
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //uploading icon
            if (is_uploaded_file($_FILES['picture' . $i]['tmp_name'])) {
                $upload_file_name = $unique_hash;

                //replace any non-alpha-numeric cracters in the file name
                $upload_file_name .= preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $_FILES['picture' . $i]['name']);

                //Save the file
                $dest=__DIR__.'/icons/home/'.$upload_file_name;
                if (move_uploaded_file($_FILES['picture' .$i]['tmp_name'], $dest)) {
                    //success
                }
            }
        }
    }
}
exit;
