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
        <form action="siedit.php?melicode=<?php echo $row["patient_id"]?>" method="POST">
            <h2>ویرایش اطلاعت تکمیلی بیماران:</h2>
            <div class="form-group">
                <label style="margin-left: 89%">علائم بیماری: </label>
                <input class="form-control" type="text" value="<?php echo $row['alaem'];?>" name="alaem" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%"> بیماری:</label>
                <input class="form-control" type="text" value="<?php echo $row['mayene'];?>" name="mayene" >
            </div>
            <div class="form-group">
                <label style="margin-left: 83%">:پاراکلینیک</label>
                <select name="paraclinik" class="custom-select">
                    <option selected><?php echo $row['paraclinik']?></option>
                    <option value="مجرد">مجرد</option>
                    <option value="متاهل">متاهل</option>
                </select>
                <input class="form-control" type="text" value="<?php echo $row['paraclinik']?>" name="paraclinik" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%">پیگیری بیمار:</label>
                <input class="form-control" type="text" value="<?php echo $row['peygiri']?>" name="peygiri" >
            </div>
            <div class="form-group" style="margin-left: 78%">
                <button type="submit" >ویرایش</button>
            </div>
        </form>
    </div>
<?php require_once "section/footer.php";

