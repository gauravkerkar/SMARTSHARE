<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    $db = mysqli_connect('localhost', 'root', '', 'smartshare');
    if(isset($_POST['submit']))
    {

        $email = $_POST['email'];
        $en = $_POST['en'];
$query = mysqli_query($db, "select * from students where email='$email' && en_no='$en'") or die(mysqli_error($db));
$row = mysqli_fetch_array($query);

if($row>0){
    $mgClient = new Mailgun('96d6bda07df5452fb2750f2a667d28f0-8889127d-56978300');
    $result = $mgClient->get("domains", array('limit' => 5, 'skip' => 10));
}
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTSHARE | FORGOT PASSWORD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="width:700px; height:500px; padding:40px" class="container">
    <form method="POST">

        <div class="input-group mb-2">
            <div class="input-group-append">
                <span class="input-group-text"><img src="img/email_icon.PNG" width="24"></span>
            </div>
            <input type="text" name="en" class="form-control input_pass"  placeholder="en" required>
        </div>
        <div class="input-group mb-2">
            <div class="input-group-append">
                <span class="input-group-text"><img src="img/email_icon.PNG" width="24"></span>
            </div>
            <input type="email" name="email" class="form-control input_pass"  placeholder="email" required>
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
            <input type="submit" name="submit" class="btn login_btn" value="Login">
        </div>
    </form>
</body>

</html>