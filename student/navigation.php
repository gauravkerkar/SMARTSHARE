<div class="home_hero">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand"><img src="../img/logo.png" style="width:40px" alt="logo"></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown bg-dark">
                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdownAccount" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                    <div class="dropdown-menu p-2 bg-dark text-white border-primary"
                        aria-labelledby="navbarDropdownAccount">
                        <section class="text-center"><img src="../img/user_img.jpg" width="80" height="80"
                                alt="user_icon">
                        </section>
                        <b>Name :</b> <?php echo $row['name']; ?><br>
                        <b>En No. :</b> <?php echo $row['en_no']; ?><br>
                        <b>Email :</b> <?php echo $row['email']; ?><br>
                        <b>Phno :</b> <?php echo $row['phone_no']; ?><br>
                        <a href="" class="float-left text-white pt-2" data-toggle="modal" data-target="#myModal">Update
                            password</a>
                        <form method="GET"><input type="submit" class="btn btn-primary btn-sm float-right" name="logout"
                                value="Logout"></form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Department
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <p class="dropdown-item">Computer Engineering</p>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Share</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update password</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <input type="password" name="pwd1" class="form-control" placeholder="Old password"><br>
                    <input type="password" name="pwd2" class="form-control" placeholder="New password">
                </div>
                <div class="modal-footer">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    $db = mysqli_connect('localhost', 'root', '', 'smartshare');

    if(isset($_POST['update'])) {
        $pwd1 = mysqli_real_escape_string($db, $_POST['pwd1']);
        $pwd2 = mysqli_real_escape_string($db, $_POST['pwd2']);
        $sql = "UPDATE students SET password='$pwd2' WHERE password='$pwd1'";
        $res = mysqli_query($db, $sql) or die(mysqli_error($db));
    }
?>