<?php
require_once "config.php";
session_start();
extract($_SESSION);
extract($_POST);
error_reporting(0);
if(isset($submit)){
    settype($melicode,"integer");
    //var_dump($melicode);
    if (empty($melicode) || empty($name) || empty($phonenumber)){
        $msg = "اطلاعات وارد شده صحیح نیست";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }elseif(is_int($melicode)){

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
            //$sql_inseert3 ="INSERT INTO Sickness_information(patient_id) VALUES ('$melicode')";
            if(mysqli_query($connection,$sql_insert) and mysqli_query($connection,$sql_inseert2))
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
    }//else{
    //     $msg = "خطای رخ داده است توجه کنید که کد ملی باید اعداد انگلیسی باشد";
    //     echo "<script type='text/javascript'>alert('$msg');</script>";
    // }
}
staylog("../view/admin/addpatients.view.php",$username,$result = "s");