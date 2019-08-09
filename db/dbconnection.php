<?php
//database credentials
$host = "localhost";
$sqluser = "root";
$sqlpassword = "";
$dbusername = "sarassa";

$link = mysqli_connect($host, $sqluser, $sqlpassword, $dbusername) or die();

//settngs credentials
$query = "SELECT * FROM admin ORDER by id DESC LIMIT 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$adminEmail = $row["email"];
$adminPassword = $row["password"];
$shippingFeeUSD = $row["shipping"];
$taxUSD = $row["tax"];
