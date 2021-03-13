<div class="content-wrapper">

    <div class="card">
        <div class="card-header text-center">
            <h3>Data Home Frontend</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#tambah">Add data</a>
            <table class="table table-bordered" id="example1">
                <thead class="bg-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul home</th>
                        <th>Isi home</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tbl_home");
                    $no = 1;
                    while ($pecah = $ambil->fetch_assoc()) {

                    ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pecah['home_judul'] ?></td>
                            <td><?= substr($pecah['home_isi'], 0, 200) ?></td>
                            <td><img width="100" src="images/fotohome/<?= $pecah['home_gambar'] ?>"></td>
                            <td>
                                <a class="btn btn-warning mb-2" href="?page=pages/home/update&idedit=<?= $pecah['home_id'] ?>">Update</a>
                                <a class="btn btn-danger" href="?page=pages/home/delete&idhapus=<?php echo $pecah['home_id'] ?>">Delete</a>
                                </>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah data Admin -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="">Judul home</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Isi home</label>
                            <textarea name="isi" id="isi" cols="30" rows="5" class="form-control isi"></textarea>
                        </div>
                        <script>
                            CKEDITOR.replace('isi');
                        </script>

                        <div class="form-group">
                            <label for="">Gambar home</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <button type="submit" name="simpan" class="btn btn-primary btn-block">Save</button>

                    </form>

                    <?php
                    if (isset($_POST['simpan'])) {
                        $judul       = $_POST['judul'];
                        $isi         = $_POST['isi'];

                        $foto = $_FILES['foto']['name'];
                        $lokasi = $_FILES['foto']['tmp_name'];

                        move_uploaded_file($lokasi, "images/fotohome/" . $foto);

                        $simpan = $koneksi->query("INSERT INTO tbl_home(home_judul,
                                                                            home_isi,
                                                                            home_gambar)
                                                                            VALUES  
                                                                            ('$judul',
                                                                            '$isi',
                                                                            '$foto')");

                        if ($simpan == TRUE) {

                            echo " <script>
                        alert('Data saved successfully')
                        window.location='?page=pages/home/view'
                        </script>";
                        } else {
                            echo " <script>
                        alert('Data failed to save')
                        window.location='?page=pages/home/view'
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