<?php include 'admin/model/koneksi.php';

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php' ?>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <?php include 'components/topbar.php' ?>

    <section id="blog" class="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 entries">

                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Result</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="example1">
                                <thead class="">
                                    <tr>
                                        <th>ISSUE</th>
                                        <th>TITLE</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $ambil = $koneksi->query("SELECT
    tbl_submission.sub_id,
    tbl_submission.title AS title_sub,
    tbl_submission.abstract,
    tbl_author.first_name,
    tbl_author.middle_name,
    tbl_author.last_name,
    tbl_article.archive_id,
    tbl_archive.month,
    tbl_archive.year,
    tbl_archive.title AS title_archive
From
    tbl_archive Inner Join
    tbl_article On tbl_article.archive_id = tbl_archive.archive_id Inner Join
    tbl_submission On tbl_submission.sub_id = tbl_article.sub_id Inner Join
    tbl_author On tbl_submission.sub_id = tbl_author.sub_id WHERE tbl_author.first_name LIKE '$_POST[s_author]'  OR tbl_author.middle_name LIKE '$_POST[s_author]' OR tbl_author.last_name LIKE '$_POST[s_author]' OR tbl_submission.title LIKE '$_POST[s_title]' OR tbl_submission.abstract LIKE '$_POST[s_abstract]' OR tbl_archive.year LIKE '$_POST[s_year]' OR tbl_archive.month LIKE '$_POST[s_year]'");

                                    while ($pecah = $ambil->fetch_assoc()) {
                                    ?>

                                        <tr>
                                            <td><a href="./?page=pages/detailarc&idart=<?php echo $pecah['archive_id'] ?>">
                                                    <h5><?php echo $pecah['title_archive'] ?></h5>
                                                </a> <br>

                                                <?php echo $pecah['first_name'] ?> <?php echo $pecah['middle_name'] ?>

                                            </td>

                                            <td><?php echo $pecah['title_sub'] ?></td>
                                            <td>
                                                <a href="admin/images/fotoarchive/<?= $pecah['file'] ?>" download>PDF</a>
                                            </td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <a href="index.php">Back To Home</a>

                </div>
                <div class="col-lg-3">
                    <div class="sidebar" data-aos="fade-left">
                        <!-- jika belum login -->
                        <?php
                        if (empty($_SESSION['user'])) {
                        ?>
                            <div class="card">
                                <div class=" card-header text-white" style="background-color:  #ff5821;">LOGIN USER</div>
                                <div class="card-body">
                                    <div class="block" id="sidebarWebFeed">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" required class="form-control" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" required class="form-control" name="password">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                            </div>
                                            <button type="submit" name="login" value="login" class="btn btn-block text-white" style="background-color:  #ff5821;">Login</button>
                                        </form>
                                        <?php include 'admin/model/koneksi.php';
                                        ?>
                                        <?php
                                        if (isset($_POST['login'])) {
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);

                                            $cek = $koneksi->query("SELECT * FROM tbl_register WHERE username = '$username' AND register_password = '$password'");

                                            $pecah = $cek->fetch_assoc();
                                            $validasi = $cek->num_rows;

                                            if ($validasi >= 1) {
                                                session_start();
                                                $_SESSION['user'] = $pecah;

                                                echo " <script>
                        alert('You have successfully logged in');
                        window.location='?page=user/home';
                        </script>";
                                            } else {
                                                echo " <script>
                        alert('Your password is wrong, please login again');
                        window.location='?page=login';
                        </script>";
                                            }
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="card">
                                <div class=" card-header text-white" style="background-color:  #ff5821;">LOGIN USER</div>
                                <div class="card-body">
                                    <h5>You are logged in as...</h5>
                                    <h4 class="font-weight-bold"><?php echo $_SESSION['user']['username']; ?></h4>
                                </div>
                            </div>
                        <?php
                        }
                        ?>



                        <br>
                        <div class="card">
                            <div class=" card-header text-white" style="background-color:  #ff5821;">INDEXING</div>
                            <div class="card-body text-center">
                                <div class="advs">
                                    <a class="image-adv" title="IJCMD in Google Scholar" href="https://scholar.google.com/scholar?q=site%3Aijmmu.com" target="_blank"> <img src="assets/img/clients/1.png" alt="IJCMD in Google Scholar" width="70" /> </a>
                                    <a class="image-adv" title="IJMMU in Universit&auml;ts&shy;biblio&shy;thek Leipzig" href=""> <img src="assets/img/clients/19.png" alt="IJMMU in Universit&auml;ts&shy;biblio&shy;thek Leipzig" width="70" /> </a>
                                    <a class="image-adv" title="IJMMU in Bibliothekssystem Universit&auml;t Hamburg" href=""> <img src="assets/img/clients/20.png" alt="IJMMU in Bibliothekssystem Universit&auml;t Hamburg" width="70" /> </a>
                                    <a class="image-adv" title="IJMMU in Islamic World Science Citation Center (ISC)" href=""> <img src="assets/img/clients/4.png" alt="IJMMU in Islamic World Science Citation Center (ISC)" width="70" /> </a>
                                    <!-- <a class="image-adv" title="IJMMU in The DOI&reg; System" href="http://dx.doi.org/10.18415/ijmmu" target="_blank"> <img src="assets/img/clients/2.png" alt="IJMMU in The DOI&reg; System" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in CrossRef" href="http://search.crossref.org/?q=IJMMU" target="_blank"> <img src="assets/img/clients/3.png" alt="IJMMU in CrossRef" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in J-Gate" href="http://jgateplus.com/search/jFArticleDetails_new/?f=journal_id%5b%27152556%27%5d" rel="nofollow" target="_blank"> <img src="assets/img/clients/5.png" alt="IJMMU in J-Gate" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Microsoft Academic" href="https://academic.microsoft.com/#/detail/2738486533" target="_blank"> <img src="assets/img/clients/6.png" alt="IJMMU in Microsoft Academic" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in SIS" href="http://www.ss.org/JournalList.aspx?ID=1768" rel="nofollow" target="_blank"> <img src="assets/img/clients/7.png" alt="IJMMU in SIS" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in CiteFactor" href="http://www.citefactor.org/journal//12865/international-journal-of-multicultural-and-multireligious-understanding" target="_blank"> <img src="assets/img/clients/8.png" alt="IJMMU in CiteFactor" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Advanced Science " href="http://journal-.org/.php/asi/article/view/1998" rel="nofollow" target="_blank"> <img src="assets/img/clients/9.png" alt="IJMMU in Advanced Science " width="50" /> </a>
                  <a class="image-adv" title="IJMMU in ISSUU" href="https://issuu.com/ijmmu.com" target="_blank"> <img src="assets/img/clients/10.png" alt="IJMMU in ISSUU" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in TEI" href="http://www.turkegitimindeksi.com/Journals.aspx?ID=314" rel="nofollow" target="_blank"> <img src="assets/img/clients/11.png" alt="IJMMU in TEI" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Research Bible" href="http://journalseeker.researchbib.com/view/issn/2364-5369" rel="nofollow" target="_blank"> <img src="assets/img/clients/12.png" alt="IJMMU in Research Bible" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in EZB (Electronic Journals Library)" href="https://opac.giga-hamburg.de/ezb/detail.phtml?jour_id=231160&amp;lang=en" rel="nofollow" target="_blank"> <img src="assets/img/clients/13.png" alt="IJMMU in EZB (Electronic Journals Library)" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Open Acess Library (OAL)" href="https://oa-library.com/publisher.php" rel="nofollow" target="_blank"> <img src="assets/img/clients/14.png" alt="IJMMU in Open Acess Library (OAL)" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in SCIPIO" href="http://www.scipio.ro/en/web/international-journal-of-multicultural-and-multireligious-understanding" rel="nofollow" target="_blank"> <img src="assets/img/clients/15.png" alt="IJMMU in SCIPIO" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Impact Factor" href="http://www.scholarimpact.org/2364-5369-international-journal-of-multicultural-and-multireligious-understanding.html" rel="nofollow" target="_blank"> <img src="assets/img/clients/16.png" alt="IJMMU in Impact Factor" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in BASE" href="http://www.base-search.net/Search/Results?q=dccoll:ftjijmmu&amp;refid=dclink" rel="nofollow" target="_blank"> <img src="assets/img/clients/17.png" alt="IJMMU in BASE" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in InfoBase " href="http://www.infobase.com/.php" rel="nofollow" target="_blank"> <img src="assets/img/clients/18.png" alt="IJMMU in InfoBase " width="50" /> </a>
                  
                  <a class="image-adv" title="IJMMU in Universit&auml;t des Saarlandes" href="http://www.sulb.uni-saarland.de/de/suchen/zeitschriften/suche-in-ezb/details-zur-zeitschrift-ezb/?libconnect%5Bjourid%5D=231160" target="_blank"> <img src="assets/img/clients/21.png" alt="IJMMU in Universit&auml;t des Saarlandes" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Libraries of the University of Applied Sciences and Arts Hannover" href="http://www.hs-hannover.de/bibl/literatursuche/medien/elektronische-zeitschriften/ezb-detailansicht/.html?libconnect%5Bjourid%5D=231160" rel="nofollow" target="_blank"> <img src="assets/img/clients/22.png" alt="IJMMU in Bibliothek der Hochschule Hannover" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Leibniz Insitute for Science and Mathematics Education" href="http://ilse.kobv.de/browseJournals.do?lang=en&amp;list=all&amp;letter1=I&amp;plv=1" rel="nofollow" target="_blank"> <img src="assets/img/clients/23.png" alt="IJMMU in Leibniz Insitute for Science and Mathematics Education" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in University of Nottingham" href="http://www.sherpa.ac.uk/romeo/search.php?id=2567&amp;format=full" rel="nofollow" target="_blank"> <img src="assets/img/clients/24.png" alt="IJMMU in University of Nottingham" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Cosmos Impact Factor" href="http://www.cosmosimpactfactor.com/page/journals_details/656.html" rel="nofollow" target="_blank"> <img src="assets/img/clients/25.png" alt="IJMMU in Cosmos Impact Factor" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Cosmos Jour Informatics" href="http://www.jourinfo.com/Journals/IJMMU.html" rel="nofollow" target="_blank"> <img src="assets/img/clients/26.png" alt="IJMMU in Jour Informatics" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Directory of Open Access scholarly Resources" href="http://road.issn.org/issn/2364-5369" rel="nofollow" target="_blank"> <img src="assets/img/clients/27.png" alt="IJMMU in Directory of Open Access scholarly Resources" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Directory of Open Access Journals (DOAJ)" href="https://doaj.org/toc/2364-5369" target="_blank"> <img src="assets/img/clients/28.png" alt="IJMMU in Directory of Open Access Journals (DOAJ)" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in WorldCat" href="http://www.worldcat.org/title/international-journal-of-multicultural-and-multireligious-understanding-ijmmu/oclc/911141631" rel="nofollow" target="_blank"> <img src="assets/img/clients/29.png" alt="IJMMU in WorldCat" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Leuphana" href="http://www.leuphana.de/services/miz/literaturrecherche/digitale-bibliothek/e-zeitschriften/detail.html?libconnect%5Bjourid%5D=231160" rel="nofollow" target="_blank"> <img src="assets/img/clients/30.png" alt="IJMMU in Leuphana" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in PKP " href="http://.pkp.sfu.ca/.php/browse//725" rel="nofollow" target="_blank"> <img src="assets/img/clients/31.png" alt="IJMMU in PKP " width="50" /> </a>
                  <a class="image-adv" title="IJMMU in English E-Journal Database of Regional information Center for Science and Technology" href="http://search.ricest.ac.ir/dl/search/defaultta.aspx?DTC=31&amp;DC=5599" rel="nofollow" target="_blank"> <img src="assets/img/clients/32.png" alt="IJMMU in English E-Journal Database of Regional information Center for Science and Technology" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Toronto Public Library" href="http://www.torontopubliclibrary.ca/detail.jsp?Entt=RDM3520707&amp;R=3520707" target="_blank"> <img src="assets/img/clients/33.png" alt="IJMMU in Toronto Public Library" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Scilit" href="https://www.scilit.net/info/pub/10.18415" target="_blank"> <img src="assets/img/clients/34.png" alt="IJMMU in Scilit" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Global Impact Factor" href="http://globalimpactfactor.com/international-journal-of-multicultural-and-multireligious-understanding-ijmmu/" target="_blank"> <img src="assets/img/clients/35.png" alt="IJMMU in Global Impact Factor" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Naval Postgraduate School" href="https://nps.primo.exlibrisgroup.com/discovery/fulldisplay?docid=alma991005381212003791&amp;context=L&amp;vid=01NPS_INST:01NPS&amp;search_scope=MyInst_and_CI&amp;tab=Everything&amp;lang=en" target="_blank"> <img src="assets/img/clients/36.png" alt="IJMMU in Naval Postgraduate School" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Iranian Peace Studies Scientific Association" href="http://ipsan.ir/en/" target="_blank"> <img src="assets/img/clients/37.png" alt="IJMMU in Iranian Peace Studies Scientific Association" width="50" /> </a>
                  <a class="image-adv" title="IJMMU in Georgian International Academy of Sciences" href="http://gias.ge/Home/JournalListDetail/1035" target="_blank"> <img src="assets/img/clients/38.png" alt="IJMMU in Georgian International Academy of Sciences" width="50" /> </a></div> -->
                                </div>
                            </div>
                            <br>
                            <!-- <div class="card">
                <div class=" card-header text-white" style="background-color:  #ff5821;">CURRENT ISSUE</div>
                <div class="card-body">
                  <div class="block" id="sidebarWebFeed">
                    <a href="https://ijmmu.com/index.php/ijmmu/gateway/plugin/WebFeedGatewayPlugin/atom">
                      <img src="https://ijmmu.com/plugins/generic/webFeed/templates/images/atom10_logo.gif" alt="Atom logo" border="0" /></a>
                    <br />
                    <a href="https://ijmmu.com/index.php/ijmmu/gateway/plugin/WebFeedGatewayPlugin/rss2">
                      <img src="https://ijmmu.com/plugins/generic/webFeed/templates/images/rss20_logo.gif" alt="RSS2 logo" border="0" /></a>
                    <br />
                    <a href="https://ijmmu.com/index.php/ijmmu/gateway/plugin/WebFeedGatewayPlugin/rss">
                      <img src="https://ijmmu.com/plugins/generic/webFeed/templates/images/rss10_logo.gif" alt="RSS1 logo" border="0" /></a>
                  </div>
                </div>
              </div> -->

                        </div>
                    </div><!-- End sidebar recent posts-->
                </div>
            </div><!-- End blog sidebar -->
    </section>
    <!-- ======= Footer ======= -->
    <?php include 'components/footer.php' ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <?php include 'components/script.php' ?>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color:  #ff5821;">
                    <h5 class="modal-title" id="exampleModalLabel">Search Journal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="data.php">
                        <div class="text-center">
                            <h5><i>Search Categories</i></h5>
                        </div>
                        <div class="form-group">
                            <label for="">Authors</label>
                            <input type="text" class="form-control" id="" name="s_author">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" name="s_title">
                        </div>
                        <div class="form-group">
                            <label for="">Abstract</label>
                            <input type="text" class="form-control" id="" name="s_abstract">
                        </div>
                        <div class="text-center">
                            <h5><i>Publication Date</i></h5>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control" name="s_month">
                                    <option selected>Month</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select id="inputState" class="form-control" name="s_year">
                                    <option selected>Year</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                    <option>2028</option>
                                    <option>2029</option>
                                    <option>2030</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block text-white" style="background-color:  #ff5821;">Search</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>