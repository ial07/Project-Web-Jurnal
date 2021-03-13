
                <article class="entry" data-aos="fade-up">
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tbl_home");
                    while ($pecah = $ambil->fetch_assoc()) {
                    ?>
                        <div>
                            <h3><?= $pecah['home_judul'] ?></h3>
                        </div>
                        <?= $pecah['home_isi'] ?>
                    <?php } ?>
                </article><!-- End blog entry -->
    
