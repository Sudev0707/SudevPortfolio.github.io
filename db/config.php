<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sudev_portfolio";

$conn = mysqli_connect($servername,$username,$password,$dbname)
    or die("Connection Failed") . mysqli_connect_error();

?>
 