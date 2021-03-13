<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Step 5</h2>
            <ol>
                <li><a href="?page=user/home" class="text-white">Home</a></li>
                <li>Step 5</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<article class="entry" data-aos="fade-up">
    <h5>Step 5. Confirming the Submission</h5>
    <a href="?page=user/sub1">1.Start</a> <a href="?page=user/sub2">2.Upload Submission</a> <a href="?page=user/sub3">3.Enter Metadata</a> <a href="?page=user/sub4">4.Upload Suplementary Files</a> <b>5.Confirmation</b>
    <br>
    <br>

    To submit your manuscript to International Journal of Multicultural and Multireligious Understanding click Finish Submission. The submission's principal contact will receive an acknowledgement by email and will be able to view the submission's progress through the editorial process by logging in to the journal web site. Thank you for your interest in publishing with International Journal of Multicultural and Multireligious Understanding.
    <br>
    <br>
    <form action="" enctype="multipart/form-data" method="POST">
        <?php if (empty($_SESSION['datafile'])) { ?>
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>ORIGINAL FILE NAME</th>
                        <th>TYPE</th>
                        <th>FILE SIZE</th>
                        <th>DATE UPLOADED</th>
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
        <?php } else { ?>

            <?php
            $iduser = $_SESSION['user']['register_id'];
            $show = $koneksi->query("SELECT * FROM tbl_file_sup WHERE register_id = '$iduser' AND tbl_file_sup.type = 'supplementary'");
            ?>
            <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>ORIGINAL FILE NAME</th>
                        <th>TYPE</th>
                        <th>FILE SIZE</th>
                        <th>DATE UPLOADED</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span id="kirim"></span></td>
                        <td><?php echo $_SESSION['datafile']['original'] ?></td>
                        <td>Submission</td>
                        <td><?php echo $_SESSION['datafile']['size'] . " b" ?></td>
                        <td><?php echo $_SESSION['datafile']['date'] ?></td>
                    </tr>
                    <?php
                    $id_sub = null;
                    while ($pecah = $show->fetch_assoc()) {
                        $id_sub += count($pecah['id_file_sup']);
                    ?>
                        <tr>
                            <td><?php echo $pecah['id_file_sup'] ?></td>
                            <td><?php echo $pecah['original_name'] ?></td>
                            <td><?php echo $pecah['type'] ?></td>
                            <td><?php echo $pecah['file_size'] ?></td>
                            <td><?php echo $pecah['date'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php
                    $kirim = $id_sub + 1;
                    ?>
                    <script>
                        document.getElementById("kirim").textContent = "<?= $kirim ?>"
                    </script>
                </tbody>
            </table>
        <?php } ?>
        <button type="submit" name="save" value="save" id="btn" class="btn text-white" style="background-color:  #ff5821;"> Finish Submission</button>
        <a href="?page=user/sub4" class="btn text-white" style="background-color:  #ff5821;">Cancel</a>
    </form>
    <!-- 
    <script>
        const btn = document.getElementById('btn');
        btn.addEventListener('click', function() {
            Swal.fire({
                title: 'Are you sure want to Finish Submission?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '?page=user/summary'
                }
            })
        });
    </script> -->



    <?php if (isset($_POST['save'])) {
        // var_dump($_SESSION['datafile']['email'][0]);
        // exit;
        //proses insert ke tabel tbl_file_sup dengan type submiison
        // karena submission cuma boleh 1 kali
        $namafilesubmision = $_SESSION['datafile']['original'];
        $filesizesubmision = $_SESSION['datafile']['size'];
        $datesubmision     = $_SESSION['datafile']['date'];
        $register_id = $_SESSION['user']['register_id'];
        // input submis
        $koneksi->query("INSERT INTO tbl_file_sup (register_id,original_name,file_size,date,type) VALUES ('$register_id','$namafilesubmision','$filesizesubmision b','$datesubmision','submission')");
        $last_id = $koneksi->insert_id;
        $_SESSION['id_file_sup'] = $last_id;


        // prose insert table submission

        $comment = $_SESSION['comment'];
        $register_id = $_SESSION['user']['register_id'];
        $title = $_SESSION['datafile']['title'];
        $abstract = $_SESSION['datafile']['abstract'];
        $academic_discipline = $_SESSION['datafile']['academic_discipline'];
        $keyword = $_SESSION['datafile']['keyword'];
        $agencies = $_SESSION['datafile']['agencies'];
        $references = $_SESSION['datafile']['reference'];
        $id_file_sup = $_SESSION['id_file_sup'];

        $save = $koneksi->query("INSERT INTO tbl_submission (comment,register_id,title,abstract,academic_discipline,keyword,agencies,reference, file_sup, status) VALUES ('$comment','$register_id','$title','$abstract','$academic_discipline','$keyword','$agencies','$references', '$id_file_sup', 'Awaiting Assignment')");

        $first_name = $_SESSION['datafile']['first_name'];
        $middle_name = $_SESSION['datafile']['middle_name'];
        $last_name = $_SESSION['datafile']['last_name'];
        $email = $_SESSION['datafile']['email'];
        $orcidid = $_SESSION['datafile']['orcidid'];
        $register_url = $_SESSION['datafile']['register_url'];
        $affiliation = $_SESSION['datafile']['affiliation'];
        $country = $_SESSION['datafile']['country'];
        $bio_statement = $_SESSION['datafile']['bio_statement'];
        $google_analytics = $_SESSION['datafile']['google_analytics'];
        $id_sub = $koneksi->insert_id;


        foreach ($first_name as $no => $a) {

            // var_dump($middle_name[$no]);

            $koneksi->query("INSERT INTO tbl_author (first_name,middle_name,last_name,email,orcidid,url,affiliation,country,bio_statement,google,sub_id) VALUES ('$first_name[$no]','$middle_name[$no]','$last_name[$no]','$email[$no]','$orcidid[$no]','$register_url[$no]','$affiliation[$no]','$country[$no]','$bio_statement[$no]','$google_analytics[$no]','$id_sub')");
        }

        require 'vendor/PHPMailer/PHPMailerAutoload.php';

        // KONFIGURASI EMAIL PENGIRIM
        $email_pengirim = "noreply@inatime2020.id";
        $mailPengirim = new PHPMailer();
        $mailPengirim->IsHTML(true);    // set email format to HTML
        $mailPengirim->IsSMTP();   // we are going to use SMTP
        $mailPengirim->SMTPAuth   = true; // enabled SMTP authentication
        $mailPengirim->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mailPengirim->Host       = "mail.inatime2020.id";      // setting GMail as our SMTP server
        $mailPengirim->Port       = 465;                   // SMTP port to connect to GMail
        $mailPengirim->Username   = $email_pengirim;  // alamat email kamu
        $mailPengirim->Password   = "qwertyijcmd";            // password GMail
        // AKHIR DARI KONFIGURASI EMAIL PENGIRIM

        $email_pengirim = "Editor.ijcmd@gmail.com";
        $isi = "The following message is being delivered on behalf of International Journal
        of Multi Dicipline (IJCMD) <br> <br> the best choice become goodness " . $_SESSION['name1'] . "<br>---------------------------------------------------------------------------------<br> Thank you for submitting the manuscript,<b><i>" . $_SESSION['datafile']['title'] . "</i></b> to International Journal of Multi Dicipline. <br> With the online journal management system that we are using, you will be
        able to track its progress through the editorial process by logging in to
        the journal web site: <br> Manuscript URL: http://ijcmd.com/?page=user/activ <br> If you have any questions, please contact me. Thank you for considering this
        journal as a venue for your work. <br> IJCMD Administrator
        International Journal of Multi Dicipline";
        $subjek = 'Subject';
        $email_tujuan = ($_SESSION['datafile']['regis']);
        // ISI EMAIL YANG AKAN DIKIRIM
        $mailPengirim->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
        $mailPengirim->Subject    = $subjek;
        $mailPengirim->Body       = $isi;
        $mailPengirim->AddAddress($email_tujuan);

        if (!$mailPengirim->Send()) {
            echo "<script>
    alert('Error');
    window.location='index.php';
    </script>";
        } else {
            try {
                $mailPengirim->clearAddresses();
                $isi = "The following message is being delivered on behalf of International Journal
                of Multi Dicipline (IJCMD) <br> <br> the best choice become goodness " . $_SESSION['name1'] . "<br>---------------------------------------------------------------------------------<br> Thank you for submitting the manuscript,<b><i>" . $_SESSION['datafile']['title'] . "</i></b> to International Journal of Multi Dicipline. <br> With the online journal management system that we are using, you will be
                able to track its progress through the editorial process by logging in to
                the journal web site: <br> Manuscript URL: http://ijcmd.com/?page=user/activ <br> If you have any questions, please contact me. Thank you for considering this
                journal as a venue for your work. <br> IJCMD Administrator
                International Journal of Multi Dicipline";
                $subjek = 'Subject';
                $email_tujuan = "lhoqjaotkwnfah@inilogic.com";
                // $email_tujuan = "Editor.ijcmd@gmail.com";

                // ISI EMAIL YANG AKAN DIKIRIM
                $mailPengirim->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
                $mailPengirim->Subject    = $subjek;
                $mailPengirim->Body       = $isi;
                $mailPengirim->AddAddress($email_tujuan);
                $mailPengirim->Send();
            } catch (phpmailerException $e) {
                echo $e->errorMessage();
            }


            echo "<script>
    alert('Check Your Email');
    window.location='?page=user/active';
    </script>";
        }

        unset($_SESSION['datafile']);


        // echo "INSERT INTO tbl_author (first_name,middle_name,last_name,email,orcidid,url,affiliaion,country,bio_statement,google_analytics,sub_id) VALUES ('$first_name[$no]','$middle_name[$no]','$last_name[$no]','$email[$no]','$orcidid[$no]','$register_url[$no]','$affiliation[$no]','$country[$no]','$bio_statement[$no]','$google_analytics[$no]','$id_sub')";
        // exit;


    }
    ?>
</article>

<!-- <script>
    const btn = document.getElementById('btn');
    btn.addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure want to publish the submission?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Publish it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Submission complete.!',
                    'Thank you for your interest in publishing with IJMMU.',
                    'success'
                )
            }
        })
    });
</script> -->