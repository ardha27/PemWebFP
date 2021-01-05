<?php
    $title = "Signup";
    require "includes/head.php";

    if(isset($_POST['signup'])) {
        $name = $_POST['name'];
        $user = $_POST['user'];
        $pass = MD5 ($_POST['pass']);

        $query = mysqli_query ($conn, "insert into user (nama_user, user_user, pass_user) 
                                                        value ('$name', '$user', '$pass')");
        if($query) {
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/login.php'";
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
                            <input type="text" id="inputName" class="form-control" placeholder="Nama" name="name" required="required" autofocus="autofocus">
                            <label for="inputName">Nama</label>
                        </div>
                    </div>
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
                    <input type="submit" class="btn btn-primary btn-block" value="Daftar" name="signup">
                </form>
                <br>
                <p style="color:black">Sudah memiliki akun?<a href="<?=BASE_URL;?>admin/login.php"> Login</a></p>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>