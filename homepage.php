<?php 
    if ($_SESSION['admin'] == "") {
        header('location: adminlogin.php');
        exit();
    }

    if(isset($_POST['logout'])) {
        unset($_SESSION['admin']);
        session_destroy();
        header('location: adminlogin.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTSHARE | HOMEPAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    
</body>
</html>