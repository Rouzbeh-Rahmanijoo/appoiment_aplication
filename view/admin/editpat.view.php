<?php require 'section/header.php';?>
    <style>
        /* button {
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
        } */
    </style>
    <div class="container text-right">
        <form action="editpat.php?melicode=<?php echo $row["melicode"]?>" method="Post">
            <h2>ویرایش اطلاعات بیماران:</h2>
            <div class="form-group">
                <label style="margin-left: 89%">کد ملی:</label>
                <input class="form-control" type="text" value="<?php echo $row['melicode'];?>" name="melicode" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%">نام:</label>
                <input class="form-control" type="text" value="<?php echo $row['name']?>" name="name">
            </div>
            <div class="form-group">
                <label style="margin-left: 83%">نام خانوادگی:</label>
                <input class="form-control" type="text" value="<?php echo $row['phonenumber']?>" name="phonenumber" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%">تخصص:</label>
                <input class="form-control" type="text" value="<?php echo $row['addres']?>" name="addres" >
            </div>
            <div class="form-group" style="margin-left: 78%">
                <button type="submit" class="btn btn-primary">ویرایش</button>
            </div>
        </form>
    </div>
<?php require_once "section/footer.php";

