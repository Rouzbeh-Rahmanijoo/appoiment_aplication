<?php
require 'section/header.php';
//if ($allInfo->num_rows > 0) { 

    ?>
    <div class="container py-5 text-center" align="right"> 
          <h1 class="mb-4 text-right">لیست بیماران</h1>
          <input class="form-control" id="myInput" type="text" placeholder="جستجو...">
            <br>
          <table class="table table-striped">
            <thead>
            <tr>
              <th>کدملی</th>
              <th>نام و نام خانوادگی</th>
              <th>شماره تماس</th>
              <th>آدرس</th>
            </tr>
            </thead>
            <tbody id="myTable">
            <?php  
               while ($rows = $allInfo->fetch_assoc()) {
            ?>
                 <tr>
                   <td><a href="../../appoiment/admin/patientsprofile.php?melicode=<?php echo $rows["melicode"];?>"><?php echo $rows["melicode"]; ?></a></td>
                   <td><?php echo  $rows["name"]; ?></td>
                   <td><?php echo  $rows["phonenumber"]; ?></td>
                   <td><?php echo  $rows["addres"]; ?></td>
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