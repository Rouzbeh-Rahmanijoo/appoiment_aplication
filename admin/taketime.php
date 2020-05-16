<?php
require_once "config.php";
session_start();
extract($_SESSION);
extract($_GET);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
CheckForTakenTimes();
$allInfo = $mysqli->query("SELECT * FROM availabletimes WHERE dr_id=$drmelicode and ActiveFlag = 1 and FiveActiveFlage=0");
$drInfo = $mysqli->query("SELECT * FROM doctors WHERE melicode=$drmelicode");
$drname = $drInfo->fetch_array();

if(isset($username)){
    require_once "../view/admin/taketime.view.php";
}else{
    header("Location: login.php");
}