<?php
session_start();
$err="";
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'smartshare');
// Admin Login user
if (isset($_POST['admin_login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  if ($username != "" && $password != "") {
    $query = "SELECT id FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result)==1) {
        $_SESSION['admin'] = $username;
        header('location: index.php'); //redirect to homepage page
        exit();	
    } else {
        $err = "Incorrect username and password!";
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN | LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 CDN link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function showpass() {
            var pass = document.getElementById('pass');
            if (document.getElementById('customControlInline').checked) {
                pass.setAttribute('type', 'text');
            } else {
                pass.setAttribute('type', 'password');
            }
        }
    </script>

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
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><img src="../img/user_icon.PNG" width="24"></span>
                            </div>
                            <input type="text" name="username" class="form-control input_user" placeholder="Username" required>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><img src="../img/lock_icon.PNG" width="24"></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" id="pass"
                                placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" onclick="showpass();"
                                    id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Show Password</label>
                            </div>
                            <strong><?php echo $err; ?></strong>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <input type="submit" name="admin_login" class="btn login_btn" value="Login">
                        </div>
                    </form>
                </div>
                <div class="d-flex justify-content-center links py-2">
                    <a href="forgot_password.php" class="text-white">Forgot your password?</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="../student/login.php" class="text-white">Student login</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>