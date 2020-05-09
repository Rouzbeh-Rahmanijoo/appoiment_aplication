<?php
session_start();
define("USERNAME","admin");
define("PASSWORD",1234);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    extract($_POST);
    if(!empty($username) && !empty($password)) {
        if ($username == USERNAME && $password == PASSWORD){
            $_SESSION['username'] = USERNAME;
            header("Location: adminpanel.php");
            die;
        }
    }else{
        $message = "input is empty";
        echo"<script type='text/javascript'>alert('$message');</script>";
    }
}


require '../view/admin/login.view.php';