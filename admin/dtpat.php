<?php

require_once "config.php";
session_start();
extract($_SESSION);
$melicode = $_GET["melicode"];

$mysqli = new mysqli($host, $user, $password, $dbname);

$result = $mysqli->query("DELETE FROM patients WHERE melicode=$melicode");
//var_dump($result);
if($result){
    header("Location: patients.php");
}
if(!isset($username)){
    header("Location: login.php");
}