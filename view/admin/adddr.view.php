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
<div style="margin-top: 50px; margin-left: 200px; margin-right: 200px" align="right">
    <h2>اضافه کردن پزشک</h2>
    <form action="adddr.php" method="Post">
        <div class="form-group">
            <label style="margin-left: 89%">کد ملی:</label>
            <input class="form-control" type="text" placeholder="کد ملی" name="melicode" >
        </div>
        <div class="form-group">
            <label style="margin-left: 100%">نام:</label>
            <input class="form-control" type="text" placeholder="نام" name="fname">
        </div>
        <div class="form-group">
            <label style="margin-left: 83%">نام خانوادگی:</label>
            <input class="form-control" type="text" placeholder="نام خانوادگی" name="lname" >
        </div>
        <div class="form-group">
            <label style="margin-left: 100%">تخصص:</label>
            <input class="form-control" type="text" placeholder="تخصص" name="takhasos" >
        </div>
        <div class="form-group" style="margin-left: 78%">
            <button type="submit" >درج اطلاعات</button>
        </div>
    </form>
</div>
<?php require_once "section/footer.php";