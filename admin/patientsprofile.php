<?php
extract($_GET);
session_start();
extract($_SESSION);
//error_reporting(0);
require_once("config.php");

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM patients WHERE melicode=$melicode");
$row = $result->fetch_array();
$finfo = $mysqli->query("SELECT * FROM Further_information WHERE patient_id=$melicode");
$finforow = $finfo->fetch_array();
// $sinfo = $mysqli->query("SELECT * FROM Sickness_information WHERE patient_id=$melicode");
// $sinforow = $sinfo->fetch_array();
$result = $mysqli->query("SELECT * FROM doctors");
$take_time = $mysqli->query("SELECT * FROM timetaken Where patient_id=$melicode AND maraje=0");
$take_maraje = $mysqli->query("SELECT * FROM timetaken Where patient_id=$melicode AND maraje=1");


// while($take_time_array = $take_time->fetch_array()){
//     $time_id = $take_time_array["time_id"];
//     $avtime = $mysqli->query("SELECT * FROM availabletimes Where id=$time_id and maraje='0'");
//     $avtime_array = $avtime->fetch_array();
//     echo $avtime_array['year'];
// }


if(isset($flag)){
    if($flag == 'true'){
        $msg = "با موفقیت وارد شد";
        header("Refresh:0; URL=patientsprofile.php?melicode=$melicode");
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }else{
        $msg = "ERORE: وقت مورد نظر قبلا گرفته شده است";
        header("Refresh:0; URL=patientsprofile.php?melicode=$melicode");
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}

if(isset($username)){
    require_once "../view/admin/patientsprofile.view.php";
}else{
    header("Location: login.php");
}
