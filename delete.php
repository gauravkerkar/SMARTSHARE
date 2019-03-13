<?php
$db = mysqli_connect('localhost', 'root', '', 'smartshare');
if(isset($_POST['del'])){
$id = $_POST['id'];

$sql  = "Delete from sem_one_notes where id='$id'";
$result = mysqli_query($db, $sql) or die(mysqli_error($db));
header("location: download_notes_semi.php");
}
?>