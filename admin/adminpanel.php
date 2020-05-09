<?php
require_once("config.php");
session_start();
extract($_SESSION);
//var_dump($_SESSION);
$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM doctors");
//var_dump($result->fetch_array());

staylog("../view/admin/adminpanel.view.php",$username,$result);
