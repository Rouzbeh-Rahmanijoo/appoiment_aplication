<?php
require_once 'config.php';
session_start();
$melicode = $_GET["melicode"];
extract($_SESSION);

$mysqli = new mysqli($host, $user, $password, $dbname);

$result = $mysqli->query("DELETE FROM doctors WHERE melicode=$melicode");
var_dump($result);
if($result){
    header("Location: adminpanel.php");
}
if(!isset($username)){
    header("Location: login.php");
}