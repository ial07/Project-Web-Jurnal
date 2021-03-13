<?php
$id_archive = $_GET['idart'];

?>
<div class="content-wrapper">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Add Article</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Submission</label>
                        <select name="sub" id="sub" style="width: 100%;" class="sub">
                            <option value=""></option>
                            <?php $data = $koneksi->query("SELECT * FROM tbl_submission");  ?>
                            <?php
                            foreach ($data as $a => $i) {
                            ?>
                                <option value="<?php echo $i['sub_id'] ?>"><?php echo $i['title'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" class="form-control" name="title">
                    </div>

                    <div class="form-group" id="dataAuthor">

                        <!-- <label>Authors</label>
                        <input type="text" class=" form-control" name="author" id="author"> -->
                    </div>


                    <div class="form-group">
                        <label>File</label>
                        <input type="file" class="form-control" name="foto">
                    </div>

                    <div class="form-group">
                        <label>Halaman</label>
                        <input type="text" class="form-control" name="hal">
                    </div>

                    <button type="submit" name="input" class="btn btn-primary">input</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                $ambil1 = $koneksi->query("SELECT tbl_article.* From
    tbl_article Inner Join
    tbl_archive On tbl_article.archive_id = tbl_archive.archive_id WHERE tbl_article.archive_id = '$id_archive'");
                while ($pecah = $ambil1->fetch_object()) {

                ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td><?= $pecah->title ?></td>
                        <td>
                            <!-- <a class="btn btn-warning" href="?page=pages/archive/edit_art&idedit=<?php echo $pecah->article_id ?>">Update</a> -->
                            <a class=" btn btn-danger" href="?page=pages/archive/delete_art&iddel=<?php echo $pecah->article_id ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <?php if (isset($_POST['input'])) {

        $title =  $_POST['title'];
        $author = $_POST['author'];
        $hal = $_POST['hal'];

        $file = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        $sub = $_POST['sub'];

        move_uploaded_file($lokasi, "images/fotoarchive/" . $file);

        $input = $koneksi->query("INSERT INTO tbl_article (title, file, archive_id,sub_id,hal) VALUES ('$title','$file','$id_archive','$sub','$hal')");

        // $id_article = $koneksi->insert_id;

        // $input = $koneksi->query("INSERT INTO tbl_author_art (author,article_id) VALUES ('$author','$id_article')");

        if ($input == TRUE) {
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
    } ?>


</div>

<script>
    $(document).ready(function() {
        $('.sub').select2({
            placeholder: 'Select'
        });
    })


    $('#sub').change(function(e) {
        e.preventDefault()
        var data = $(this).val();
        $.ajax({
            url: 'pages/archive/datatitle.php',
            type: 'POST',
            dataType: 'json',
            data: {
                'id': data
            },
            success: function(res) {

                $('#dataAuthor').html("");

                var no = 0;
                for (let i = 0; i < res.length; i++) {
                    var nama = res[i].data.first_name + " " + res[i].data.middle_name
                    no++;
                    // console.log(nama)
                    var isi = "<label>Author " + no + "</label><input type='text' name='author[]' class='form-control mb-2' value='" + nama + "' name='author'>"


                    $('#dataAuthor').append(isi);

                }


                $('#title').val(res[0].data.title)
            }
        })

    })
</script>