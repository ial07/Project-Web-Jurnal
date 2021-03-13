    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs text-white" style="background-color:  #ff5821;">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Announcement & Information</h2>
                <ol>
                    <li><a href="?page=home" class="text-white">Home</a></li>
                    <li>Announcement & Information</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= F.A.Q Section ======= -->
    <article class="entry" data-aos="fade-up">
        <section id="faq blog" class="faq blog">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tbl_announcement");
            while ($pecah = $ambil->fetch_assoc()) {
            ?>
                <div class="section-title">
                    <h2 data-aos="fade-up">Announcement</h2>
                    <p data-aos="fade-up">
                        <h5 class="text-left"><?= $pecah['announcement_judul'] ?></h5>
                        <div class="text-left">
                            <?= $pecah['announcement_isi'] ?>
                        </div>
                    </p>
                </div>
            <?php } ?>
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Information For Readers <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                            <p>
                                We encourage readers to sign up for the publishing notification service for this journal. Use the Register link at the top of the home page for the journal. This registration will result in the reader receiving the Table of Contents by email for each new issue of the journal. This list also allows the journal to claim a certain level of support or readership. See the journal's Privacy Statement, which assures readers that their name and email address will not be used for other purposes.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Information For Authors <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                Interested in submitting to this journal? We recommend that you review the About the Journal page for the journal's section policies, as well as the Author Guidelines. Authors need to register with the journal prior to submitting or, if already registered, can simply log in and begin the five-step process.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Information For Librarians <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                                We encourage research librarians to list this journal among their library's electronic journal holdings. As well, it may be worth noting that this journal's open source publishing system is suitable for libraries to host for their faculty members to use with journals they are involved in editing (see Open Journal Systems).
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </section><!-- End F.A.Q Section -->
    </article><!-- End blog entry -->