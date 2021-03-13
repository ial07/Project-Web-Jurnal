<div class="content-wrapper">

    <?php $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_admin WHERE admin_id = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update Data Admin</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Admin Name</label>
                    <input type="text" value="<?php echo $dataedit['admin_nama'] ?>" class=" form-control" name="nama">
                </div>

                <div class="form-group">
                    <label>Admin Username</label>
                    <input type="text" value="<?php echo $dataedit['admin_username'] ?>" class="form-control" name="username">
                </div>

                <div class="form-group">
                    <label>Admin Password</label>
                    <input type="password" value="<?php echo $dataedit['admin_password'] ?>" class="form-control" name="pass">
                </div>

                <div class="form-group">
                    <img width="100" src="images/fotoadmin/<?php echo $dataedit['admin_foto'] ?>" alt="">
                </div>


                <div class="form-group">
                    <label>Admin Picture</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <button type="submit" name="edit" class="btn btn-warning btn-block">Update</button>

            </form>
            <?php if (isset($_POST['edit'])) {
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $pass = md5($_POST['pass']);

                $foto = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];



                if (!empty($lokasi)) {
                    move_uploaded_file($lokasi, "images/fotoadmin/" . $foto);
                    $update = $koneksi->query("UPDATE tbl_admin SET admin_nama = '$nama', admin_username = '$username', admin_password = '$pass', admin_foto = '$foto' WHERE admin_id = '$id'");
                } else {
                    $update = $koneksi->query("UPDATE tbl_admin SET admin_nama = '$nama', admin_username = '$username', admin_password = '$pass' WHERE admin_id = '$id'");
                }


                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/admin/view'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/admin/update'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>