<div class="content-wrapper">

    <?php $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_archive WHERE archive_id = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update Data Archive</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="<?php echo $dataedit['title'] ?>" class=" form-control" name="title">
                </div>

                <div class="form-group">
                    <label>ISSN</label>
                    <input type="text" value="<?php echo $dataedit['des'] ?>" class="form-control" name="issn">
                </div>

                <div class="form-group">
                    <label>Year</label>
                    <input type="text" value="<?php echo $dataedit['year'] ?>" class="form-control" name="year">
                </div>

                <div class="form-group">
                    <img width="100" src="images/fotoarchive/<?php echo $dataedit['pict'] ?>" alt="">
                </div>


                <div class="form-group">
                    <label>Cover</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <button type="submit" name="edit" class="btn btn-warning btn-block">Update</button>

            </form>
            <?php if (isset($_POST['edit'])) {
                $title = $_POST['title'];
                $issn = $_POST['issn'];
                $year = $_POST['year'];

                $foto = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];



                if (!empty($lokasi)) {
                    move_uploaded_file($lokasi, "images/fotoarchive/" . $foto);
                    $update = $koneksi->query("UPDATE tbl_archive SET year = '$year', des = '$issn', title = '$title', pict = '$foto' WHERE archive_id = '$id'");
                } else {
                    $update = $koneksi->query("UPDATE tbl_archive SET year = '$year', des = '$issn', title = '$title' WHERE archive_id = '$id'");
                }


                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/archive/view'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/archive/update'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>