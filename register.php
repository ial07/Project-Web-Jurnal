<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Register</h2>
            <ol>
                <li><a href="?page=home" class="text-white">Home</a></li>
                <li>Register</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<article class="entry" data-aos="fade-up">
    <div class="entry-content">
        <form method="POST">
            <div class="text-center">
                <h5><i>Profile</i></h5>
            </div>
            <br>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" required class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" required class="form-control" name="register_password">
            </div>
            <div class="form-group">
                <label for="">Repeat Password</label>
                <input type="text" required class="form-control" name="register_password_konfirmasi">
            </div>
            <div class="form-group">
                <img src="captcha.php" alt="gambar captcha">
                <br>
                <label for="">Validation</label>
                <input type="text" required class="form-control" name="register_validation">
            </div>
            <div class="form-group">
                <label for="">Salutation</label>
                <input type="text" required class="form-control" name="salutation">
            </div>
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" required class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label for="">Middle Name</label>
                <input type="text" class="form-control" name="middle_name">
            </div>
            <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label for="">Initials</label>
                <input type="text" required class="form-control" name="initials">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Gender</label>
                    <br>
                    <input type="radio" name="gender" id="ml" value="Male" checked> Male </input>
                    <input type="radio" name="gender" id="fm" value="Female"> Female</input>
                </div>
            </div>
    </div>
    <div class="form-group">
        <label for="">Affiliation (Your institution, e.g. "Simon Fraser University")</label>
        <br>
        <textarea name="affiliation" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Signature</label>
        <br>
        <textarea name="register_signature" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" required class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="">Confirm Email</label>
        <input type="email" class="form-control" name="">
    </div>
    <div class="form-group">
        <label for="">ORCID ID</label>
        <input type="text" class="form-control" name="orcidid">
    </div>
    <h6 class="font-italic">ORCID iDs can only be assigned by <a href="https://orcid.org/" target="blank">the ORCID Registry</a>. You must conform to their standards for expressing ORCID iDs, and include the full URI (eg. http://orcid.org/0000-0002-1825-0097).</h6>
    <div class="form-group">
        <label for="">URL</label>
        <input type="url" class="form-control" name="register_url">
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="text" required class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="">Fax</label>
        <input type="text" class="form-control" name="fax">
    </div>
    <div class="form-group">
        <label for="">Mailing Address</label>
        <br>
        <textarea name="mailing_address" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Country</label>
        <input type="text" required class="form-control" name="country">
    </div>
    <div class="form-group">
        <label for="">Bio Statement
            (E.g., department and rank)</label>
        <br>
        <textarea name="bio_statement" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <label for="">Confirmation</label>
    <br>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" required for="exampleCheck1">Send me a confirmation email including my username and text</label>
    </div>
    <label for="">Register as</label>
    <br>
    <div class="form-group form-check">

        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" required for="exampleCheck1">Reader: Notified by email on publication of an issue of the journal.</label> <br>
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" required for="exampleCheck1">Author: Able to submit items to the journal.</label>
    </div>
    <button type="submit" name="register" class="btn btn-block text-white" style="background-color:  #ff5821;">Register</button>
    <br>
    <h6 class="font-italic">Privacy Statement <br>
        The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.</h6>
    </form>
    <?php
    if (isset($_POST['register'])) {
        $username       = $_POST['username'];
        $register_password   = md5($_POST['register_password']);
        $register_validation = $_POST['register_validation'];
        $salutation = $_POST['salutation'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $initials = $_POST['initials'];
        $gender = $_POST['gender'];
        $affiliation = $_POST['affiliation'];
        $register_signature = $_POST['register_signature'];
        $email = $_POST['email'];
        $orcidid = $_POST['orcidid'];
        $register_url = $_POST['register_url'];
        $phone = $_POST['phone'];
        $fax = $_POST['fax'];
        $mailing_address = $_POST['mailing_address'];
        $country = $_POST['country'];
        $bio_statement = $_POST['bio_statement'];
        if ($_SESSION["code"] == $_POST["register_validation"]) {
            if ($_POST['register_password'] == $_POST['register_password_konfirmasi']) {
                $simpan = $koneksi->query("INSERT INTO tbl_register(username,
                                                                                register_password,
                                                                                register_validation,
                                                                                salutation,
                                                                                first_name,
                                                                                middle_name,
                                                                                last_name,
                                                                                initials,
                                                                                gender,
                                                                                affiliation,
                                                                                register_signature,
                                                                                email,
                                                                                orcidid,
                                                                                register_url,
                                                                                phone,
                                                                                fax,
                                                                                mailing_address,
                                                                                country,
                                                                                bio_statement)
                                                                                VALUES  
                                                                                ('$username',
                                                                                '$register_password',
                                                                                '$register_validation',
                                                                                '$salutation',
                                                                                '$first_name',
                                                                                '$middle_name',
                                                                                '$last_name',
                                                                                '$initials',
                                                                                '$gender',
                                                                                '$affiliation',
                                                                                '$register_signature',
                                                                                '$email',
                                                                                '$orcidid',
                                                                                '$register_url',
                                                                                '$phone',
                                                                                '$fax',
                                                                                '$mailing_address',
                                                                                '$country',
                                                                                '$bio_statement')");

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
                $isi = 'You have registered on Ijcmd, Thank you for your interest in joining with International Journal of Multi Dicipline!';
                $subjek = 'Subject';
                $email_tujuan = $email;
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
                        $isi = $email . " This email has been registered with IJCMD";
                        $subjek = 'Subject';
                        // $email_tujuan = "lhoqjaotkwnfah@inilogic.com";
                        $email_tujuan = "Editor.ijcmd@gmail.com";

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
    window.location='index.php';
    </script>";
                }
            } else {
                echo "<script>
                        alert('Password dont match')
                        window.location='?page=register'
                    </script>";
            }
        } else {
            echo " <script>
            alert('Captcha dont match')
            window.location='?page=register'
            </script>";
        }


        if ($simpan == TRUE) {
            echo " <script>
                        alert('Data saved successfully')
                        window.location='?page=login'
                        </script>";
        } else {
            echo " <script>
                        alert('Data failed to save')
                        window.location='?page=register'
                        </script>";
        }
    }
    ?>

</article><!-- End blog entry -->