<?php require 'section/header.php';?>

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
            <button type="submit" class="btn btn-primary"name="submit">ویرایش</button>
            </div>
        </form>
    </div>
<?php require_once "section/footer.php";

