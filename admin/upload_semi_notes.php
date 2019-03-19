<?php include('session.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEM I | UPLOAD NOTES</title>
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
        
        .table-contain {
            padding: 1em 20em;
        }
    </style>
</head>

<body>
    <?php include('navigation.php'); ?>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group row mt-5">
                <label for="description" class="col-sm-2 col-form-label">
                    <h5 class="text-white">File description:</h5>
                </label>
                <div class="col-sm-5 input-group">
                    <textarea type="textarea" class="form-control" name="description" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label">
                    <h5 class="text-white">Choose a file:</h5>
                </label>
                <div class="col-sm-5 input-group">
                    <input type="file" class="form-control" name="file">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="upload" value="Upload">
        </form>
    </div>
    <br><br>
    <?php 
    if(isset($_POST['upload'])) {
        $name= $_FILES['file']['name'];
        $tmp_name= $_FILES['file']['tmp_name'];
        $submitbutton= $_POST['upload'];
        $position= strpos($name, ".");
        $fileextension= substr($name, $position + 1);
        $fileextension= strtolower($fileextension);
        $description= $_POST['description'];

        if (isset($name)) {
        $path= '../upload/';
        
        if (!empty($name)){
        if (move_uploaded_file($tmp_name, $path.$name)) {
        echo '<h5 class="text-white ml-3">Uploaded Successfully!</h5>';
        }
    }
  }
}

    $db = mysqli_connect("localhost", "root", "", "smartshare");
    if (!$db) {
    die ('Could not connect:' . mysql_error());
    }

    if(!empty($description)) {
    mysqli_query($db, "INSERT INTO sem_one_notes (file, description) VALUES ('$name', '$description')");

    $result = mysqli_query($db, "SELECT file, description FROM sem_one_notes ORDER BY id asc" ) or die("SELECT Error: ".mysqli_error()); 

    print "<div class='table-contain'>\n"; 
    print "<table class='table table-sm table-dark table-hover table-bordered text-center'>\n";
    echo "<tr><th>Description</th><th>File Name</th></tr>";
    while ($row = mysqli_fetch_array($result)){ 
    $files_field= $row['file'];
    $files_show= "Uploads/files/$files_field";
    $descriptionvalue= $row['description'];
    echo "<tr><td>$descriptionvalue</td><td>$files_field</td></tr>";
    } 
    print "</table>\n"; 
}
?>
</body>

</html>