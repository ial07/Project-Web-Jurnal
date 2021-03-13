<?php if (isset($_POST['search'])) {
    require_once 'model/koneksi.php';
    $no = 1;
    $search = $_POST['search'];
    $query = mysqli_query($conn, "SELECT * FROM tbl_archive WHERE name LIKE '%" . $search . "%'");
    while ($row = mysqli_fetch_object($query)) { ?>
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Search</h2>
                    <ol>
                        <li><a href="?page=home">Home</a></li>
                        <li>Search</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry" data-aos="fade-up">

                            <div class="entry-content">
                                <form>
                                    <div class="text-center">
                                        <h5><i>Search Categories</i></h5>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Authors</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Abstract</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Full Text</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Supplementary File(s)</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <br>
                                    <br>
                                    <div class="text-center">
                                        <h5><i>Publication Date</i></h5>
                                    </div>
                                    <br>
                                    <div>
                                        <h5>From</h5>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <select id="inputState" class="form-control">
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
                                        <div class="form-group col-md-4">
                                            <select id="inputState" class="form-control">
                                                <option selected>Date</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select id="inputState" class="form-control">
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
                                    <br><br>
                                    <div class="text-center">
                                        <h5><i>Index Term</i></h5>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Discipline(s)</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Keyword(s)</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Type (method/approach)</label>
                                        <input type="text" class="form-control" id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Coverage</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">All index term fields</label>
                                        <input type="text" class="form-control" id="">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                                </form>
                            </div>

                        </article><!-- End blog entry -->


                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar" data-aos="fade-left">

                            <h3 class="sidebar-title">Search For</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="icofont-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="card">
                                <div class=" card-header text-white" style="background-color:  #ff5821;">User</div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <button type="submit" class="btn btn-block text-white" style="background-color:  #ff5821;">Login</button>
                                    </form>
                                </div>
                            </div>


                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

        </main><!-- End #main -->
<?php }
} ?>