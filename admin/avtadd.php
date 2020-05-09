<?php
require_once "config.php";
extract($_POST);
extract($_GET);

$selecttime = $year.$month.$day.$time;

$nyear = jdate('Y','','','','en');
$nmonth = jdate('m','','','','en');
$nday = jdate('d','','','','en');
$ntime = jdate('H','','','','en');

$nowtime = $nyear.$nmonth.$nday.$ntime;

if($selecttime < $nowtime){
    $flag = "past";
    header("Location: availabletimes.php?melicode=$melicode&flag=$flag");
    die;
}
else{
    if ($time == "null"){
        $flag = "time";
        header("Location: availabletimes.php?melicode=$melicode&flag=$flag");
        die;
    }else{

        $sql_select = "SELECT * FROM availabletimes WHERE year = '$year'AND month='$month'AND day='$day'AND time='$time'AND dr_id='$melicode'";
        $result = mysqli_query($connection,$sql_select);

        if(mysqli_num_rows($result) > 0 )
        {
            $flag = "false";
            echo $result;
            header("Location: availabletimes.php?melicode=$melicode&flag=$flag");
            die;
        }else{
            $bol = true;
            $sql_insert = "INSERT INTO availabletimes(year,month,day,time,dr_id,ActiveFlag)
            VALUES ('$year','$month','$day','$time','$melicode','$bol'); ";
            if(mysqli_query($connection,$sql_insert))
            {
                $flag = "true";
                header("Location: availabletimes.php?melicode=$melicode&flag=$flag");
            }
            else
            {
                $flag = "false";
                header("Location: availabletimes.php?melicode=$melicode&flag=$flag");
            }

        }

        mysqli_close($connection);
    }
}