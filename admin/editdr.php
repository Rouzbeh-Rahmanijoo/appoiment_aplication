<?php

require_once "config.php";
if(isset($_GET["melicode"])){
    $melicod = $_GET["melicode"];
}else{
    echo 'is not set';
}
session_start();
extract($_SESSION);
extract($_POST);

$mysqli = new mysqli($host, $user, $password, $dbname);
$mysqli->set_charset("utf8");
$result = $mysqli->query("SELECT * FROM doctors WHERE melicode=$melicod");
$row = $result->fetch_array();

if(!empty($melicode)) {
    $update = $mysqli->query("UPDATE doctors SET melicode='$melicode', Fname='$fname', Lname='$lname', Specialty='$takhasos' WHERE melicode='$melicod';");
    if ($update){
        header("Location: adminpanel.php");
    }else{
        echo 'no';
    }

}

if(isset($username)){
    require_once '../view/admin/editdr.view.php';
}else{
    header("Location: login.php");
}

