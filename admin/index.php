<?php include 'model/koneksi.php';
session_start();

if (empty($_SESSION['admin'])) {

  echo "
  <script>
    alert('You must login');
    window.location='login.php';
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <script src="plugins/jquery/jquery.min.js"></script>
  <div class="wrapper">
    <?php include 'components/topbar.php'  ?>

    <?php include 'components/sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <?php include "content.php" ?>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include 'components/footer.php'  ?>
  </div>
  <!-- ./wrapper -->

  <?php include 'components/script.php' ?>
</body>

</html>