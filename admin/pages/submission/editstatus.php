<div class="content-wrapper">

    <?php $id = $_GET['idedit'];

    $dataedit = $koneksi->query("SELECT * FROM tbl_submission WHERE sub_id = '$id'")->fetch_assoc();

    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h3>Update Data Admin</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>STATUS</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">Pilih</option>
                        <option value="Awaiting Assignment">Awaiting Assignment</option>
                        <option value="IN REVIEW">IN REVIEW</option>
                        <option value="IN EDITING">IN EDITING</option>
                    </select>
                    <script>
                        document.getElementById('status').value = "<?php echo $dataedit['status'] ?>";
                    </script>
                </div>


                <button type="submit" name="edit" class="btn btn-warning btn-block">Update</button>

            </form>
            <?php if (isset($_POST['edit'])) {
                $status = $_POST['status'];

                $update = $koneksi->query("UPDATE tbl_submission SET status = '$status' WHERE sub_id = '$id'");



                if ($update == TRUE) {

                    echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=pages/submission/sub'
                        </script>";
                } else {
                    echo " <script>
                        alert('Data failed to update')
                        window.location='?page=pages/submission/editstatus'
                        </script>";
                }
            } ?>
        </div>
    </div>


</div>