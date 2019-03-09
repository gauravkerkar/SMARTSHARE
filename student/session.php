<?php
    session_start();
    if ($_SESSION['student'] == "") {
        header('location: login.php');
        exit();
    } else {
        // Connect to the database
        $db = mysqli_connect('localhost', 'root', '', 'smartshare');

        $mail = $_SESSION['student'];
        $sql = "SELECT * FROM students WHERE email='$mail'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
    }

    if(isset($_GET['logout'])) {
        unset($_SESSION['student']);
        session_destroy();
        header('location: login.php');
        exit();
    }
?>