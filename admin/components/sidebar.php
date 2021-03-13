        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <center><img src="images/putih.png" class="brand" width="200"></center>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?php $fotoyglogin = $_SESSION['admin']['admin_foto'] ?>
                        <img src="images/fotoadmin/<?= $fotoyglogin ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <?php $namayglogin = $_SESSION['admin']['admin_nama'] ?>
                        <a href="#" class="d-block"><?php echo $namayglogin ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <section>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                            <li class="nav-item">
                                <a href="?page=home" class="nav-link">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/admin/view" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Data Admin
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/home/view" class="nav-link">
                                    <i class="nav-icon fa fa-clipboard"></i>
                                    <p>
                                        Home Frontend
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/announcement/view" class="nav-link">
                                    <i class="nav-icon fa fa-bullhorn"></i>
                                    <p>
                                        Announcement
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/register/view" class="nav-link">
                                    <i class="nav-icon fa fa-registered"></i>
                                    <p>
                                        Registered
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/submission/sub" class="nav-link">
                                    <i class="nav-icon fas fa-id-badge"></i>
                                    <p>
                                        Submission
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>
                
                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/supplementary/view" class="nav-link">
                                    <i class="nav-icon fa fa-archive"></i>
                                    <p>
                                        Supplementary
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/archive/view" class="nav-link">
                                    <i class="nav-icon fa fa-archive"></i>
                                    <p>
                                        Archives
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <nav class="mt-1">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="?page=pages/indexing/view" class="nav-link">
                                    <i class="nav-icon fa fa-archive"></i>
                                    <p>
                                        Indexing
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>


                </ul>
                </nav>
                </section>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>