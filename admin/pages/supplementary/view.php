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
                        <th>Nama Supplementary</th>
                        <th>Title</th>
                        <th>Creator</th>
                        <th>Keyword</th>
                        <th>Type</th>
                        <th>Publisher</th>
                        <th>Brief</th>
                        <th>Contributor</th>
                        <th>Date</th>
                        <th>Source</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 1;
                    $ambil = $koneksi->query("SELECT * FROM tbl_file_sup JOIN tbl_sup ON tbl_file_sup.id_file_sup = tbl_sup.id_file_sup where tbl_file_sup.type = 'supplementary'");
                    while ($pecah = $ambil->fetch_assoc()) {

                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $pecah['original_name'] ?></td>
                            <td><?php echo $pecah['title'] ?></td>
                            <td><?php echo $pecah['creator'] ?></td>
                            <td><?php echo $pecah['keyword'] ?></td>
                            <td><?php echo $pecah['type1'] ?></td>
                            <td><?php echo $pecah['publisher'] ?></td>
                            <td><?php echo $pecah['brief'] ?></td>
                            <td><?php echo $pecah['contributor'] ?></td>
                            <td><?php echo $pecah['date'] ?></td>
                            <td><?php echo $pecah['source'] ?></td>

                            <td>
                                <a class="btn btn-danger" href="?page=pages/supplementary/delete&idhapus=<?php echo $pecah['id_file_sup'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>


</div>