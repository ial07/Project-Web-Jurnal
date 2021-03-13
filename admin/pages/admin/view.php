<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="card">
        <div class="card-header text-center">
            <h3>Data Table Admin</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#tambah">Add Data</a>
            <table class="table table-bordered" id="example1">
                <thead class="bg-dark">
                    <tr>
                        <th>No</th>
                        <th>Admin Name</th>
                        <th>Admin Username</th>
                        <!--<th>Admin Password</th>-->
                        <th>Admin Picture</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ambil = $koneksi->query("SELECT * FROM tbl_admin");
                    $no = 1;
                    while ($pecah = $ambil->fetch_assoc()) {


                    ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pecah['admin_nama'] ?></td>
                            <td><?php echo $pecah['admin_username'] ?></td>
                            <td><img width="100" height="100" src="images/fotoadmin/<?php echo $pecah['admin_foto'] ?>"> </td>
                            <td>
                                <a class="btn btn-warning" href="?page=pages/admin/update&idedit=<?php echo $pecah['admin_id'] ?>">Update</a>
                                <a class="btn btn-danger" href="?page=pages/admin/delete&idhapus=<?php echo $pecah['admin_id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah data Admin -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entry Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Admin Name</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-group">
                            <label>Admin Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>

                        <div class="form-group">
                            <label>Admin Password</label>
                            <input type="password" class="form-control" name="pass">
                        </div>

                        <div class="form-group">
                            <label>Admin Picture</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <button type="submit" name="simpan" class="btn btn-success btn-block">Save</button>

                    </form>
                    <?php if (isset($_POST['simpan'])) {
                        $nama = $_POST['nama'];
                        $username = $_POST['username'];
                        $pass = md5($_POST['pass']);

                        $foto = $_FILES['foto']['name'];
                        $lokasi = $_FILES['foto']['tmp_name'];

                        move_uploaded_file($lokasi, "images/fotoadmin/" . $foto);

                        $simpan = $koneksi->query("INSERT INTO tbl_admin (admin_nama, admin_username, admin_password, admin_foto) VALUES ('$nama','$username','$pass','$foto')");

                        if ($simpan == TRUE) {

                            echo " <script>
                            alert('Data saved successfully')
                            window.location='?page=pages/admin/view'
                            </script>";
                        } else {
                            echo " <script>
                            alert('Data failed to save')
                            window.location='?page=pages/admin/view'
                            </script>";
                        }
                    }
                    ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


</div>