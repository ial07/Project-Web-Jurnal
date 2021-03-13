<div class="content-wrapper">

    <?php $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_announcement WHERE announcement_id = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update data announcement</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Judul announcement</label>
                    <input type="text" value="<?php echo $dataedit['announcement_judul'] ?>" class=" form-control" name="judul">
                </div>

                <div class="form-group">
                    <label>Isi announcement</label>
                    <textarea cols="30" rows="10" class="form-control" name="isi"><?php echo $dataedit['announcement_isi'] ?></textarea>
                </div>
                <script>
                    CKEDITOR.replace('isi');
                </script>

                <div class="form-group">
                    <img width="100" src="images/fotoannouncement/<?php echo $dataedit['announcement_gambar'] ?>" alt="">
                </div>

                <div class="form-group">
                    <label>Announcement Picture</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <button type="submit" name="edit" class="btn btn-warning btn-block">Update</button>

            </form>
            <?php if (isset($_POST['edit'])) {
                $judul = $_POST['judul'];
                $isi = $_POST['isi'];

                $foto = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];



                if (!empty($lokasi)) {
                    move_uploaded_file($lokasi, "images/fotoannouncement/" . $foto);
                    $update = $koneksi->query("UPDATE tbl_announcement SET announcement_judul = '$judul', announcement_isi = '$isi', announcement_gambar = '$foto' WHERE announcement_id = '$id'");
                } else {
                    $update = $koneksi->query("UPDATE tbl_announcement SET announcement_judul = '$judul', announcement_isi = '$isi' WHERE announcement_id = '$id'");
                }


                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/announcement/view'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/announcement/update'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>