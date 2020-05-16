<?php require 'section/header.php';
?>

<div class="container" id="div" align="right">
    <div class="container" align="left" style="margin-top: 20px">
        <?php echo '<a href="../../appoiment/admin/editpat.php?melicode=' . $row["melicode"] . '" class="btn btn-primary" role="button">ویرایش</a>' ?>
    </div>
    <h1><?php echo $row["name"]; ?></h1>
    <h2>کد ملی: <?php echo $row["melicode"] ?></h2>
    <h2>شماره تماس: <?php echo $row["phonenumber"] ?></h2>
    <h2>آدرس: <?php echo $row["addres"]; ?></h2>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" style="margin-top: 50px;">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#finfo">اطلاعات تکمیلی</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#taketime">گرفتن وقت</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#showtimes">وقت های گرفته شده</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#maraje">مراجعات</a>
        </li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="finfo" class="container tab-pane active"><br>

            <h3>سن: <?php if (is_null($finforow["age"]) or empty($finforow["age"])) {
                        echo "_____";
                    } else {
                        echo $finforow["age"];
                    } ?></h3>
            <h3>وضیعت تاهل: <?php if (is_null($finforow["marige"]) or empty($finforow["marige"])) {
                                echo "_____";
                            } else {
                                echo $finforow["marige"];
                            } ?></h3>
            <h3>شماره منزل: <?php if (is_null($finforow["phone"]) or empty($finforow["phone"])) {
                                echo "_____";
                            } else {
                                echo $finforow["phone"];
                            } ?></h3>
            <h3>معرف: <?php if (is_null($finforow["Introducing"]) or empty($finforow["Introducing"])) {
                            echo "_____";
                        } else {
                            echo $finforow["Introducing"];
                        } ?></h3>
            <?php echo '<a style="margin-bottom: 20px"href="../../appoiment/admin/pfiedit.php?melicode=' . $row["melicode"] . '" class="btn btn-primary" role="button">ویرایش</a>' ?>
        </div>
        <div id="taketime" class="container tab-pane fade"><br>
            <div class="container" align="right">
                <h3>پزشک مورد نظر را انتخاب کنید</h3>
                <div class="list-group container" align="right" style="margin-bottom: 20px">
                    <?php
                    if ($result) {
                        while ($rows = $result->fetch_array()) {
                            echo '<a href="../../appoiment/admin/taketime.php?drmelicode=' . $rows["melicode"] . '&pmelicode=' . $melicode . '" class="list-group-item">' . $rows["Fname"] . " " . $rows["Lname"] . '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- show availble times -->
        <div id="showtimes" class="container tab-pane fade"><br>

            <div class="container py-5 text-center" align="right">
                <input class="form-control" id="myInput" type="text" placeholder="جستجو...">
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>دکتر</th>
                            <th>سال</th>
                            <th>ماه</th>
                            <th>روز</th>
                            <th>بازه زمانی</th>
                            <th>مراجعه کرد</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php
                        while ($take_time_array = $take_time->fetch_array()) {
                            $time_id = $take_time_array["time_id"];
                            $time_taken_id = (string) $take_time_array["id"];
                            $var = "0";
                            $avtime = $mysqli->query("SELECT * FROM availabletimes WHERE id=$time_id");
                            $avtime_array = $avtime->fetch_array();
                            $drmelicode = $take_time_array["dr_id"];
                            $drname = $mysqli->query("SELECT * FROM doctors WHERE melicode=$drmelicode");
                            $drname_array = $drname->fetch_array();
                        ?>
                        <tr>
                            <td><?php echo  $drname_array["Fname"] . " " . $drname_array["Lname"]; ?></td>
                            <td><?php echo  $avtime_array["year"]; ?></td>
                            <td><?php echo  $avtime_array["month"]; ?></td>
                            <td><?php echo  $avtime_array["day"]; ?></td>
                            <td><?php echo  $avtime_array["time"]; ?></td>
                            <td><a
                                    href='../../appoiment/admin/maraje.php?id=<?php echo $take_time_array["id"]; ?>&melicode=<?php echo $melicode ?>&time_id=<?php echo $time_taken_id ?>'>مراجعه
                                    کرد</a></td>
                            <td><a
                                    href='../../appoiment/admin/dlttakentime.php?id=<?php echo $take_time_array["id"]; ?>&melicode=<?php echo $melicode ?>'>حذف</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>


            </div>


        </div>

        <!-- show maraje -->
        <div id="maraje" class="container tab-pane fade"><br>

            <div class="container py-5 text-center" align="right">
                <input class="form-control" id="myInput1" type="text" placeholder="جستجو...">
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>دکتر</th>
                            <th>سال</th>
                            <th>ماه</th>
                            <th>روز</th>
                            <th>بازه زمانی</th>
                            <th>اطلاعات مراجعه</th>
                            <th>عکس های مربوط به مراجعه</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody id="myTable1">
                        <?php
                        while ($take_maraje_array = $take_maraje->fetch_array()) {

                            $time_id = $take_maraje_array["time_id"];
                            $time_taken_id = (string) $take_maraje_array["id"];
                            $var = "0";
                            $avtime = $mysqli->query("SELECT * FROM availabletimes WHERE id=$time_id");
                            $avtime_array = $avtime->fetch_array();
                            $drmelicode = $take_maraje_array["dr_id"];
                            $drname = $mysqli->query("SELECT * FROM doctors WHERE melicode=$drmelicode");
                            $drname_array = $drname->fetch_array();
                            $time_taken_id = $take_maraje_array["id"];
                            $sinfo = $mysqli->query("SELECT * FROM Sickness_information WHERE time_taken_id=$time_taken_id");
                            $sinfo_array = $sinfo->fetch_array();
                        ?>
                        <tr>
                            <td><?php echo  $drname_array["Fname"] . " " . $drname_array["Lname"]; ?></td>
                            <td><?php echo  $avtime_array["year"]; ?></td>
                            <td><?php echo  $avtime_array["month"]; ?></td>
                            <td><?php echo  $avtime_array["day"]; ?></td>
                            <td><?php echo  $avtime_array["time"]; ?></td>
                            <td><a
                                    href='../../appoiment/admin/Sinfo.php?time_taken_id=<?php echo $take_maraje_array["id"]; ?>&melicode=<?php echo $melicode ?>'>اطلاعات
                                    مراجعه</a></td>
                            <td><a href="Sinfophotos.php?Sinfo_id=<?php echo $sinfo_array["id"]; ?>">عکس های مربوط به
                                    مراجعه</a></td>
                            <td><a
                                    href='../../appoiment/admin/dlttakentime.php?id=<?php echo $take_maraje_array["id"]; ?>&melicode=<?php echo $melicode ?>'>حذف</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>


            </div>


        </div>
        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#delet"
            style="margin-top: 20px;">حذف بیمار</button>
        <div id="delet" class="collapse">
            آیا از تصمیم خود مطمعنید؟
            <?php echo '<a href="../../appoiment/admin/dtpat.php?melicode=' . $row["melicode"] . '" class="btn btn-danger" role="button">بله میخواهم حذف شود</a>' ?>
        </div>
        <br />
    </div>
</div>

<?php require_once "section/footer.php"; ?>
<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
<script>
$(document).ready(function() {
    $("#myInput1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>