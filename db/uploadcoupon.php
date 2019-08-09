<?php
require_once("dbconnection.php");
$website = "http://$_SERVER[HTTP_HOST]";
$couponName = $_POST["couponName"];
$expires = $_POST["expires"];
$discount = $_POST["discount"];

$query = "INSERT INTO coupons (name, expires, discount_percent) VALUES('$couponName', '$expires', '$discount')";
if (mysqli_query($link, $query)) {
    header("refresh:10;url=$website");
    echo '<h2 style="color:green">Success, the coupon '.$couponName.' was added!</h2>';
    echo 'Redirecting in 10 seconds...';
} else {
    header("refresh:10;url=$website");
    echo '<h2 style="color:red">Error connecting to the database...</h2>';
    echo 'Redirecting in 10 seconds...';
    exit;
}
