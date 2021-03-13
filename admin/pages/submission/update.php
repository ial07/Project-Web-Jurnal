<div class="content-wrapper">

    <?php
    $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_submission a JOIN tbl_file_sup b ON a.file_sup AND b.id_file_sup WHERE file_sup = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update Data Submission</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="<?php echo $dataedit['title'] ?>" class=" form-control" name="title">
                    <input type="hidden" value="<?php echo $_GET['idedit'] ?>" name="id">
                </div>

                <div class="form-group">
                    <label for="">Abstract</label>
                    <textarea name="abstract" id="abstract" cols="30" rows="5" class="form-control"><?php echo $dataedit['abstract'] ?></textarea>
                </div>
                <script>
                    CKEDITOR.replace('abstract');
                </script>

                <div class="form-group">
                    <label>Academic Dicipline</label>
                    <input type="text" value="<?php echo $dataedit['academic_discipline'] ?>" class="form-control" name="academic">
                </div>

                <div class="form-group">
                    <label>Keyword</label>
                    <input type="text" value="<?php echo $dataedit['keyword'] ?>" class="form-control" name="keyword">
                </div>

                <div class="form-group">
                    <label>Agencies</label>
                    <input type="text" value="<?php echo $dataedit['agencies'] ?>" class="form-control" name="agencies">
                </div>

                <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <div class="form-group">
                    <label for="">References</label>
                    <textarea name="reference" id="reference" cols="30" rows="5" class="form-control"><?php echo $dataedit['reference'] ?></textarea>
                </div>
                <script>
                    CKEDITOR.replace('reference');
                </script>


                <button type="submit" name="edit" class="btn btn-warning btn-block">Update</button>

            </form>
            <?php if (isset($_POST['edit'])) {
                $title = $_POST['title'];
                $abstract = $_POST['abstract'];
                $academic = $_POST['academic'];
                $keyword = $_POST['keyword'];
                $agencies = $_POST['agencies'];
                $reference = $_POST['reference'];

                $idu = $_POST['id'];

                $foto = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];

                if (empty($foto)) {
                    $update = $koneksi->query("UPDATE tbl_submission SET title = '$title', abstract = '$abstract', academic_discipline = '$academic', keyword = '$keyword', agencies = '$agencies', reference = '$reference' WHERE file_sup = '$idu'");
                } else {
                    move_uploaded_file($lokasi, "../assets/img/file_submission/" . $foto);
                    $update = $koneksi->query("UPDATE tbl_file_sup SET original_name = '$foto' WHERE id_file_sup = '$idu'");
                    $koneksi->query("UPDATE tbl_submission SET title = '$title', abstract = '$abstract', academic_discipline = '$academic', keyword = '$keyword', agencies = '$agencies', reference = '$reference' WHERE file_sup = '$idu'");
                }







                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/submission/sub'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/submission/update'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>