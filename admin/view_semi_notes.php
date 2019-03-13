<?php include('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTSHARE | VIEW FILES</title>
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
                        $query = "SELECT * FROM sem_one_notes";
                        $result = mysqli_query($db, $query);
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['file'] ?></td>
                            <td class="text-center"><a href="../upload/<?php echo $row['file'] ?>" class="btn btn-primary btn-sm" download>Download</a>
                            <?php 
                            if(isset($_GET["action"]))  {  
                                if($_GET["action"] == "delete")  {  
                                $id = $_GET['id'];
                                $sql = "DELETE FROM sem_one_notes WHERE id='$id'";
                                mysqli_query($db, $sql);
                                }
                            }
                            ?>
                            <a href="view_semi_notes.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Delete</a>
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