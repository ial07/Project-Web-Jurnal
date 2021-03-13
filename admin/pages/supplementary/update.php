<div class="content-wrapper">

    <?php $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_index WHERE index_id = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update Data Indexing</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Link Indexing</label>
                    <input type="text" value="<?php echo $dataedit['index_link'] ?>" class=" form-control" name="link">
                </div>

                <div class="form-group">
                    <img width="100" src="images/fotoindex/<?php echo $dataedit['index_foto'] ?>" alt="">
                </div>


                <div class="form-group">
                    <label>Indexing Picture</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <button type="submit" name="edit" class="btn btn-warning btn-block">Update</button>

            </form>
            <?php if (isset($_POST['edit'])) {
                $link = $_POST['link'];

                $foto = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];



                if (!empty($lokasi)) {
                    move_uploaded_file($lokasi, "images/fotoindex/" . $foto);
                    $update = $koneksi->query("UPDATE tbl_index SET index_link = '$link', index_foto = '$foto' WHERE index_id = '$id'");
                } else {
                    $update = $koneksi->query("UPDATE tbl_index SET index_link = '$link' WHERE index_id = '$id'");
                }


                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/indexing/view'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/indexing/update'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>