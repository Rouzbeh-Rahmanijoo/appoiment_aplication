<?php
require 'section/header.php';
//if ($allInfo->num_rows > 0) { 

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
                   <td><a href='../../appoiment/admin/avtimesdlt.php?id=<?php echo $rows["id"];?>&melicode=<?php echo $melicode?>'>حذف</a></td>
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