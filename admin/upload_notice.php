<?php include('session.php'); ?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "smartshare");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_txt = mysqli_real_escape_string($db, $_POST['image_txt']);

  	// image file directory
  	$target = "../notice/".basename($image);

  	$sql = "INSERT INTO notice (image, image_txt) VALUES ('$image', '$image_txt')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM notice order by id  desc limit 10");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN | UPLOAD NOTICE</title>
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
            background-repeat: no-repeat;
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
        #img_div{
        	width: 80%;
            align-content: center;
        	padding: 5px;
        	margin: 15px auto;
        	border: 1px solid #cbcbcb;
        }
        #content{
        	width: 90%;
        	margin: 15px auto;
        	border: 1px solid #cbcbcb;
            background: rgba(233, 201, 57, 0.425);
        }
        .notice{
            background: rgba(17, 17, 17, 0.24);
            border-top: 7px solid rgb(69, 150, 243);
            border-radius:10px;
            border-bottom: 7px solid rgb(56, 20, 255); 
        }
        h3{
            border-bottom: 2px solid whitesmoke;
        }
    </style>
</head>

<body>
    <?php include('navigation.php'); ?>
    <br>
    <div class="container notice"><h3 class="text-white">NOTICE</h3>
        <div class="container">
            <form method="POST" action="upload_notice.php" enctype="multipart/form-data">
                <div class="form-group row mt-5">
                        <label for="image_txt" class="col-sm-2 col-form-label">
                            <h5 class="text-white">File description:</h5>
                        </label>
                        <div class="col-sm-5 input-group">
                            <textarea type="textarea" class="form-control" name="image_txt" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">
                            <h5 class="text-white">Choose a file:</h5>
                        </label>
                        <div class="col-sm-5 input-group">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                <div>
                    <input class="btn btn-primary" type="submit" name="upload" value="Upload">
                </div>
                <br>
            </form>
        </div>
        <div id="content">
            <?php
              while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div'>";
                    echo "<a href='../notice/".$row['image']."' download><img class='img-fluid rounded' src='../notice/".$row['image']."' ></a>";
                    echo "<h4 class='text-center text-white'>".$row['image_txt']."</h4>";
                echo "</div>";
              }
            ?>
        </div>
          
</body>

</html>