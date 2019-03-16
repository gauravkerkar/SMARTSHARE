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
  $result = mysqli_query($db, "SELECT * FROM notice order by id  desc");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTSHARE | UPLOAD-notice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap 4 link-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
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
        #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
       background: rgba(145, 255, 0, 0.562);
   }
   
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   #image-id{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
    </style>
</head>

<body>
    <?php include('navigation.php'); ?>
    
    <div id="content">
            <?php
              while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div'>";
                    echo "<a href='../notice/".$row['image']."' download><img id='image-id' src='../notice/".$row['image']."' ></a>";
                    echo "<p>".$row['image_txt']."</p>";
                echo "</div>";
              }
            ?>
            <br>
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
                    <input class="btn btn-primary" type="submit" name="upload" value="upload">
                </div>
                <br>
            </form>
          </div>
          
</body>

</html>