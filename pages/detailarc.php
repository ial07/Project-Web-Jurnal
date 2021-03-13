<article class="entry" data-aos="fade-up">
    <section id="faq blog" class="faq blog">
        <?php
        $id = $_GET['idart'];
        $ambil = $koneksi->query("SELECT * FROM tbl_archive where archive_id = '$id'")->fetch_assoc();
        ?>
        <p data-aos="fade-up">
            <div class="container">
                <div class="text-left">
                    <h5><?= $ambil['title'] ?></h5>
                </div>
                <div class="text-left border-bottom">
                    <?= $ambil['month'] ?>
                </div>
                International Journal Concept of Multi Discipline (IJCMD) <?= $ambil['des'] ?>
                <br><br>

                <div class="row">
                    <div class="col-sm-11">
                        <h5>Full Issue</h5>
                        View or download the full issue
                    </div>
                    <div class="col-sm-1">
                        <div class="text-left">
                            <br>
                            <a href="./admin/images/fotoarchive/<?= $ambil['pict'] ?>" download>Cover</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <h5>Table of Contents</h5><br>
                        <h5>Article</h5>
                        <?php
                        $pick = $koneksi->query("Select tbl_article.*,tbl_author.first_name,tbl_author.middle_name From tbl_article, tbl_author WHERE archive_id = '$id' GROUP BY tbl_article.sub_id");

                        while ($up = $pick->fetch_assoc()) {
                        ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <a href="?page=pages/detailsub&idsub=<?php echo $up['sub_id'] ?>">
                                            <h5><?= $up['title'] ?></h5>
                                        </a>
                                        <?php


                                        $pick2 = $koneksi->query("SELECT * FROM tbl_author JOIN tbl_article ON tbl_article.sub_id = tbl_author.sub_id where tbl_article.sub_id = '$up[sub_id]' AND tbl_article.archive_id = '$up[archive_id]'");

                                        while ($up2 = $pick2->fetch_assoc()) {
                                        ?>
                                            <?= $up2['first_name'] ?> <?= $up2['last_name'] . ";" ?>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="text-left">
                                            <a href="./admin/images/fotoarchive/<?= $up['file'] ?>" download>PDF</a><br>
                                            <?= $up['hal'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <?php } ?>
                    </div>
                </div>
        </p>
    </section>
</article>