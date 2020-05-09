<?php
require 'section/header.php';?>
    <div class="container">
        <div class="col-lg-12">
            <h2>Welcome <?= $username?></h2>
        </div>

    <div class="container" align="right">
        <h2>لیست پزشک های موجود:</h2>
        <div class="list-group" align="right">
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
