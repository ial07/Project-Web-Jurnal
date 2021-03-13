<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Login</h2>
            <ol>
                <li><a href="?page=home" class="text-white">Home</a></li>
                <li>Login</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<article class="entry" data-aos="fade-up">
    <div class="card">
        <div class="card-header text-center text-white" style="background-color:  #ff5821;">User Login</div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" name="login" value="login" class="btn text-white" style="background-color:  #ff5821;">Login</button>
            </form>
        </div>
    </div>
</article><!-- End blog entry -->


<?php include 'admin/model/koneksi.php';
?>
<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek = $koneksi->query("SELECT * FROM tbl_register WHERE username = '$username' AND register_password = '$password'");

    $pecah = $cek->fetch_assoc();
    $validasi = $cek->num_rows;

    if ($validasi >= 1) {
        session_start();
        $_SESSION['user'] = $pecah;

        echo " <script>
                        alert('You have successfully logged in');
                        window.location='?page=user/home';
                        </script>";
    } else {
        echo " <script>
                        alert('Your password is wrong, please login again');
                        window.location='?page=login';
                        </script>";
    }
} ?>