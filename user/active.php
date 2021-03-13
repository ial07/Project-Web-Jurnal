<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Active Submission</h2>
            <ol>
                <li><a href="?page=user/home" class="text-white">Home</a></li>
                <li>Active Submission</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<?php
unset($_SESSION['datafile']);
unset($_SESSION['datafile1']);
$regis_id = $_SESSION['user']['register_id'];
$show = $koneksi->query("SELECT * FROM tbl_submission a JOIN tbl_file_sup b WHERE a.file_sup AND b.type = 'submission' AND a.register_id = '$regis_id' GROUP BY a.sub_id");
?>

<article class="entry" data-aos="fade-up">
    <div class="card">
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="card-body ">
                <table class="table-bordered" width="100%">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>SEC</th>
                            <th>Authors</th>
                            <th>Title</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($pecah = $show->fetch_assoc()) {
                        ?>
                            <tr class="text-center">
                                <td><?= $pecah['sub_id'] ?></td>
                                <td><?= $pecah['date'] ?></td>
                                <td>CMD</td>
                                <td>
                                    <?php


                                    $pick2 = $koneksi->query("SELECT * FROM tbl_author JOIN tbl_submission ON tbl_submission.sub_id = tbl_author.sub_id where tbl_submission.sub_id = '$pecah[sub_id]'");

                                    while ($up2 = $pick2->fetch_assoc()) {

                                    ?>
                                        <?= $up2['last_name'] ?>;
                                    <?php } ?>
                                </td>
                                <td><a href=""><?= $pecah['title'] ?></a></td>
                                <td><?= $pecah['status'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</article>