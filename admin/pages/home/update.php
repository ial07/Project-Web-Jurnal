<div class="content-wrapper">

    <?php $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_home WHERE home_id = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update Data home</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Judul home</label>
                    <input type="text" value="<?php echo $dataedit['home_judul'] ?>" class=" form-control" name="judul">
                </div>

                <div class="form-group">
                    <label>Isi home</label>
                    <textarea cols="30" rows="10" class="form-control" name="isi"><?php echo $dataedit['home_isi'] ?></textarea>
                </div>
                <script>
                    CKEDITOR.replace('isi');
                </script>

                <div class="form-group">
                    <img width="100" src="images/fotohome/<?php echo $dataedit['home_gambar'] ?>" alt="">
                </div>


                <div class="form-group">
                    <label>Foto home</label>
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
                    move_uploaded_file($lokasi, "images/fotohome/" . $foto);
                    $update = $koneksi->query("UPDATE tbl_home SET home_judul = '$judul', home_isi = '$isi', home_gambar = '$foto' WHERE home_id = '$id'");
                } else {
                    $update = $koneksi->query("UPDATE tbl_home SET home_judul = '$judul', home_isi = '$isi' WHERE home_id = '$id'");
                }


                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/home/view'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/home/update'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>