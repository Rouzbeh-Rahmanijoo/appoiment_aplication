<?php
require_once "config.php";
session_start();
extract($_SESSION);
extract($_GET);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$allInfo = $mysqli->query("SELECT * FROM availabletimes WHERE dr_id=$melicode");
$drInfo = $mysqli->query("SELECT * FROM doctors WHERE melicode=$melicode");
$drname = $drInfo->fetch_array();

if(isset($username)){
    require_once "../view/admin/avtimesshow.view.php";
}else{
    header("Location: login.php");
}