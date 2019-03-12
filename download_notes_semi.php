<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTSHARE | download</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<p><br></p>
<div class="container">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        
                        $db = new PDO("mysql:host=localhost;dbname=smartshare","root","");
                        $stmt = $db->prepare("select * from newfiles");
                        $stmt->execute();
                        while($row = $stmt->fetch()){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['filename'] ?></td>
                            <td class="text-center"><a href="download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                        </tr>
                        <?php
                }
                ?>
                    </tbody>
                </table>
            </div>
</body>
</html>