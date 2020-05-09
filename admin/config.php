<?php
require_once "lib/functions.php";
require_once "lib/jdf.php";
require_once "lib/date.php";
$host = "localhost";
$user = "root";
$password = "";
$dbname = "appointment";

$connection = mysqli_connect($host,$user,$password,$dbname);