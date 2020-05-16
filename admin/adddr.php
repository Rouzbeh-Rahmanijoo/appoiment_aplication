<?php
require_once "config.php";
session_start();
extract($_SESSION);
extract($_POST);
if (empty($melicode) || empty($lname) || empty($fname) || empty($takhasos)){
    //$msg = "باتن ها نباید خالی باشند";
    //echo "<script type='text/javascript'>alert('$msg');</script>";
}else{

    $sql_select = "SELECT * FROM doctors WHERE melicode = '$melicode'";
    $result = mysqli_query($connection,$sql_select);

    if(mysqli_num_rows($result) > 0 )
    {
        $msg = "کد ملی وارد شده تکراری است";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }else{
        $sql_insert = "INSERT INTO doctors(melicode,Fname,Lname,Specialty)
        VALUES ('$melicode','$fname','$lname','$takhasos'); ";
        if(mysqli_query($connection,$sql_insert))
        {
            $msg = "با موفقیت وارد شد";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        else
        {
            $msg = "ERORE: اطلاعات وارد نشد";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }

    }

    mysqli_close($connection);
}

if(isset($username)){
    require_once "../view/admin/adddr.view.php";
}else{
    header("Location: login.php");
    die;
}

