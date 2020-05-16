<?php

require_once "config.php";
session_start();
extract($_SESSION);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$allInfo = $mysqli->query("SELECT * FROM patients");


if(isset($username)){
    require_once "../view/admin/patients.view.php";
}else{
    header("Location: login.php");
    die;
}