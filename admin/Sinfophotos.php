<?php
$Sinfo_id = $_GET["Sinfo_id"];
$connect = mysqli_connect("localhost", "manaitir_admin", "12345", "manaitir_appoiment");
if (isset($_POST["insert"])) {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "INSERT INTO Sinfo_photos(Sinfo_id,photo) VALUES ('$Sinfo_id','$file')";
    if (mysqli_query($connect, $query)) {
        echo '<script>alert("عکس ذخیره شد")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<?php require_once "../view/admin/section/header.php" ?>

<head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
</head>

<body>
    <br /><br />
    <div class="container text-right" style="width:500px;">
        <h3 align="center">گالری مربوط به مراجعات بیمار</h3>
        <br />
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <br />
            <input type="submit" name="insert" id="insert" value="‌ذخیره" class="btn btn-info"
                style="margin-top: 20px;" />
        </form>
        <br />
        <br />
        <table class="table table-bordered">
            <tr>
                <!-- <th>Image</th>-->
            </tr>
            <?php
            $query = "SELECT * FROM Sinfo_photos WHERE Sinfo_id='$Sinfo_id' ORDER BY id DESC";
            $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,' . base64_encode($row['photo']) . '" height="200" width="200" class="img-thumnail" /> 
                                    <a href="#" class="btn btn-danger" role="button">حذف</a>
 
                               </td>  
                          </tr>  
                     ';
            }
            ?>
        </table>
    </div>
</body>

</html>
<script>
$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('فایل مورد نظر عکس نیست');
                $('#image').val('');
                return false;
            }
        }
    });
});
</script>