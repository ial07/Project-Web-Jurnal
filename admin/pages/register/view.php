<div class="content-wrapper">
    <div class="card">
        <div class="card-header text-center">
            <h3>Data Register</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="example1">
                <thead class="bg-dark">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Validation</th>
                        <th>Salutation</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Initials</th>
                        <th>Gender</th>
                        <th>Affiliation</th>
                        <th>Signature</th>
                        <th>Email</th>
                        <th>ORCID ID</th>
                        <th>URL</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th>Mailing Address</th>
                        <th>Country</th>
                        <th>Bio Statement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tbl_register");
                    $no = 1;
                    while ($pecah = $ambil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pecah['username'] ?></td>
                            <td><?= $pecah['register_password'] ?></td>
                            <td><?= $pecah['register_validation'] ?></td>
                            <td><?= $pecah['salutation'] ?></td>
                            <td><?= $pecah['first_name'] ?></td>
                            <td><?= $pecah['middle_name'] ?></td>
                            <td><?= $pecah['last_name'] ?></td>
                            <td><?= $pecah['initials'] ?></td>
                            <td><?= $pecah['gender'] ?></td>
                            <td><?= $pecah['affiliation'] ?></td>
                            <td><?= $pecah['register_signature'] ?></td>
                            <td><?= $pecah['email'] ?></td>
                            <td><?= $pecah['orcidid'] ?></td>
                            <td><?= $pecah['register_url'] ?></td>
                            <td><?= $pecah['phone'] ?></td>
                            <td><?= $pecah['fax'] ?></td>
                            <td><?= $pecah['mailing_address'] ?></td>
                            <td><?= $pecah['country'] ?></td>
                            <td><?= $pecah['bio_statement'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>