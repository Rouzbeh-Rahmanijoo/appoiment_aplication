<?php
session_start();
extract($_SESSION);
//var_dump($_SESSION);
if(isset($username)){
    header("Location: adminpanel.php");
}else{
    header("Location: login.php");
die;
}
