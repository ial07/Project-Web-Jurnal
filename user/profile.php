<article class="entry" data-aos="fade-up">
    <form method="POST">
        <?php

        $dataedit = $koneksi->query("SELECT * FROM tbl_register WHERE register_id = " . $_SESSION['user']['register_id'])->fetch_array();
        ?>
        <br>

        <div class="form-group">
            <label for="">Username</label>
            <input type="text" value="<?php echo $dataedit['username'] ?>" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" value="<?php echo $dataedit['register_password'] ?>" class="form-control" name="register_password">
        </div>
        <div class="form-group">
            <label for="">Salutation</label>
            <input type="text" value="<?php echo $dataedit['salutation'] ?>" class="form-control" name="salutation">
        </div>
        <div class="form-group">
            <label for="">First Name</label>
            <input type="text" value="<?php echo $dataedit['first_name'] ?>" class="form-control" name="first_name">
        </div>
        <div class="form-group">
            <label for="">Middle Name</label>
            <input type="text" value="<?php echo $dataedit['middle_name'] ?>" class="form-control" name="middle_name">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" value="<?php echo $dataedit['last_name'] ?>" class="form-control" name="last_name">
        </div>
        <div class="form-group">
            <label for="">Initials</label>
            <input type="text" value="<?php echo $dataedit['initials'] ?>" class="form-control" name="initials">
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Gender</label>
                <br>
                <?php $jekel = $dataedit['gender'] ?>
                <input type="radio" name="gender" id="ml" value="Male" <?php echo ($jekel == 'Male') ? 'checked' : ''  ?>> Male </input>
                <input type="radio" name="gender" id="fm" value="Female" <?php echo ($jekel == 'Female') ? 'checked' : ''  ?>> Female</input>
            </div>
        </div>

        <div class="form-group">
            <label for="">Affiliation (Your institution, e.g. "Simon Fraser University")</label>
            <br>
            <textarea name="affiliation" cols="30" rows="5" class="form-control"><?php echo $dataedit['affiliation'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Signature</label>
            <br>
            <textarea name="register_signature" cols="30" rows="5" class="form-control"><?php echo $dataedit['register_signature'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" value="<?php echo $dataedit['email'] ?>" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">ORCID ID</label>
            <input type="text" value="<?php echo $dataedit['orcidid'] ?>" class="form-control" name="orcidid">
        </div>
        <h6 class="font-italic">ORCID iDs can only be assigned by the ORCID Registry. You must conform to their standards for expressing ORCID iDs, and include the full URI (eg. http://orcid.org/0000-0002-1825-0097).</h6>
        <div class="form-group">
            <label for="">URL</label>
            <input type="url" value="<?php echo $dataedit['register_url'] ?>" class="form-control" name="register_url">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" value="<?php echo $dataedit['phone'] ?>" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="">Fax</label>
            <input type="text" value="<?php echo $dataedit['fax'] ?>" class="form-control" name="fax">
        </div>
        <div class="form-group">
            <label for="">Mailing Address</label>
            <br>
            <textarea name="mailing_address" cols="30" rows="5" class="form-control"><?php echo $dataedit['mailing_address'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Country</label>
            <input type="text" value="<?php echo $dataedit['country'] ?>" class="form-control" name="country">
        </div>
        <div class="form-group">
            <label for="">Bio Statement
                (E.g., department and rank)</label>
            <br>
            <textarea name="bio_statement" cols="30" rows="5" class="form-control"><?php echo $dataedit['bio_statement'] ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-block text-white" style="background-color:  #ff5821;">Update Profile</button>
    </form>

    <?php

    if (isset($_POST['update'])) {
        $id = $_SESSION['user']['register_id'];
        $username = $_POST['username'];
        $register_password = md5($_POST['register_password']);
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


        $update = $koneksi->query("UPDATE tbl_register SET username = '$username', 
                                                                        register_password = '$register_password',
                                                                        salutation = '$salutation',
                                                                        first_name = '$first_name',
                                                                        middle_name = '$middle_name',
                                                                        last_name = '$last_name',
                                                                        initials = '$initials',
                                                                        gender = '$gender',
                                                                        affiliation = '$affiliation',
                                                                        register_signature = '$register_signature', 
                                                                        email = '$email',
                                                                        orcidid = '$orcidid',
                                                                        register_url = '$register_url',
                                                                        phone = '$phone',
                                                                        fax = '$fax',
                                                                        mailing_address = '$mailing_address',
                                                                        country = '$country',
                                                                        bio_statement = '$bio_statement' 
                                                                        WHERE register_id = '$id'");

        if ($update == TRUE) {

            echo " <script>
                        alert('Data was successfully updated')
                        window.location='?page=user/home'
                        </script>";
        } else {
            echo " <script>
                        alert('Data failed to update')
                        window.location='?page=user/home'
                        </script>";
        }
    }
    ?>
</article>