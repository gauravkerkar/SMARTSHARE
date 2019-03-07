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
    


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try{
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                        // Specify SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';               // SMTP username
    $mail->Password = '';                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `SSL` also accepted
    $mail->Port = 587;                                    // TCP port to connect to 587 = `TLS` or 465 = `SSL`

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['en']);
    $mail->addAddress($email, $email);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "forgot password";                   // Set mail subject
    $mail->Body = "Hi $email your password is {$row['password']}";

    $mail->send();
    echo '<script>alert("Message has been sent. We will contact you shortly!")</script>';
}
catch(Exception $e){
    echo '<script>alert("Message has been sent. We wontact you shortly!")</script>';
}

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