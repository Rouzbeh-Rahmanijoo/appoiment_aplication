<?php
require_once "config.php";
extract($_GET);
session_start();
extract($_SESSION);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("UPDATE timetaken SET maraje='1' WHERE id=$id");
$Sinfo = $mysqli->query("INSERT INTO Sickness_information (time_taken_id) VALUES ($time_id)");
if($result && $Sinfo){
    header("Location: patientsprofile.php?melicode=$melicode");
}
if(!isset($username)){
    header("Location: login.php");
}