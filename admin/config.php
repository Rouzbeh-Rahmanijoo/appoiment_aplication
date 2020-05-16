<?php
require_once "lib/functions.php";
require_once "lib/jdf.php";
require_once "lib/date.php";
$host = "localhost";
$user = "manaitir_admin";
$password = "12345";
$dbname = "manaitir_appoiment";

$connection = mysqli_connect($host,$user,$password,$dbname);
mysqli_set_charset($connection,'utf8');
