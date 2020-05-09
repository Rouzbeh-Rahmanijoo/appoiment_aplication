<?php
require_once "config.php";
$time_taken_id = $_GET["time_taken_id"];
$melicode = $_GET["melicode"];
session_start();
extract($_SESSION);
extract($_POST);
//error_reporting(0);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM Sickness_information WHERE time_taken_id=$time_taken_id");
$row = $result->fetch_array();

if(isset($submit)) {
    $update = $mysqli->query("UPDATE Sickness_information 
    SET alaem='$alaem', mayene='$mayene', paraclinik='$paraclinik', peygiri='$peygiri' 
    WHERE time_taken_id='$time_taken_id';");

    if ($update){
        header("Location: patientsprofile.php?melicode=$melicode");
    }else{
    }

}


if($username){
    require_once "../view/admin/Sinfo.view.php";
}else{
    header("Location: login.php");
}