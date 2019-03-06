<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMARTSHARE | REGISTER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Bootstrap 4 link-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
      background: url(img/background.svg) !important;
    }

    .user_card {
      height: 470px;
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
            <img src="img/logo.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form method="POST">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><img src="img/id_icon.PNG" width="22"></span>
              </div>
              <input type="tel" name="en_no" class="form-control input_user" placeholder="Enrollment number">
            </div>
            <div>
                <strong>
                    <?php echo $en_noErr; ?>
                </strong>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><img src="img/user_icon.PNG" width="24"></span>
              </div>
              <input type="text" name="name" class="form-control input_user" placeholder="Name">
            </div>
            <div>
                <strong>
                    <?php echo $nameErr; ?>
                </strong>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><img src="img/email_icon.PNG" width="22"></span>
              </div>
              <input type="email" name="email" class="form-control input_user" placeholder="Email address">
            </div>
            <div>
                <strong>
                    <?php echo $emailErr; ?>
                </strong>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><img src="img/phone_icon.PNG" width="24"></span>
              </div>
              <input type="tel" name="mob_no" class="form-control input_user" placeholder="Mobile number">
            </div>
            <div>
                <strong>
                    <?php echo $mob_noErr; ?>
                </strong>
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><img src="img/lock_icon.PNG" width="24"></span>
              </div>
              <input type="password" name="password" class="form-control input_pass" placeholder="Password">
            </div>
            <div>
              <strong>
                <?php echo $passwordErr; ?>
              </strong>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3 login_container">
          <input type="submit" name="register" class="btn login_btn" value="Register">
        </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>