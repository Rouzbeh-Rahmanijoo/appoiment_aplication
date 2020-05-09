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
    <div class="container text-right">
        <form action="pfiedit.php?melicode=<?php echo $row["patient_id"]?>" method="POST">
            <h2>ویرایش اطلاعت تکمیلی بیماران:</h2>
            <div class="form-group">
                <label style="margin-left: 89%">سن: </label>
                <input class="form-control" type="text" value="<?php echo $row['age'];?>" name="age" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%"> تاهل:</label>
                <select name="marige" class="custom-select">
                    <option selected><?php echo $row['marige']?></option>
                    <option value="مجرد">مجرد</option>
                    <option value="متاهل">متاهل</option>
                </select>
            </div>
            <div class="form-group">
                <label style="margin-left: 83%">:شماره ثابت</label>
                <input class="form-control" type="text" value="<?php echo $row['phone']?>" name="phone" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%">معزف:</label>
                <input class="form-control" type="text" value="<?php echo $row['Introducing']?>" name="Introducing" >
            </div>
            <div class="form-group" style="margin-left: 78%">
                <button type="submit" name="submit">ویرایش</button>
            </div>
        </form>
    </div>
<?php require_once "section/footer.php";

