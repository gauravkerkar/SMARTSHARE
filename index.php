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
            padding: 15px 5px;
            margin: 0 0 10px 10px;
            min-width: 80px;
            height: 60px;
            text-align: center;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
            font-size: 1rem;
        }
        .btn-app .fa{
            display: block;
            color:rgb(130, 0, 120);
        }
        .box-hero{
    position: relative;
    border-radius: 8px;
    margin-top: 30px;
    background: #ffffff;
    border-top: 3px solid #3c8dbc;
    margin-bottom: 20px;

    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.margin{
    margin-top: 30px;
}
    </style>
</head>

<body>
    <div class="home_hero">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="img/logo.png" style="width:40px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Department
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Computer Engineering</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Share</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container box-hero">
        <h4 class="box-body">Quick Links</h4>
        <p class="margin"></p>
        <div class="row">
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href="#"><i class="fa fa-th"></i>Semester I</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href="#"><i class="fa fa-th"></i>Semester II</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href="#"><i class="fa fa-th"></i>Semester III</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href="#"><i class="fa fa-th"></i>Semester IV</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app  buttonsborder"><i class="fa fa-th"></i>Semester V</button>
            </div>
            <div class="col-xs-6 col-md-2">
                <button type="button" class="btn btn-app buttonsborder" href="#"><i class="fa fa-th"></i>Semester VI</button>
            </div>
            
        </div>
    </div>

</body>

</html>