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
</head>
<body>
<form action="upload.php" method='post' enctype="multipart/form-data">
Description of File: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>
<?php 
if(isset($_POST['submit'])){
$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

if (isset($name)) {

$path= '../';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}
}
}
?>
<?php

$db = mysqli_connect("localhost", "root", "", "smartshare");
if (!$db)
{
die ('Could not connect:' . mysql_error());
}



if(!empty($description)){
mysqli_query($db, "INSERT INTO files (description, filename)
VALUES ('$description', '$name')");







$result= mysqli_query($db, "SELECT description, filename FROM files ORDER BY ID desc" ) 
or die("SELECT Error: ".mysql_error()); 

print "<table border=1>\n"; 
while ($row = mysqli_fetch_array($result)){ 
$files_field= $row['filename'];
$files_show= "Uploads/files/$files_field";
$descriptionvalue= $row['description'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 
}
?> 
</body>
</html>