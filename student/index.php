<?php include('session.php'); ?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "smartshare");

 
  $result = mysqli_query($db, "SELECT * FROM notice order by id  desc");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>STUDENT | HOMEPAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            background: url(../img/background.svg) !important;
            background-size: contain;
        }

        a.buttonsborder:hover {
            color: #000;
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
            color: #000;
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
            height: 13.8rem;
        }
        div .sam{
            width: 158px;
        }
        #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   #image-id{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
       background: rgba(233, 201, 57, 0.425);
   }
   .notice{
       background: rgba(17, 17, 17, 0.24);
       border-top: 7px solid rgb(69, 150, 243);
       border-radius:10px;
       border-bottom: 7px solid rgb(56, 20, 255); 
   }
   h3{
       border-bottom: 2px solid whitesmoke;
   }
    </style>
</head>

<body>
    <?php include('navigation.php'); ?>
    <div class="container box-hero">
        <h4 class="box-body">Quick Links</h4>
        <p class="margin"></p>
        <div class="row">
            <div class="col-xs-6 col-md-2 sam">
                <a class="btn btn-app buttonsborder" href="download_semi.php"><img src="../img/sem1.png" class="sem"
                        alt="sem1">Semester I</a>
            </div>
            <div class="col-xs-6 col-md-2 sam">
                <a class="btn btn-app buttonsborder" href="download_semii.php"><img src="../img/sem2.png" class="sem"
                        alt="sem2">Semester
                    II</a>
            </div>
            <div class="col-xs-6 col-md-2 sam">
                <a class="btn btn-app buttonsborder" href="download_semiii.php"><img src="../img/sem3.png" class="sem"
                        alt="sem3">Semester
                    III</a>
            </div>
            <div class="col-xs-6 col-md-2 sam">
                <a class="btn btn-app buttonsborder" href="download_semiv.php"><img src="../img/sem4.png" class="sem"
                        alt="sem4">Semester
                    IV</a>
            </div>
            <div class="col-xs-6 col-md-2 sam">
                <a class="btn btn-app  buttonsborder" href="download_semv.php"><img src="../img/sem5.png" class="sem"
                        alt="sem5">Semester V</a>
            </div>
            <div class="col-xs-6 col-md-2 sam">
                <a class="btn btn-app buttonsborder" href="download_semvi.php"><img src="../img/sem6.png" class="sem"
                        alt="sem6">Semester VI</a>
            </div>
        </div>
    </div>
    <div class="container notice"><h3 class="text-white">NOTICES</h3>
    <div id="content">
            <?php
              while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div'>";
                    echo "<a href='../notice/".$row['image']."' download><img id='image-id' src='../notice/".$row['image']."' >";
                    echo "<p>".$row['image_txt']."</p></a>";
                echo "</div>";
              }
            ?>
          </div>
        </div>
</body>

</html>