<?php include('session_student.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTSHARE | INDEX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <style>
        body {
            background: url(img/background.svg) !important;
            background-size: contain;
        }

        button.buttonsborder:hover {
            border: 1px solid #0066fff1;
        }

        .btn-app {
            border-radius: 3px;
            position: relative;
            padding: 6px 22px;
            margin: 0 0 10px 10px;
            min-width: 121px;
            height: 80px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
            font-size: 1rem;
        }

        .btn-app .sem {
            display: block;
            width: 65px;
            height: 48px;
            color: rgb(130, 0, 120);
        }

        .box-hero {
            position: relative;
            border-radius: 8px;
            margin-top: 30px;
            background: #ffffff;
            border-top: 3px solid #3c8dbc;
            margin-bottom: 20px;

            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        }

        .margin {
            margin-top: 30px;
        }

        div.dropdown-menu.p-2 {
            width: max-content;
        }
    </style>
</head>

<body>
    <?php include('navigation_student.php'); ?>
    <div class="container box-hero">
        <h4 class="box-body">Quick Links</h4>
        <p class="margin"></p>
        <div class="row">
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href=""><img src="./img/sem1.png" class="sem"
                        alt="sem1">Semester I</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href=""><img src="./img/sem2.png" class="sem"
                        alt="sem2">Semester
                    II</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href=""><img src="./img/sem3.png" class="sem"
                        alt="sem3">Semester
                    III</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href=""><img src="./img/sem4.png" class="sem"
                        alt="sem4">Semester
                    IV</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app  buttonsborder" href=""><img src="./img/sem5.png" class="sem"
                        alt="sem5">Semester V</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href=""><img src="./img/sem6.png" class="sem"
                        alt="sem6">Semester VI</button>
            </div>
        </div>
    </div>

</body>

</html>