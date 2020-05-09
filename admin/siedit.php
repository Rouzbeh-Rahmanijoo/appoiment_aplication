<?php
require_once "config.php";
$melicod = $_GET["melicode"];
session_start();
extract($_SESSION);
extract($_POST);
error_reporting(0);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM Sickness_information WHERE patient_id=$melicod");
$row = $result->fetch_array();

if(!empty($alaem)) {
    $update = $mysqli->query("UPDATE Sickness_information SET alaem='$alaem', mayene='$mayene', paraclinik='$paraclinik', peygiri='$peygiri' WHERE patient_id='$melicod';");
    if ($update){
        header("Location: patientsprofile.php?melicode=$melicod");
    }else{
        echo "no";
    }

}

if($username){
    require_once "../view/admin/siedit.view.php";
}else{
    header("Location: login.php");
}