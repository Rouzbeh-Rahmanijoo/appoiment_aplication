<?php
require_once "config.php";
session_start();
extract($_SESSION);
extract($_GET);
if(isset($flag)){
    if($flag == "true"){
        $msg = "با موفقیت وارد شد";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }elseif($flag == "time"){
        $msg = "ERORE: لطفا بازه ساعتی را مشخص کنید";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }elseif($flag == "past"){
        $msg = "ERORE: بازه زمانی در گذشته است";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    else{
        $msg = "ERORE: بازه زمانی تکراری است";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
}
if(isset($username)){
    require_once "../view/admin/availabletimes.view.php";
}else{
    header("Location: login.php");
}