<?php
require_once "config.php";
$melicod = $_GET["melicode"];
session_start();
extract($_SESSION);
extract($_POST);
//error_reporting(0);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM Further_information WHERE patient_id=$melicod");
$row = $result->fetch_array();

if(isset($submit)) {
    $update = $mysqli->query("UPDATE Further_information SET age='$age', marige='$marige', phone='$phone', Introducing='$Introducing' WHERE patient_id='$melicod';");
    if ($update){
        header("Location: patientsprofile.php?melicode=$melicod");
    }else{
    }

}

if($username){
    require_once "../view/admin/pfiedit.view.php";
}else{
    header("Location: login.php");
}