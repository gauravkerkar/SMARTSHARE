<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $db = mysqli_connect('localhost', 'root', '', 'smartshare');
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $en_no = $_POST['en_no'];
        $query = mysqli_query($db, "SELECT * FROM students WHERE email='$email' && en_no='$en_no'") or die(mysqli_error($db));
        $row = mysqli_fetch_array($query);

    if($row > 0){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                        // Specify SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';               // SMTP username
    $mail->Password = '';                        // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `SSL` also accepted
    $mail->Port = 465;                                    // TCP port to connect to 587 = `TLS` or 465 = `SSL`

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['en_no']);
    $mail->addAddress($email, $email);          // Add recipients address

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Forgot Password";                   // Set mail subject
    $mail->Body = "Hii {$row['name']} your password is {$row['password']}";

    $mail->send();
    echo '<script>alert("Check your email! We have sent your password")</script>';
    } catch(Exception $e){
    echo '<script>alert("Error while retrieving your password! Please check your entered details")</script>';
}

}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>STUDENT | FORGOT PASSWORD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: url(../img/background.svg) !important;
        }

        .user_card {
            height: 400px;
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background: orchid;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }

        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: whitesmoke;
            padding: 10px;
            text-align: center;
        }

        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .form_container {
            margin-top: 100px;
        }

        .login_btn {
            width: 100%;
            background: rgb(132, 0, 100) !important;
            color: white !important;
        }

        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .login_container {
            padding: 0 2rem;
        }

        .input-group-text {
            background: rgb(132, 0, 100) !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
            padding: 6px;
        }

        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #c0392b !important;
        }
    </style>
</head>
<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="../img/logo.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="POST">
                <h5 class="text-center text-white pb-2">FORGOT PASSWORD</h5>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><img src="../img/id_icon.PNG" width="24"></span>
                        </div>
                        <input type="text" name="en_no" class="form-control input_pass"  placeholder="Enrollment Number" required>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><img src="../img/email_icon.PNG" width="24"></span>
                        </div>
                        <input type="email" name="email" class="form-control input_pass"  placeholder="Email address" required>
                    </div>
              
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <input type="submit" name="submit" class="btn login_btn" value="Submit">
        </div>
        <div class="d-flex justify-content-center links pt-2">
                    <a href="login.php" class="text-white">Back to login</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>