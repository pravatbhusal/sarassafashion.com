<?php
require_once("admin.php");

//database credentials
$host = "localhost";
$sqluser = "root";
$sqlpassword = "";
$dbusername = "sarassa";

$link = mysqli_connect($host, $sqluser, $sqlpassword, $dbusername) or die();
?>