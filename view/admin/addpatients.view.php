<?php require 'section/header.php';?>

<div class="container"  align="right">
    <h2>اضافه کردن بیمار:</h2>
    <form action="addpatients.php" method="Post">
        <div class="form-group">
            <label >کد ملی:</label>
            <input class="form-control" type="text" placeholder="کد ملی" name="melicode" >
        </div>
        <div class="form-group">
            <label >نام و نام خانوادگی:</label>
            <input class="form-control" type="text" placeholder="نام و نام خانوادگی" name="name">
        </div>
        <div class="form-group">
            <label >شماره تماس:</label>
            <input class="form-control" type="text" placeholder="شماره تماس" name="phonenumber" >
        </div>
        <div class="form-group">
            <label >آدرس:</label>
            <input class="form-control" type="text" placeholder="آدرس" name="addres" >
        </div>
        <div class="form-group" style="margin-left: 78%">
            <button type="submit" name="submit" class="btn btn-primary">درج اطلاعات</button>
        </div>
    </form>
</div>
<?php require_once "section/footer.php";