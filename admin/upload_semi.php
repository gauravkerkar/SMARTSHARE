<?php include('session.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEM I | UPLOAD</title>
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

    .sem1 {
        padding: 50px;
        text-align: center;

    }
</style>

<body>
    <?php include('navigation.php'); ?>
    <div class="sem1">
        <h1 class="text-center text-white pb-5" style="font-family:'Times New Roman', Times, serif">SEMESTER I</h1>
        <div class="row">
            <div class="col"><a href="upload_semi_notes.php" data-toggle="tooltip" title="Notes"><img
                        src="../img/notes.png"></a>
            </div>
            <div class="col"><a href="upload_semi_timetbl.php" data-toggle="tooltip" title="TimeTable"><img src="../img/timetable.png"></a>
            </div>
            <div class="col"><a href="upload_semi_que.php" data-toggle="tooltip" title="Question Papers"><img
                        src="../img/question.png"></a></div>
        </div>
    </div>

</body>

</html>