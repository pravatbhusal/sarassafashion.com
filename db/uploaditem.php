<?php
include("dbconnection.php");
$website = "http://$_SERVER[HTTP_HOST]";
$category = $_POST["category"];
$itemName = $_POST["itemName"];
$itemPrice = $_POST["itemPrice"];

//create file directories in case it doesn't exist
if (!is_dir('icons/jewelry')) {
    mkdir('icons/jewelry', 0777, true);
}
if (!is_dir('icons/men')) {
    mkdir('icons/men', 0777, true);
}
if (!is_dir('icons/women')) {
    mkdir('icons/women', 0777, true);
}

//check if there was a sale price
if (isset($_POST["itemSalePrice"])) {
    $itemSalePrice = $_POST["itemSalePrice"];
} else {
    $itemSalePrice = "0";
}
$itemDescription = $_POST["itemDescription"];
$sizes = "";
//if the category is not for jewelry, set the selected sizes into a string
if ($category != "jewelry") {
    for ($i = 0; $i < count($_POST['sizeList']); $i++) {
        //make sure the last iterated index does not contain a comma (so we can explode the string properly)
        if ($i != count($_POST['sizeList']) -1) {
            $sizes .= $_POST['sizeList'][$i] . ",";
        } else {
            $sizes .= $_POST['sizeList'][$i];
        }
    }
} else {
    $sizes = "Normal";
}

$unique_hash = md5(uniqid(rand(), true)); //generate a unique hash
$icon = "db/icons/$category/" . $unique_hash;
$icon .= preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $_FILES['itemPicture']['name']);

//add the item into the "category" table and "new" tables within the database
$queryCategory = "INSERT INTO $category (category, name, price, saleprice, sizes, description, picture) VALUES('$category', '$itemName', '$itemPrice', '$itemSalePrice', '$sizes', '$itemDescription', '$icon')";
if (mysqli_query($link, $queryCategory)) {
    //get the category id for the item to add into the "new" table
    $queryItem = "SELECT * FROM $category ORDER by id DESC LIMIT 1";
    $result = mysqli_query($link, $queryItem);
    $latestItem = mysqli_fetch_array($result);
    $categoryid = $latestItem['id'];
    $queryNew = "INSERT INTO new (categoryid, category, name, price, saleprice, sizes, description, picture) VALUES('$categoryid', '$category', '$itemName', '$itemPrice', '$itemSalePrice', '$sizes', '$itemDescription', '$icon')";
    if (mysqli_query($link, $queryNew)) {
        header("refresh:10;url=$website");
        echo '<h2 style="color:green">Success, the item '.$itemName.' was added!</h2>';
        echo 'Redirecting in 10 seconds...';
    } else {
        header("refresh:10;url=$website");
        echo '<h2 style="color:red">Error connecting to the database...</h2>';
        echo 'Redirecting in 10 seconds...';
        exit;
    }
} else {
    header("refresh:10;url=$website");
    echo '<h2 style="color:red">Error connecting to the database...</h2>';
    echo 'Redirecting in 10 seconds...';
    exit;
}

//upload the icon into the file directory
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //uploading icon
    if (is_uploaded_file($_FILES['itemPicture']['tmp_name'])) {
        $upload_file_name = $unique_hash;

        //replace any non-alpha-numeric cracters in the file name
        $upload_file_name .= preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $_FILES['itemPicture']['name']);

        //Save the file
        $dest=__DIR__.'/icons/'.$category.'/'.$upload_file_name;
        if (move_uploaded_file($_FILES['itemPicture']['tmp_name'], $dest)) {
            //success
        }
    }
}
exit;
