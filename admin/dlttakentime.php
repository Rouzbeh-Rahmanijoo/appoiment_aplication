<?php
require_once 'config.php';
session_start();
extract($_SESSION);
extract($_GET);
$mysqli = new mysqli($host, $user, $password, $dbname);

$result = $mysqli->query("DELETE FROM timetaken WHERE id=$id");
$deleteSinfo = $mysqli->query("DELETE FROM Sickness_information WHERE time_taken_id=$id");
//var_dump($result);
if($result && $deleteSinfo){
    header("Location: patientsprofile.php?melicode=$melicode");
}
if(!isset($username)){
    header("Location: login.php");
}