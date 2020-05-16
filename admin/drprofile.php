<?php
$melicode = $_GET["melicode"];
session_start();
extract($_SESSION);

require_once("config.php");
$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM doctors WHERE melicode=$melicode");
$row = $result->fetch_array();
if (!$row){
    header("Location: adminpanel.php");
}

if(isset($username)){
    require_once "../view/admin/drprofile.view.php";
}else{
    header("Location: login.php");
    die;
}
