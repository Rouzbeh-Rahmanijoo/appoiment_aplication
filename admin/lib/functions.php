<?php
require_once "jdf.php";

function staylog($dir,$username,$result){
    if(isset($username)){
        require_once $dir;
    }else{
        header("Location: login.php");
        die;
    }
}
function ChekForPastTime(){
    $nyear = jdate('Y','','','','en');
    $nmonth = jdate('m','','','','en');
    $nday = jdate('d','','','','en');
    $ntime = jdate('H','','','','en');
    $nowtime = $nyear.$nmonth.$nday.$ntime;

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "appointment";

    $mysqli = new mysqli($host, $user, $password, $dbname);
    $mysqli->set_charset("utf8");
    $result = $mysqli->query("SELECT * FROM availabletimes");
    //echo $nowtime;
    //echo "<br>";

    while($rows = $result->fetch_assoc()){
        $id = $rows["id"];
        $selecttime = $rows["year"].$rows["month"].$rows["day"].$rows["time"];
        //echo $selecttime."  ";

        if($selecttime < $nowtime){

            if($mysqli->query("UPDATE availabletimes SET ActiveFlag=0 where id=$id")){
                return "done"."<br>";
            }else{
                return "qurry problem"."<br>";
            }

        }else{
            return "its ok!"."</br>";
        }
    }
}
function CheckForTakenTimes(){

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "appointment";
 
    $mysqli = new mysqli($host, $user, $password, $dbname);
    $mysqli->set_charset("utf8");
    $result = $mysqli->query("SELECT * FROM availabletimes where ActiveFlag=1");
    $con = mysqli_connect($host, $user, $password, $dbname);
 
    while($rows = $result->fetch_assoc()){
        $avtimeid = $rows["id"];
        $query = "SELECT * FROM timetaken where time_id=$avtimeid";
        $timekaken = mysqli_query($con,$query);
        //echo mysqli_num_rows($timekaken);
        if(mysqli_num_rows($timekaken) >= 5){
            $mysqli->query("UPDATE availabletimes SET FiveActiveFlage=1 WHERE id=$avtimeid");
        }
        if(mysqli_num_rows($timekaken) < 5){
            $mysqli->query("UPDATE availabletimes SET FiveActiveFlage=0 WHERE id=$avtimeid");
        }
    }
}