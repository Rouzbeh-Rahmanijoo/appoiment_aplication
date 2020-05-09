<?php
require_once "config.php";
session_start();
extract($_SESSION);
$id = $_GET["id"];
$melicode = $_GET["melicode"];

$mysqli = new mysqli($host, $user, $password, $dbname);

$result = $mysqli->query("DELETE FROM availabletimes WHERE id=$id");
var_dump($result);
if($result){
    header("Location: avtimesshow.php?melicode=$melicode");
    echo "ok";
}
if(!isset($username)){
    header("Location: login.php");
    die;
}