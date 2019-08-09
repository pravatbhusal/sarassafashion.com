<?php
include("dbconnection.php");
$website = "http://$_SERVER[HTTP_HOST]";
$couponName = $_POST["couponName"];

$query = "DELETE FROM coupons WHERE name = '$couponName'";

//check if we deleted the item from both tables successfully
if (mysqli_query($link, $query)) {
    header("refresh:10;url=$website");
    echo '<h2 style="color:green">Success, the coupon '.$couponName.' was deleted from the database!</h2>';
    echo 'Redirecting in 10 seconds...';
    exit;
} else {
    header("refresh:10;url=$website");
    echo '<h2 style="color:red">Error connecting to the database...</h2>';
    echo 'Redirecting in 10 seconds...';
    exit;
}
