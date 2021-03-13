
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Step 2</h2>
                <ol>
                    <li><a href="?page=user/home" class="text-white">Home</a></li>
                    <li>Step 2</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <article class="entry" data-aos="fade-up">
        <h5>Step 2. Uploading the Submission</h5>
        <a href="?page=user/sub1">1.Start</a> <b>2.Upload Submission</b> 3.Enter Metadata 4.Upload Suplementary Files 5.Confirmation
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                <h6 class="ml-3">To upload a manuscript to this journal, complete the following steps.</h6>
                <ol>
                    <li>On this page, click Browse (or Choose File) which opens a Choose File window for locating the file on the hard drive of your computer.</li>
                    <li>Locate the file you wish to submit and highlight it.</li>
                    <li>Click Open on the Choose File window, which places the name of the file on this page.</li>
                    <li>Click Upload on this page, which uploads the file from the computer to the journal's web site and renames it following the journal's conventions.</li>
                    <li>Once the submission is uploaded, click Save and Continue at the bottom of this page.</li>
                </ol>
                <h6 class="ml-3">Encountering difficulties? Contact <a href=""> IJCOM Technical Support</a> for assistance.</h6>
            </div>
        </div>
        <br>

        <form enctype="multipart/form-data" method="POST">
            <div class="card">
                <div class="card-header">Submission File</div>
                <?php if (empty($_SESSION['datafile'])) { ?>
                    <div class="card-body border-bottom"> No submission file uploaded.</div>

                <?php } else { ?>
                    <table border="1">
                        <tr>
                            <th>File Name</th>
                            <td><?php echo  $_SESSION['datafile']['filename']; ?></td>
                        </tr>
                        <tr>
                            <th>Original Name File</th>
                            <td><?php echo  $_SESSION['datafile']['original']; ?></td>
                        </tr>
                        <tr>
                            <th>File Size</th>
                            <td><?php echo  $_SESSION['datafile']['size']; ?></td>
                        </tr>
                        <tr>
                            <th>Date Uploaded</th>
                            <td><?php echo  $_SESSION['datafile']['date']; ?></td>
                        </tr>
                    </table>
                <?php } ?>


                <div class="card-body">
                    Upload Submission
                    <br>
                    <input type="file" name="foto">
                    <button type="submit" name="save_file">Upload</button>
                </div>
            </div>
        </form>
        <?php if (empty($_SESSION['datafile'])) { ?>
            <br>
            <button type="submit" name="save" value="save" id="btn" class="btn text-white" style="background-color:  #ff5821;"> Save and countinue</button>

            <script>
                const btn = document.getElementById('btn');
                btn.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Are you sure want to countinue?',
                        text: "without uploading a Submission file!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = '?page=user/sub3'
                        }
                    })
                });
            </script>

        <?php } else { ?>
            <br>
            <a href="?page=user/sub3" class="btn text-white" style="background-color:  #ff5821;">Save and Continue</a>
        <?php } ?>
        <?php if (isset($_POST['save_file'])) {


            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];
            move_uploaded_file($lokasi, "./assets/img/file_submission/" . $foto);
            $datafile = $_FILES;
            $original =  $datafile['foto']['name'];
            $size = $datafile['foto']['size'];
            $filename = time() . "_" . $original;
            $date = date("Y-m-d");

            $arrayfile = array(
                'filename' => $filename,
                'original'  =>  $original,
                'size'     => $size,
                'date'     =>  $date,
            );

            $_SESSION['datafile'] = $arrayfile;

            echo "<script>
                alert('Uploaded successfully');
                window.location='?page=user/sub2'
            </script>";


            // if (empty($_SESSION['id_file_sub'])) {
            //     move_uploaded_file($lokasi, "./assets/img/file_submission/" . $foto);

            //     $simpan = $koneksi->query("INSERT INTO tbl_file_sub (file_name, status) VALUES ('$foto', '0')");

            //     $id_file_sub = $koneksi->insert_id;

            //     $_SESSION['id_file_sub'] = $id_file_sub;
            // } else {
            //     $cari_gambar = $koneksi->query("SELECT * FROM tbl_file_sub WHERE id_file_sub = '$_SESSION[id_file_sub]' ")->fetch_array();
            //     unlink('./assets/img/file_submission/' . $cari_gambar['file_name']);
            //     move_uploaded_file($lokasi, "./assets/img/file_submission/" . $foto);
            //     $simpan = $koneksi->query("UPDATE tbl_file_sub SET file_name = '$foto' WHERE id_file_sub = '$_SESSION[id_file_sub]' ");
            // }
        }
        ?>
    </article>