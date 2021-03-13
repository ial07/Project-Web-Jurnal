<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="card">
        <div class="card-header text-center">
            <h3>Data Table Indexing</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3 text-white" data-toggle="modal" data-target="#tambah">Add Data</a>
            <table class="table table-bordered" id="example1">
                <thead class="bg-dark">
                    <tr>
                        <th>No</th>
                        <th>Indexing Link</th>
                        <th>Indexing Picture</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $ambil = $koneksi->query("SELECT * FROM tbl_index");
                    $no = 1;
                    while ($pecah = $ambil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pecah['index_link'] ?></td>
                            <td><img width="100" height="100" src="images/fotoindex/<?php echo $pecah['index_foto'] ?>"> </td>
                            <td>
                                <a class="btn btn-warning" href="?page=pages/indexing/update&idedit=<?php echo $pecah['index_id'] ?>">Update</a>
                                <a class="btn btn-danger" href="?page=pages/indexing/delete&idhapus=<?php echo $pecah['index_id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah data index -->
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

                        <div class="form-group">
                            <label>Indexing Link</label>
                            <input type="text" class="form-control" name="link">
                        </div>

                        <div class="form-group">
                            <label>Indexing Picture</label>
                            <input type="file" class="form-control" name="foto">
                        </div>

                        <button type="submit" name="simpan" class="btn btn-success btn-block">Save</button>

                    </form>
                    <?php if (isset($_POST['simpan'])) {
                        $link = $_POST['link'];

                        $foto = $_FILES['foto']['name'];
                        $lokasi = $_FILES['foto']['tmp_name'];

                        move_uploaded_file($lokasi, "images/fotoindex/" . $foto);

                        $simpan = $koneksi->query("INSERT INTO tbl_index (index_link, index_foto) VALUES ('$link','$foto')");

                        if ($simpan == TRUE) {

                            echo " <script>
                            alert('Data saved successfully')
                            window.location='?page=pages/indexing/view'
                            </script>";
                        } else {
                            echo " <script>
                            alert('Data failed to save')
                            window.location='?page=pages/indexing/view'
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