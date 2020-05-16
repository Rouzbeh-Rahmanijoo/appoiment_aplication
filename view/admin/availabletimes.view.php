<?php require_once "section/header.php";?>

<dt><h2 class="container text-right" style="margin-top: 10px">زمان مورد نظر را وارد کنید</h2></dt>
<div class="container text-right" style="margin-top: 40px">
<div class="text-left">
    <a href="drprofile.php?melicode=<?php echo $melicode?>" class="btn btn-info" role="button">بازگشت</a>
</div>

    <form class="text-right" action="avtadd.php?melicode=<?php echo $melicode;?>" method="POST">
        <h3>انتخاب سال:</h3>
        <select name="year" class="custom-select mb-3">
        <option selected><?php echo $date = (int)jdate('Y','','','','en');?></option>
            <?php 
                for ($i = 1;$i <= 5;$i++) { 
                    $date++;
                    echo "<option value='$date'>".$date."</option>";
                }
            ?>
        </select>
        <h3>انتخاب ماه:</h3>
        <select name="month" class="custom-select mb-3">
        <option selected value="<?php echo jdate('m','','','','en')?>"><?php echo jdate('F')."(ماه جاری)"?></option>
            <?php 
                foreach ($monthar as $x=>$x_value) { 
                    echo "<option value='$x'>$x_value</option>";
                }
            ?>
        </select>
        <h3>روز:</h3>
        <select name="day" class="custom-select mb-3">
        <option selected value="<?php echo (int)jdate('d','','','','en')?>"><?php echo jdate('j')."(امروز)"?></option>
            <?php 
                foreach ($days as $x) { 
                    echo "<option value='$x'>".$x."</option>";
                }
            ?>
        </select>
        <h3>بازه ساعتی:</h3>
        <select name="time" class="custom-select mb-3">
        <option selected value="null">انتخاب بازه ساعتی</option>
            <?php 
                foreach ($times as $x=>$x_value) { 
                    echo "<option value='$x'>".$x_value."</option>";
                }
            ?>
        </select>
        <button type="submit" class="btn btn-primary">درج اطلاعات</button>
    </form>
</div>

<?php require_once "section/footer.php"?>