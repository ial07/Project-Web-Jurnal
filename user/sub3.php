<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Step 3</h2>
            <ol>
                <li><a href="?page=user/home" class="text-white">Home</a></li>
                <li>Step 3</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<article class="entry" data-aos="fade-up">
    <?php
    $show = $koneksi->query("SELECT * FROM tbl_register")->fetch_assoc();
    ?>
    <h5>Step 3. Entering the Submission's Metadata</h5>
    <a href="?page=user/sub1">1.Start</a> <a href="?page=user/sub2">2.Upload Submission</a> <b>3.Enter Metadata</b> 4.Upload Suplementary Files 5.Confirmation
    <br>
    <br>
    <form action="" method="POST">
        <!-- ======= Blog Section ======= -->
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Authors
                </div>
            </div>
            <div class="card-body">
                <div class="entry-content">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div id="formAuthor">
                             <?php
                            $_SESSION['name1'] = $show['first_name'] . ' ' . $show['middle_name'] . ' ' . $show['last_name'];
                            ?>

                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" value="<?php echo $show['first_name'] ?>" class="form-control" name="first_name[]">
                            </div>
                            <div class="form-group">
                                <label for="">Middle Name</label>
                                <input type="text" value="<?php echo $show['middle_name'] ?>" class="form-control" name="middle_name[]">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" value="<?php echo $show['last_name'] ?>" class="form-control" name="last_name[]">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" value="<?php echo $show['email'] ?>" class="form-control" name="email[]">
                            </div>
                            <div class="form-group">
                                <label for="">ORCID ID</label>
                                <input type="text" value="<?php echo $show['orcidid'] ?>" class="form-control" name="orcidid[]">
                            </div>
                            <h6 class="font-italic">ORCID iDs can only be assigned by the ORCID Registry. You must conform to their standards for expressing ORCID iDs, and include the full URI (eg. http://orcid.org/0000-0002-1825-0097).</h6>
                            <div class="form-group">
                                <label for="">URL</label>
                                <input type="url" value="<?php echo $show['register_url'] ?>" class="form-control" name="sub_url[]">
                            </div>

                            <div class="form-group">
                                <label for="">Affiliation (Your institution, e.g. "Simon Fraser University")</label>
                                <br>
                                <textarea name="affiliation[]" cols="30" rows="5" class="form-control"><?php echo $show['affiliation'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" value="<?php echo $show['country'] ?>" class="form-control" name="country[]">
                            </div>

                            <div class="form-group">
                                <label for="">Bio Statement
                                    (E.g., department and rank)</label>
                                <br>
                                <textarea name="bio_statement[]" cols="30" rows="5" class="form-control"><?php echo $show['bio_statement'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Google Analytics account number </label>
                                <input type="text" class="form-control" name="google_analytics[]">

                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" id="addRow">Add</button>


                        <script>
                            function hapusBaris(id) {
                                document.getElementById("id_baris_" + id).innerHTML = "";
                            }

                            var _banyakBaris = 1;

                            document.getElementById('addRow').addEventListener('click', function(e) {
                                _banyakBaris++;
                                e.preventDefault()
                                var html_row = "<div id='id_baris_" + _banyakBaris + "'>" +
                                    "<div class='card-header'>" +
                                    "<div class='text-center'>Authors " + _banyakBaris +
                                    "</div>" +
                                    "</div>" +
                                    "<div class='card-body'>" +
                                    "<div class='form-group'>" +
                                    "<label >First Name" +
                                    "</label>" +
                                    "<br>" +
                                    "<input type='text' class='form-control' name='first_name[]'>" +
                                    "</div>" +
                                    "<br>" +
                                    "<div class='form-group'>" +
                                    "<label >Middle Name" +
                                    "</label>" +
                                    "<br>" +
                                    "<input type='text' class='form-control' name='middle_name[]'>" +
                                    "</div>" +
                                    "<br>" +
                                    "<div class='form-group'>" +
                                    "<label>Last Name" +
                                    "</label>" +
                                    "<br>" +
                                    "<input type='text' class='form-control' name='last_name[]'>" +
                                    "</div>" +
                                    "<br>" +
                                    "<div class='form-group'>" +
                                    "<label>Email" +
                                    "</label>" +
                                    "<br>" +
                                    "<input type='email' class='form-control' name='email[]'>" +
                                    "</div>" +
                                    "<br>" +
                                    "<div class='form-group'>" +
                                    "<label>ORCID ID" +
                                    "</label>" +
                                    "<br>" +
                                    "<input type='text' class='form-control' name='orcidid[]'>" +
                                    "</div>" +
                                    "<br>" +
                                    "<h6 class='font-italic'>ORCID iDs can only be assigned by the ORCID Registry. You must conform to their standards for expressing ORCID iDs, and include the full URI (eg. http://orcid.org/0000-0002-1825-0097)." +
                                    "</h6>" +
                                    "<br>" +
                                    "<div class='form-group'>" +
                                    "<label>URL" +
                                    "</label>" +
                                    "<br>" +
                                    "<input type='url' class='form-control' name='sub_url[]'>" +
                                    "</div>" +
                                    "<div class='form-group'>" +
                                    "<label>Affiliation (Your institution, e.g. 'Simon Fraser University')" +
                                    "</label>" +
                                    "<br>" +
                                    "<textarea name='affiliation[]' cols='30' rows='5' class='form-control'>" +
                                    "</textarea>" +
                                    "</div>" +
                                    "<div class='form-group'>" +
                                    "<label>Country" +
                                    "</label>" +
                                    "<input type='text'  class='form-control' name='country[]'>" +
                                    "</div>" +
                                    "<br>" +
                                    "<div class='form-group'>" +
                                    "<label>Bio Statement(E.g., department and rank)" +
                                    "</label>" +
                                    "<br>" +
                                    "<textarea name='bio_statement[]' cols='30' rows='5' class='form-control'>" +
                                    "</textarea>" +
                                    "</div>" +
                                    "<div class='form-group'>" +
                                    "<label>Google Analytics account number" +
                                    "</label>" +
                                    "<input type='text' class='form-control' name='google_analytics[]'>" +
                                    "</div>" +
                                    "<div class='form-group'>" +
                                    "<button class='btn btn-danger' onclick='hapusBaris(" + _banyakBaris + ")'>Hapus" +
                                    "</button>" +
                                    "</div>" +
                                    "</div>" +
                                    "</div>";
                                $('#formAuthor').append(html_row);
                            });
                        </script>
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Title and Abstract
                </div>
            </div>
            <div class="card-body">
                <div class="entry-content">

                    <div class="form-group">
                        <label for="">Title *</label>
                        <input type="text" required class="form-control" name="title">
                    </div>
                    
                    <div class="form-group">
                            <label for="">Abstract *</label>
                            <textarea name="abstract" id="abstract" cols="30" rows="5" class="form-control" required></textarea>
                        </div>
                        <script>
                            CKEDITOR.replace('abstract');
                        </script>
                    
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Indexing
                </div>
            </div>
            <div class="card-body">
                Provide terms for indexing the submission; separate terms with a semi-colon (term1; term2; term3).
                <div class="entry-content">
                    <div class="form-group">
                        <label for="">
                            Academic discipline and sub-disciplines</label>
                        <input type="text" class="form-control" name="academic_discipline">
                    </div>
                    Social Sciences; Cultural and Ethnic Studies; Religious Studies;
                    <div class="form-group">
                        <label for="">
                            Keywords
                        </label>
                        <br>
                        <input type="text" class="form-control" name="keyword">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Contributors and Supporting Agencies
                </div>
            </div>
            <div class="card-body">
                Identify agencies (a person, an organization, or a service) that made contributions to the content or provided funding or support for the work presented in this submission. Separate them with a semi-colon (e.g. John Doe, Metro University; Master University, Department of Computer Science).
                <div class="entry-content">
                    <div class="form-group">
                        <label for="">Agencies</label>
                        <input type="text" class="form-control" name="agencies">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    References
                </div>
            </div>
            <div class="card-body">
                Provide a formatted list of references for works cited in this submission. Please separate individual references with a blank line.
                <div class="entry-content">
                    <div class="form-group">
                            <label for="">References </label>
                            <textarea name="reference" id="reference" cols="30" rows="5" class="form-control" required></textarea>
                        </div>
                        <script>
                            CKEDITOR.replace('reference');
                        </script>
                </div>
            </div>
        </div>
        <br>
        <button type="submit" name="savesub3" class="btn btn-block text-white" style="background-color:  #ff5821;">Save and Continue</button>
    </form>
    <?php

    if (isset($_POST['savesub3'])) {
        $_SESSION['datafile']['regis'] = $show['email'];
        // var_dump($_SESSION['datafile']);
        // exit;
        $_SESSION['datafile']['first_name'] = $_POST['first_name'];
        $_SESSION['datafile']['middle_name'] = $_POST['middle_name'];
        $_SESSION['datafile']['last_name'] = $_POST['last_name'];
        $_SESSION['datafile']['email'] = $_POST['email'];
        $_SESSION['datafile']['orcidid'] = $_POST['orcidid'];
        $_SESSION['datafile']['register_url'] = $_POST['sub_url'];
        $_SESSION['datafile']['affiliation'] = $_POST['affiliation'];
        $_SESSION['datafile']['country'] = $_POST['country'];
        $_SESSION['datafile']['bio_statement'] = $_POST['bio_statement'];
        $_SESSION['datafile']['google_analytics'] = $_POST['google_analytics'];
        $_SESSION['datafile']['title'] = $_POST['title'];
        $_SESSION['datafile']['abstract'] = $_POST['abstract'];
        $_SESSION['datafile']['academic_discipline'] = $_POST['academic_discipline'];
        $_SESSION['datafile']['keyword'] = $_POST['keyword'];
        $_SESSION['datafile']['agencies'] = $_POST['agencies'];
        $_SESSION['datafile']['reference'] = $_POST['reference'];
        // echo "<pre>";
        // print_r($_SESSION['datafile']);
        // echo "</pre>";
        // exit;
        echo "<script>window.location='?page=user/sub4'</script>";
    }
    // if ($simpan == TRUE) {

    // echo "<script>
    //     alert('Data saved successfully')
    //     window.location = '?page=user/sub4'
    // </script>";
    // } else {
    // echo " <script>
    //     alert('Data failed to save')
    //     window.location = '?page=user/sub3'
    // </script>";
    // }
    // }
    ?>




</article>