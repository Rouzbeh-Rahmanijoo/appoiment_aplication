<?php
require_once "config.php";
extract($_GET);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$query = "SELECT * FROM timetaken WHERE patient_id=$pmelicode and dr_id=$drmelicode and time_id=$time_id";
$select = mysqli_query($connection,$query);

if(mysqli_num_rows($select) == 0 ){
    $maraje = "0";
    $insert = $mysqli->query("INSERT INTO timetaken(patient_id,dr_id,time_id,maraje)
    VALUES ('$pmelicode','$drmelicode','$time_id','$maraje'); ");
    if($insert){
         $flag = "true";
         header("Location: patientsprofile.php?melicode=$pmelicode&flag=$flag");
    }
}else{
     $flag = "false";
     header("Location: patientsprofile.php?melicode=$pmelicode&flag=$flag");
}