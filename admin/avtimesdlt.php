<?php
require_once "config.php";
session_start();
extract($_SESSION);
$id = $_GET["id"];
$a = $_GET["a"];
$melicode = $_GET["melicode"];

$mysqli = new mysqli($host, $user, $password, $dbname);

$result = $mysqli->query("DELETE FROM availabletimes WHERE id=$id");
//var_dump($result);
if($result){
    if($a == 'no'){
        header("Location: avtimesshow.php?melicode=$melicode&inpast=no");
    }
    if($a == 'yes'){
        header("Location: avtimesshow.php?melicode=$melicode&inpast=yes");
    }
}
if(!isset($username)){
    header("Location: login.php");
    die;
}