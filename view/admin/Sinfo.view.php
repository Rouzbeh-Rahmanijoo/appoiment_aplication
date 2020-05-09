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
        <form action="Sinfo.php?time_taken_id=<?php echo $row["id"]?>&melicode=<?php echo $melicode?>" method="POST">
            <h2>اطلاعات مراحعه</h2>
            <div class="container text-left">
                <a href="Sinfophotos.php?Sinfo_id=<?php echo $row["id"];?>" class="btn btn-info" role="button">گالری</a>
            </div>
            <div class="form-group">
                <label style="margin-left: 89%">علائم: </label>
                <input class="form-control" type="text" value="<?php echo $row['alaem'];?>" name="alaem" >
            </div>
            <div class="form-group">
                <label style="margin-left: 89%">ماینع: </label>
                <input class="form-control" type="text" value="<?php echo $row['mayene'];?>" name="mayene" >
            </div>
            <div class="form-group">
                <label style="margin-left: 83%">پاراکلینیک:</label>
                <input class="form-control" type="text" value="<?php echo $row['paraclinik']?>" name="paraclinik" >
            </div>
            <div class="form-group">
                <label style="margin-left: 100%">پیگیری:</label>
                <input class="form-control" type="text" value="<?php echo $row['peygiri']?>" name="peygiri" >
            </div>
            <div class="form-group" style="margin-left: 78%">
                <button type="submit" name="submit">ویرایش</button>

            </div>
        </form>
    </div>
<?php require_once "section/footer.php";

