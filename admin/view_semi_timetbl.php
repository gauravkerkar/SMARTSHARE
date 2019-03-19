<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEM I | VIEW TIMETABLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 CDN link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background: url(../img/background.svg) !important;
            background-size: contain;
        }
        div.dropdown-menu.p-2 {
            width: max-content;
        }
    </style>
</head>
<body>
<?php include('navigation.php'); ?>
<br>
<div class="container">
        <table class="table table-bordered table-striped table-hover table-light">
                <thead class="bg-dark text-white">
                    <tr class="text-center">
                        <th>File Description</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'smartshare');
                        $query = "SELECT * FROM sem_one_timetbl";
                        $result = mysqli_query($db, $query);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['file'] ?></td>
                            <td class="text-center"><a href="../upload/<?php echo $row['file'] ?>" class="btn btn-primary btn-sm" download>Download</a>
                            <?php 
                            if(isset($_GET["id"]))  {
                                $id = $_GET['id'];
                                $sql = "DELETE FROM sem_one_timetbl WHERE id='$id'";
                                mysqli_query($db, $sql);
                                }
                            ?>
                            <a href="view_semi_timetbl.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
                </table>
            </div>
</body>
</html>