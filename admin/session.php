<?php
    session_start();
    if ($_SESSION['admin'] == "") {
        header('location: login.php');
        exit();
      } else {
        // Connect to the database
        $db = mysqli_connect('localhost', 'root', '', 'smartshare');
        $name = $_SESSION['admin'];
        $sql = "SELECT * FROM admin WHERE username='$name'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
      }

      if(isset($_GET['logout'])) {
        unset($_SESSION['admin']);
        session_destroy();
        header('location: login.php');
        exit();
    }
?>