<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="card">
        <div class="card-header text-center">
            <h3>Data Table Archive</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#tambah">Add Data</a>
            <table class="table table-bordered" id="example1">
                <thead class="bg-dark">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>ISSN</th>
                        <th>Year</th>
                        <th>Picture</th>
                        <th>Article</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ambil = $koneksi->query("SELECT * FROM tbl_archive");
                    $no = 1;
                    while ($pecah = $ambil->fetch_assoc()) {


                    ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pecah['title'] ?></td>
                            <td><?php echo $pecah['des'] ?></td>
                            <td><?php echo $pecah['year'] ?></td>
                            <td><img width="100" height="100" src="images/fotoarchive/<?php echo $pecah['pict'] ?>"> </td>
                            <td><a class="btn btn-primary" href="?page=pages/archive/detailarc&idart=<?php echo $pecah['archive_id'] ?>">Add Article</a></td>
                            <td>
                                <a class="btn btn-warning" href="?page=pages/archive/update&idedit=<?php echo $pecah['archive_id'] ?>">Update</a>
                                <a class="btn btn-danger" href="?page=pages/archive/delete&idhapus=<?php echo $pecah['archive_id'] ?>">Delete</a>
                            </td>

                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah data Admin -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entry Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">

                            <label>Year</label>
                            <select name="year" id="year">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                            </select>


                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>


                            <div class="form-group">
                                <label>ISSN</label>
                                <input type="text" class="form-control" name="issn">
                            </div>

                            <div class="form-group">
                                <label>Cover </label><br>
                                <input type="file" name="foto">
                            </div>

                            <button type="submit" name="simpan" class="btn btn-success btn-block">Save</button>
                    </form>

                    <?php if (isset($_POST['simpan'])) {
                        $year = $_POST['year'];
                        $title = $_POST['title'];
                        $issn = $_POST['issn'];
                        $foto = $_FILES['foto']['name'];
                        $lokasi = $_FILES['foto']['tmp_name'];
                        $date = date("M-Y");

                        move_uploaded_file($lokasi, "images/fotoarchive/" . $foto);

                        $simpan = $koneksi->query("INSERT INTO tbl_archive (year, month, title, des, pict) VALUES ('$year','$date','$title','$issn','$foto')");

                        if ($simpan == TRUE) {

                            echo " <script>
                            alert('Data saved successfully')
                            window.location='?page=pages/archive/view'
                            </script>";
                        } else {
                            echo " <script>
                            alert('Data failed to save')
                            window.location='?page=pages/archive/view'
                            </script>";
                        }
                    }
                    ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


</div>