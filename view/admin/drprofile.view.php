<?php require 'section/header.php';?>

<div class="container" id="div" align="right">
    <div class="container" align="left" style="margin-top: 20px">
        <?php echo '<a href="../../appoiment/admin/editdr.php?melicode='.$row["melicode"].'" class="btn btn-primary" role="button">ویرایش</a>'?>
    </div>
    <h1>دکتر <?php echo $row["Fname"].' '.$row["Lname"];?></h1>
    <h2>کد ملی: <?php echo $row["melicode"]?></h2>
    <h2>تخصص: <?php echo $row["Specialty"]?></h2>

    <?php echo '<a href="../../appoiment/admin/availabletimes.php?melicode='.$row["melicode"].'" class="btn btn-primary" role="button">اضافه کردن وقت</a>'?>
    <?php echo '<a href="../../appoiment/admin/avtimesshow.php?melicode='.$row["melicode"].'&inpast=no" class="btn btn-success" role="button"> وقت های موجود</a>'?>
    <?php echo '<a href="../../appoiment/admin/avtimesshow.php?melicode='.$row["melicode"].'&inpast=taken" class="btn btn-danger" role="button">وقت های گرفته شده</a>'?>
    <?php echo '<a href="../../appoiment/admin/avtimesshow.php?melicode='.$row["melicode"].'&inpast=maraje" class="btn btn-success" role="button">مراجعات</a>'?>
    <?php echo '<a href="../../appoiment/admin/avtimesshow.php?melicode='.$row["melicode"].'&inpast=yes" class="btn btn-warning" role="button"> وقت های گذشته</a>'?>

    <br>

    <button type="button" class="btn btn-danger " data-toggle="collapse" data-target="#demo" style="margin-top: 300px">حذف</button>
    <div id="demo" class="collapse">
        آیا از تصمیم خود مطمعنید؟
        <?php echo '<a href="../../appoiment/admin/dltdr.php?melicode='.$row["melicode"].'" class="btn btn-danger" role="button">بله میخواهم حذف شود</a>'?>
    </div>
    <br/>
</div>


<?php require_once "section/footer.php";