<head>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<link href="../style/css/all.css" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container text-right">
        <h2>ورود به پنل ادمین</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">نام کاربری:</label>
                <input type="username" class="form-control text-right" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">پسورد:</label>
                <input type="password" class="form-control text-right" id="pwd" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">ورود</button>
        </form>
    </div>
<?php require_once 'section/footer.php';?>