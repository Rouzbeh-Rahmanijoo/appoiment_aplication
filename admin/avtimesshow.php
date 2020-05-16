<?php
require_once "config.php";
session_start();
extract($_SESSION);
extract($_GET);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
ChekForPastTime();
CheckForTakenTimes();
$allInfo = $mysqli->query("SELECT * FROM availabletimes WHERE dr_id=$melicode AND ActiveFlag=1 ORDER BY `year`,`month`,`day`,`time` ASC");
$allInfo1 = $mysqli->query("SELECT * FROM availabletimes WHERE dr_id=$melicode AND ActiveFlag=0 ORDER BY `year`,`month`,`day`,`time` ASC");
$drInfo = $mysqli->query("SELECT * FROM doctors WHERE melicode=$melicode");
$drname = $drInfo->fetch_array();
$allInfo2 = $mysqli->query("SELECT * FROM timetaken WHERE dr_id=$melicode AND maraje=0 ORDER BY `time_id` ASC");
$allInfo3 = $mysqli->query("SELECT * FROM timetaken WHERE dr_id=$melicode AND maraje=1 ORDER BY `time_id` ASC");

if(isset($username)){
    require_once "../view/admin/avtimesshow.view.php";
}else{
    header("Location: login.php");
}