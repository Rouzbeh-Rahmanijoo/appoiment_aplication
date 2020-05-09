<?php
require_once "config.php";
session_start();
extract($_SESSION);

extract($_POST);
if (empty($melicode) || empty($name) || empty($phonenumber) || empty($addres)){
    //$msg = "باتن ها نباید خالی باشند";
    //echo "<script type='text/javascript'>alert('$msg');</script>";
}else{

    $sql_select = "SELECT * FROM patients WHERE melicode = '$melicode'";
    $result = mysqli_query($connection,$sql_select);

    if(mysqli_num_rows($result) > 0 )
    {
        $msg = "کد ملی وارد شده تکراری است";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }else{
        $sql_insert = "INSERT INTO patients(melicode,name,phonenumber,addres)
        VALUES ('$melicode','$name','$phonenumber','$addres'); ";
        $sql_inseert2 ="INSERT INTO Further_information(patient_id) VALUES ('$melicode')";
        $sql_inseert3 ="INSERT INTO Sickness_information(patient_id) VALUES ('$melicode')";
        if(mysqli_query($connection,$sql_insert) and mysqli_query($connection,$sql_inseert2) and mysqli_query($connection,$sql_inseert3))
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

staylog("../view/admin/addpatients.view.php",$username,$result = "s");