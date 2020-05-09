<!DOCTYPE html>
<head>

    <title>Admin page</title>
    <link rel="stylesheet" type="text/css" href="../../style/style.css">
    <style>
        body{
            direction: rtl;
            
        }
    </style>
    <link href="../../style/css/all.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../../../../appoiment/admin/adminpanel.php">ادمین</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../../../appoiment/admin/adddr.php">اضافه کردن پزشک</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                بیماران
            </a>
            <div class="dropdown-menu" align="left">
                <a class="dropdown-item" href="../../../../appoiment/admin/patients.php">لیست بیماران</a>
                <a class="dropdown-item" href="../../../../appoiment/admin/addpatients.php">اضافه کردن بیمار</a>
            </div>
            </li>

            <li class="nav-item text-left">
                <a class="nav-link text-left" href="../../../../appoiment/admin/logout.php"style="color: red;">خروج</a>
            </li>

        </ul>
    </nav>