<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Step 4</h2>
            <ol>
                <li><a href="?page=user/home" class="text-white">Home</a></li>
                <li>Step 4</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<article class="entry" data-aos="fade-up">
    <h5>Step 4. Uploading Supplementary Files</h5>
    <a href="?page=user/sub1">1.Start</a> <a href="?page=user/sub2">2.Upload Submission</a> <a href="?page=user/sub3">3.Enter Metadata</a> <b>4.Upload Suplementary Files</b> 5.Confirmation
    <br>
    <br>

    This optional step allows Supplementary Files to be added to a submission. The files, which can be in any format, might include (a) research instruments, (b) data sets, which comply with the terms of the study's research ethics review, (c) sources that otherwise would be unavailable to readers, (d) figures and tables that cannot be integrated into the text itself, or other materials that add to the contribution of the work.

    <br>
    <br>

    <form action="" enctype="multipart/form-data" method="POST">
        <?php if (empty($_SESSION['datafile1'])) { ?>
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>ORIGINAL FILE NAME</th>
                        <th>DATE UPLOADED</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        <?php } else {

            $iduser = $_SESSION['user']['register_id'];
            $show = $koneksi->query("SELECT * FROM tbl_file_sup a JOIN tbl_sup b ON a.id_file_sup=b.id_file_sup WHERE a.register_id = '$iduser' AND a.type = 'supplementary'");
        ?>

            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>ORIGINAL FILE NAME</th>
                        <th>DATE UPLOADED</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // echo $_SESSION['id_file_sub'];
                    while ($pecah = $show->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $pecah['id_file_sup'] ?></td>
                            <td><?php echo $pecah['title'] ?></td>
                            <td><?php echo $pecah['original_name'] ?></td>
                            <td><?php echo $pecah['date'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="?page=user/edit_sup&idedit=<?php echo $pecah['id_file_sup'] ?>">Update</a>
                                <a class="btn btn-danger" href="?page=user/delete_sup&idhapus=<?php echo $pecah['id_file_sup'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>


        <div class="card">
            <div class="card-header">Upload supplementary file</div>
            <div class="card-body">
                <input type="file" name="foto">
                <button type="submit" name="save_sup">Upload</button><br><br>
                <!-- <?php var_dump($_SESSION['datafile']) ?> -->
            </div>
        </div>
    </form>

    <?php if (empty($_SESSION['datafile1'])) { ?>
        <br>
        <button type="submit" name="save" value="save" id="btn" class="btn text-white" style="background-color:  #ff5821;"> Save and countinue</button>

        <script>
            const btn = document.getElementById('btn');
            btn.addEventListener('click', function() {
                Swal.fire({
                    title: 'Are you sure want to countinue?',
                    text: "without uploading a Supplementary file!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = '?page=user/sub5'
                    }
                })
            });
        </script>

    <?php } else { ?>
        <br>
        <a href="?page=user/sub5" class="btn text-white" style="background-color:  #ff5821;">Save and Continue</a>
    <?php } ?>

    <?php if (isset($_POST['save_sup'])) {

        $foto = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "./assets/img/file_supplementary/" . $foto);


        $datafile1 = $_FILES;

        $original1 =  $datafile1['foto']['name'];
        $size1 = $datafile1['foto']['size'];
        $filename1 = time() . "_" . $original1;
        $date1 = date("Y-m-d");
        $register_id = $_SESSION['user']['register_id'];

        $arrayfile = array(
            'filename1' => $filename1,
            'orginal1'  =>  $original1,
            'size1'     => $size1,
            'date1'     =>  $date1,
        );

        $_SESSION['datafile1'] = $arrayfile;




        // $koneksi->query("INSERT INTO tbl_file_sup (register_id,original_name,file_size,date,type) VALUES ('$register_id','$namafilesubmision','$filesizesubmision b','$datesubmision','submission')");

        // echo "INSERT INTO tbl_file_sup (register_id,original_name,date,type) VALUES ('$register_id','$namafilesubmision','$filesizesubmision b','$datesubmision','submission')";

        // input suplemen
        $save_sup = $koneksi->query("INSERT INTO tbl_file_sup (register_id,original_name,file_size,date,type) VALUES ('$register_id','$original1','$size1 b','$date1', 'supplementary')");
        $last_id = $koneksi->insert_id;
        $_SESSION['id_file_sup_supplementary'] = $last_id;

        echo "<script>
                window.location='?page=user/sup'
            </script>";
    }
    ?>

    <a href="?page=user/sub3" class="btn text-white" style="background-color:  #ff5821;">Cancel</a>

</article>