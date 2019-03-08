<?php
// define variables and set to empty values
$en_no = $name = $email = $mob_no = $username = $password = "";

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'smartshare');

// If the register button is clicked
if (isset($_POST['register'])) {
    $en_no = mysqli_real_escape_string($db, $_POST['en_no']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobno = mysqli_real_escape_string($db, $_POST['mob_no']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  // If no errors, save the user's data to the database
  if ($en_no != "" && $name != "" && $email != "" && $mob_no != "" && $password != "") {
    $password_encrypt = md5($password); // Password encryption before storing in the database [Message Digest 5]
    $query = "INSERT INTO students (en_no, name, email, phone_no, password) VALUES ('$en_no', '$name', '$email', '$mob_no', '$password_encrypt')";
    mysqli_query($db, $query);
    header('location: login.php'); //redirect to login page
    exit();	
  }
}

// Login user
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  if ($email != "" && $password != "") {
    $password_encrypt = md5($password); // Password encryption before comparing with the database [Message Digest 5]
    $query = "SELECT * FROM students WHERE email='$email' AND password='$password_encrypt'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result)==1) {
        $_SESSION['student'] = $email;
        header('location: index.php'); //redirect to index page
        exit();	
    } else {
       echo '<script>alert("Invalid email and password!")</script>';
    }
  }
}

  // Admin Login user
if (isset($_POST['admin_login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

  if ($username != "" && $password != "") {
    $query = "SELECT id FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result)==1) {
        $_SESSION['admin'] = $username;
        header('location: homepage.php'); //redirect to homepage page
        exit();	
    } else {
        echo '<script>alert("Invalid username and password!")</script>';
    }
  }
}

?>