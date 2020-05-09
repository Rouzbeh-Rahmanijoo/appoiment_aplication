<?php require 'section/header.php';?>
    <style>
        button {
            color: #1D9AF2;
            border: 1px solid #1D9AF2;
            border-radius: 4px;
            padding: 0 15px;
            cursor: pointer;
            height: 32px;
            font-size: 14px;
            transition: all 0.2s ease-in-out;
        }
        button:hover {
            transform: scale(0.8);
        }
    </style>
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
            <button type="submit" >درج اطلاعات</button>
        </div>
    </form>
</div>
<?php require_once "section/footer.php";