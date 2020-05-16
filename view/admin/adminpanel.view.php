<?php
require 'section/header.php';?>
    <div class="container">

    <div class="container" align="right" style="margin-top: 20px;">
        <h2>لیست پزشک های موجود:</h2>
        <div class="list-group container" align="right" style="margin-top: 30px;">
             <?php
            if($result){   
                while($row = $result->fetch_array()){
                    echo '<a href="../../appoiment/admin/drprofile.php?melicode='.$row["melicode"].'" class="list-group-item">'.$row["Fname"]." ".$row["Lname"].'</a>';
                }
            }
            ?>
        </div>
    </div>

<?php require_once 'section/footer.php';?>
