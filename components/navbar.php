<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <div class="row">
                <img src="assets/img/ijcmd.jpg">
                <h1 class="font-italic"><a href="?page=home">IJCMD</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
        </div>

        <nav class="nav-menu d-none d-lg-block font-weight-bold font-italic">
            <ul>

                <?php if (empty($_SESSION['user'])) { ?>

                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=pages/archive">Archives</a></li>
                    <li><a href="?page=pages/announcement">Announcement</a></li>
                    <li data-toggle="modal" data-target="#exampleModal"><a href="#">Search</a></li>
                    <li><a href="?page=register">Register</a></li>
                    <li><a href="?page=login">Login</a></li>
                <?php } else { ?>

                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=pages/archive">Archives</a></li>
                    <li><a href="?page=pages/announcement">Announcement</a></li>
                    <li data-toggle="modal" data-target="#exampleModal"><a href="#">Search</a></li>
                    <li><a href="?page=user/home">User Home</a></li>
                    <li><a href="?page=logout">Logout</a></li>

                <?php }  ?>



            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <img class="img-fluid" src="assets/img/putih1.png" alt="">
    </div>
</div>