<?php
    $title = "Login";
    require "includes/head.php";
    $err = "";

  /* if(isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = MD5 ($_POST['pass']);

        $query = mysqli_query ($conn, "select * from admin where user_admin = '$user' and pass_admin = '$pass'");
        $result = mysqli_num_rows($query);

        $query1 = mysqli_query ($conn, "select * from user where user_user = '$user' and pass_user = '$pass'");
        $result1 = mysqli_num_rows($query1);

        if($result > 0) {
            $_SESSION['admin'] = true;
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/index.php'/>";
        }else if ($result1 > 0) {
            $_SESSION['user'] = true;
                $_SESSION['nama_user'] = $result1['nama_user'];

                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'/>";
            
            
        }else {
            $err = "Login gagal";
        }
    } */


   if (isset($_POST['login'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $check_user = mysqli_query($conn, "SELECT * FROM user WHERE user_user = '$user'");
    $row_found = mysqli_num_rows($check_user);
    
    if ($row_found) {
        while ($row = mysqli_fetch_assoc($check_user)) {
            $nama_user = $row['nama_user'];
            $id_user = $row['id_user'];
            $user_user = $row['user_user'];
            $pass_temp = $row['pass_user'];
            $role_user = $row['role'];
        }
        $cek = password_verify($pass, $pass_temp);
        if ($cek) {
            
            //session_start();
            $_SESSION['nama_user'] = $nama_user;
            $_SESSION['user_user'] = $user_user;
            $_SESSION['id_user'] = $id_user;
            print $row_found;
            echo 'Mashoook'.$role_user;
            if ($role_user == 1) {
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'/>";    
            }
            else if ($role_user == 2) {
                $_SESSION['admin'] = true;
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/index.php'/>";    
            }

        } else {
            echo 'Password salah';
        }
    }

    //echo 'masuk lur';
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