<?php require 'section/header.php';?>

<div class="container" align="right">
    <h2>اضافه کردن پزشک</h2>
    <form action="adddr.php" method="Post">
        <div class="form-group">
            <label>کد ملی:</label>
            <input class="form-control" type="text" placeholder="کد ملی" name="melicode" >
        </div>
        <div class="form-group">
            <label>نام:</label>
            <input class="form-control" type="text" placeholder="نام" name="fname">
        </div>
        <div class="form-group">
            <label>نام خانوادگی:</label>
            <input class="form-control" type="text" placeholder="نام خانوادگی" name="lname" >
        </div>
        <div class="form-group">
            <label>تخصص:</label>
            <input class="form-control" type="text" placeholder="تخصص" name="takhasos" >
        </div>
        <div class="form-group" style="margin-left: 78%">
            <button type="submit" class="btn btn-primary">درج اطلاعات</button>
        </div>
    </form>
</div>
<?php require_once "section/footer.php";