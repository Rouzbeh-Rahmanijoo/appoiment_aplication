<?php

require_once "config.php";
$melicod = $_GET["melicode"];
session_start();
extract($_SESSION);
extract($_POST);


$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM patients WHERE melicode=$melicod");
$row = $result->fetch_array();

if(!empty($melicode)) {
    $update = $mysqli->query("UPDATE patients SET melicode='$melicode', name='$name', phonenumber='$phonenumber', addres='$addres' WHERE melicode='$melicod';");
    $update = $mysqli->query("UPDATE Further_information 
    SET patient_id=$melicode
    WHERE patient_id='$melicod';");
    if ($update){
        header("Location: patients.php");
    }else{
        echo 'no';
    }
}

if($username){
    require_once "../view/admin/editpat.view.php";
}else{
    header("Location: login.php");
}