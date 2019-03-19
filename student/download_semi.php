<?php include('session.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEM I | DOWNLOAD FILES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 CDN link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<style>
    body {
        background: url(../img/background.svg) !important;
        background-size: contain;
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

    div.dropdown-menu.p-2 {
        width: max-content;
    }

    .sem {
        padding: 50px;
        text-align: center;

    }
</style>

<body>
    <?php include('navigation.php'); ?>
    <br>
    <div class="container text-center" style="background:rgba(209, 183, 183, 0.801); border-radius: 1em; border-left:0.4em solid aqua; border-right: 0.4em solid aqua">
        <div class="row">
        <div class="col-sm-3">
            <a class="btn btn-primary" style="width:9rem; height:8.4rem; margin-bottom: 12px; margin-top: 12px; border-top:3px solid honeydew;border-left: 3px solid honeydew;" href="download_semi_notes.php">
                <div>
                <img  class="img-responsive" src="../img/notes.png">
                <div class="text-white">Notes</div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary" style="width:9em; height:8.4em; margin-bottom: 12px; margin-top: 12px; border-top:3px solid honeydew;border-left: 3px solid honeydew;" href="download_semi_timetbl.php">
                <img src="../img/timetable.png">
                <div class="text-white">Time Table</div>
            </a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary" style="width:9em; height:8.4em; margin-bottom: 12px; margin-top: 12px; border-top:3px solid honeydew;border-left: 3px solid honeydew;" href="download_semi_que.php">
                <img src="../img/question.png">
                <div class="text-white">Question Papers</div>
            </a>
        </div>
        <div class="col-sm-3">
                <a class="btn btn-primary" style="width:9em; height:8.4em; margin-bottom: 12px; margin-top: 12px; border-top:3px solid honeydew;border-left: 3px solid honeydew;" href="download_semi_que.php">
                    <img src="../img/question.png">
                    <div class="text-white">Syllabus</div>
                </a>
            </div>
    </div>
    </div>
</body>

</html>