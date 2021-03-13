<?php include 'model/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php' ?>
</head>

<body class="hold-transition login-page">

    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body bg-dark">

                <p class="login-box-msg">Welcome to</p>

                <p><img src="images/putih.png" width="300"></p>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username..">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="Password..">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>

                <?php if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = md5($_POST['pass']);

                    $cek = $koneksi->query("SELECT * FROM tbl_admin WHERE admin_username = '$username' AND admin_password = '$password'");

                    $pecah = $cek->fetch_assoc();
                    $validasi = $cek->num_rows;

                    if ($validasi >= 1) {
                        $_SESSION['admin'] = $pecah;

                        echo " <script>
                        alert('You have successfully logged in');
                        window.location='index.php';
                        </script>";
                    } else {
                        echo " <script>
                        alert('Your password is wrong, please login again');
                        window.location='login.php';
                        </script>";
                    }
                } ?>



            </div>

        </div>
    </div>

    <?php include 'components/script.php' ?>

</body>

</html>