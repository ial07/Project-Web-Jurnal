    <div class="content-wrapper">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <article class="entry" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header bg-light">

                            <!-- ======= F.A.Q Section ======= -->
                            <marquee direction="" scrollamount="15">
                                <h2 class="text-center font-weight-bold font-italic">Welcome To Internasional Journal Concept Of Multi Discipline Admin <span class="text-success font-weight-bold">"<?php echo $_SESSION['admin']['admin_nama']; ?>"</span></h2>
                            </marquee>
                        </div>
                        <div class="card-body">
                            <div class="card-deck text-center">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <a href="?page=pages/admin/view"><img src="images/group.png" width="100"></a>
                                        <h4><a href="?page=pages/admin/view">Data Admin</a></h4>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-light">
                                        <a href="?page=pages/home/view"><img src="images/edit-document.png" width="100"></a>
                                        <h4><a href="?page=pages/home/view">Home Frontend</a></h4>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-light">
                                        <a href="?page=pages/announcement/view"><img src="images/chat.png" width="100"></a>
                                        <br>
                                        <h4><a href="?page=pages/announcement/view">Announcement</a></h4>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-deck text-center">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <a href="?page=pages/register/view"><img src="images/registered.png" width="100"></a>
                                        <h4><a href="?page=pages/register/view">Registered</a></h4>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-light">
                                        <a href="?page=pages/submission/sub"><img src="images/storage.png" width="100"></a>
                                        <h4><a href="?page=pages/submission/sub">Submission</a></h4>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body bg-light">
                                        <a href="?page=pages/archive/view"><img src="images/archives.png" width="100"></a>
                                        <br>
                                        <h4><a href="?page=pages/archive/view">Archives</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <?php include 'user/profile.php' ?>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <?php include 'user/sub1.php' ?>
            </div>
        </div>
    </div>