<?php
    $title = "Login";
    require "includes/head.php";
    $err = "";

    if(isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = MD5 ($_POST['pass']);

        $query = mysqli_query ($conn, "select * from admin where user_admin = '$user' and pass_admin = '$pass'");
        $row = mysqli_num_rows($query);

        $query1 = mysqli_query ($conn, "select * from user where user_user = '$user' and pass_user = '$pass'");
        $row1 = mysqli_num_rows($query1);

        if($row > 0) {
            $_SESSION['admin'] = true;
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/index.php'/>";
        }else if ($row1 > 0) {
            $_SESSION['user'] = true;
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'/>";
        }else {
            $err = "Login gagal";
        }
    }

?>
<body class="bg-dark">

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="user" required="required" autofocus="autofocus">
                            <label for="inputEmail">Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
                </form>
                <br>
                <p style="color:black">Belum memiliki akun?<a href="<?=BASE_URL;?>admin/signup.php"> Signup</a></p>
                <p><?=$err;?></p>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>