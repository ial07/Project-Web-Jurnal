<article class="entry" data-aos="fade-up">
    <section id="faq blog" class="faq blog">
        <?php
        $id = $_GET['idsub'];
        $ambil = $koneksi->query("SELECT * FROM tbl_author JOIN tbl_submission ON tbl_submission.sub_id = tbl_author.sub_id where tbl_submission.sub_id = '$id'")->fetch_assoc();
        ?>
        <br>
        <div>
            <div>
                <div class="text-left">
                    <h4><?= $ambil['title'] ?></h4>
                </div>
                <div class="text-left border-bottom">
                    <?php
                    $ambil1 = $koneksi->query("SELECT * FROM tbl_author JOIN tbl_submission ON tbl_submission.sub_id = tbl_author.sub_id where tbl_submission.sub_id = '$id'");

                    while ($pecah1 = $ambil1->fetch_assoc()) { ?>
                        <?= $pecah1['first_name'] ?> <?= $pecah1['last_name'] . "; " ?>
                    <?php } ?>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <h5>Abstract</h5>
                <?= $ambil['abstract'] ?>
            </div>
            <br>
            <div class="mb-3">
                <h5>Keyword</h5>
                <?= $ambil['keyword'] ?>
            </div>
            <br>
            <div class="">
                <?php
                $ambil3 = $koneksi->query("SELECT * FROM tbl_file_sup WHERE id_file_sup = '$ambil[file_sup]'")->fetch_assoc();

                ?>
                <h5>Full Text</h5>
                <a href="./admin/images/fotoarchive/<?= $ambil3['original_name'] ?>" download>PDF</a>
            </div>
            <br>
            <div class="mt-3">
                <h5>References</h5>
                <?= $ambil['reference'] ?>
            </div>

        </div>

    </section>
</article>