<?php
require 'section/header.php';
if ($inpast == 'no') { 

    ?>
    <div class="container py-5 text-center" align="right"> 
          <h1 class="mb-4 text-right"> <?php echo ' وقت های دکتر'.' '.$drname['Fname']." ".$drname["Lname"]?></h1>
          <input class="form-control" id="myInput" type="text" placeholder="جستجو...">
            <br>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>سال</th>
              <th>ماه</th>
              <th>روز</th>
              <th>بازه زمانی</th>
              <th>حذف</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <?php  
               while ($rows = $allInfo->fetch_assoc()) {
            ?>
                 <tr>
                   <td><?php echo  $rows["year"]; ?></td>
                   <td><?php echo  $rows["month"]; ?></td>
                   <td><?php echo  $rows["day"]; ?></td>
                   <td><?php echo  $rows["time"]; ?></td>
                   <td><a href='../../appoiment/admin/avtimesdlt.php?id=<?php echo $rows["id"];?>&melicode=<?php echo $melicode?>&a=no'>حذف</a></td>
                 </tr>

             <?php } ?>
             </tbody>
          </table>

              
        </div>
        <?php require_once "section/footer.php";?>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>
</html>
          <?php }?>
<?php
if ($inpast == 'yes') { 

    ?>
    <div class="container py-5 text-center" align="right"> 
          <h1 class="mb-4 text-right"> <?php echo ' وقت های دکتر'.' '.$drname['Fname']." ".$drname["Lname"]?></h1>
          <input class="form-control" id="myInput" type="text" placeholder="جستجو...">
            <br>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>سال</th>
              <th>ماه</th>
              <th>روز</th>
              <th>بازه زمانی</th>
              <th>حذف</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <?php  
               while ($rows = $allInfo1->fetch_assoc()) {
            ?>
                 <tr>
                   <td><?php echo  $rows["year"]; ?></td>
                   <td><?php echo  $rows["month"]; ?></td>
                   <td><?php echo  $rows["day"]; ?></td>
                   <td><?php echo  $rows["time"]; ?></td>
                   <td><a href='../../appoiment/admin/avtimesdlt.php?id=<?php echo $rows["id"];?>&melicode=<?php echo $melicode?>&a=yes'>حذف</a></td>
                 </tr>

             <?php } ?>
             </tbody>
          </table>

              
        </div>
        <?php require_once "section/footer.php";?>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>
</html>
          <?php }?>
          <?php
if ($inpast == 'taken') { 

    ?>
    <div class="container py-5 text-center" align="right"> 
          <h1 class="mb-4 text-right"> <?php echo ' وقت های دکتر'.' '.$drname['Fname']." ".$drname["Lname"]?></h1>
          <input class="form-control" id="myInput" type="text" placeholder="جستجو...">
            <br>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>نام بیمار</th>
              <th>سال</th>
              <th>ماه</th>
              <th>روز</th>
              <th>بازه زمانی</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <?php  
               while ($rows = $allInfo2->fetch_assoc()) {
                 $patient_id = $rows["patient_id"];
                 $time_id = $rows["time_id"];
                 $patients = $mysqli->query("SELECT * FROM patients where melicode=$patient_id");
                 $patients_row = $patients->fetch_assoc();
                 $time = $mysqli->query("SELECT * FROM availabletimes where id=$time_id");
                 $time_row = $time->fetch_assoc();
            ?>
                 <tr>
                 <td><a href='../../appoiment/admin/patientsprofile.php?melicode=<?php echo $patients_row["melicode"];?>'><?php echo $patients_row["name"];?></a></td>                   <td><?php echo  $time_row["year"]; ?></td>
                   <td><?php echo  $time_row["month"]; ?></td>
                   <td><?php echo  $time_row["day"]; ?></td>
                   <td><?php echo  $time_row["time"]; ?></td>
                 </tr>

             <?php } ?>
             </tbody>
          </table>

              
        </div>
        <?php require_once "section/footer.php";?>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>
</html>
          <?php }?>
<?php
if ($inpast == 'maraje') { 

    ?>
    <div class="container py-5 text-center" align="right"> 
          <h1 class="mb-4 text-right"> <?php echo ' وقت های دکتر'.' '.$drname['Fname']." ".$drname["Lname"]?></h1>
          <input class="form-control" id="myInput" type="text" placeholder="جستجو...">
            <br>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>نام بیمار</th>
              <th>سال</th>
              <th>ماه</th>
              <th>روز</th>
              <th>بازه زمانی</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <?php  
               while ($rows = $allInfo3->fetch_assoc()) {
                 $patient_id = $rows["patient_id"];
                 $time_id = $rows["time_id"];
                 $patients = $mysqli->query("SELECT * FROM patients where melicode=$patient_id");
                 $patients_row = $patients->fetch_assoc();
                 $time = $mysqli->query("SELECT * FROM availabletimes where id=$time_id");
                 $time_row = $time->fetch_assoc();
            ?>
                 <tr>
                 <td><a href='../../appoiment/admin/patientsprofile.php?melicode=<?php echo $patients_row["melicode"];?>'><?php echo $patients_row["name"];?></a></td>                   
                   <td><?php echo  $time_row["year"]; ?></td>
                   <td><?php echo  $time_row["month"]; ?></td>
                   <td><?php echo  $time_row["day"]; ?></td>
                   <td><?php echo  $time_row["time"]; ?></td>
                 </tr>

             <?php } ?>
             </tbody>
          </table>

              
        </div>
        <?php require_once "section/footer.php";?>
        <script>
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>
</html>
          <?php }?>