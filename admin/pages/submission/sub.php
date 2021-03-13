<div class="content-wrapper">
    <div class="card">
        <div class="card-header text-center">
            <h3>Data Submission</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="example1">
                <thead class="bg-dark">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Abstract</th>
                        <th>Academic discipline</th>
                        <th>Keyword</th>
                        <th>Agencies</th>
                        <th>References</th>
                        <th>File Sub</th>
                        <th>Status</th>
                        <th>Edit Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tbl_submission a JOIN tbl_file_sup b ON a.file_sup= b.id_file_sup WHERE a.file_sup AND b.type = 'submission'");
                    $no = 1;
                    while ($pecah = $ambil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pecah['title'] ?></td>
                            <td><?= $pecah['abstract'] ?></td>
                            <td><?= $pecah['academic_discipline'] ?></td>
                            <td><?= $pecah['keyword'] ?></td>
                            <td><?= $pecah['agencies'] ?></td>
                            <td><?= $pecah['reference'] ?></td>
                            <td><?= $pecah['original_name'] ?><br><a href="../assets/img/file_submission/<?= $pecah['original_name'] ?>" download>Download</a></td>
                            <td><?= $pecah['status'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="?page=pages/submission/editstatus&idedit=<?php echo $pecah['sub_id'] ?>">Update</a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="?page=pages/submission/update&idedit=<?php echo $pecah['file_sup'] ?>">Update Sub</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>