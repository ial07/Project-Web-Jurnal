<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Archives</h2>
            <ol>
                <li><a href="?page=home" class="text-white">Home</a></li>
                <li>Archives</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->





<article class="entry" data-aos="fade-up">
    <section id="faq blog" class="faq blog">
        <div class="section-title">
            <h4 data-aos="fade-up" class="border-bottom">Archives</h4>
        </div>

        <?php if (!empty($ambil)) { ?>
            <br>
            <h4 class="text-left border-top">2021</h4>
            <?php
            // $id = $_GET['archive_id'];
            $ambil = $koneksi->query("SELECT * FROM tbl_archive WHERE year = 2021");
            while ($pecah = $ambil->fetch_assoc()) {
            ?>
                <p data-aos="fade-up">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1">
                                <img width="50" height="50" src="./admin/images/fotoarchive/<?= $pecah['pict'] ?>">

                            </div>
                            <div class="col-sm-11">
                                <div class="text-left">
                                    <a href="?page=pages/detailarc&idart=<?php echo $pecah['archive_id'] ?>">
                                        <h5><?= $pecah['title'] ?></h5>
                                    </a>
                                </div>
                                <div class="text-left">
                                    <?= $pecah['des'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </p>

            <?php } ?>
        <?php } else { ?>
            <br>
            <h4 class="text-left border-top">2020</h4>
            <?php
            // $id = $_GET['archive_id'];
            $ambil = $koneksi->query("SELECT * FROM tbl_archive WHERE year = 2020");
            while ($pecah = $ambil->fetch_assoc()) {
            ?>
                <p data-aos="fade-up">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1">
                                <img width="50" height="50" src="./admin/images/fotoarchive/<?= $pecah['pict'] ?>">

                            </div>
                            <div class="col-sm-11">
                                <div class="text-left">
                                    <a href="?page=pages/detailarc&idart=<?php echo $pecah['archive_id'] ?>">
                                        <h5><?= $pecah['title'] ?></h5>
                                    </a>
                                </div>
                                <div class="text-left">
                                    <?= $pecah['des'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </p>

            <?php } ?>
        <?php }  ?>
    </section>
</article>