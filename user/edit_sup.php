<?php $id = $_GET['idedit'];

$dataedit = $koneksi->query("SELECT * FROM tbl_sup WHERE sup_id = '$id'")->fetch_assoc();

?>

<article>
    <a href="?page=user/sub4">Back to Supplementary Files</a>
    <div class="card">
        <div class="card-header">
            <div class="text-center">
                Supplementary File Metadata
            </div>
        </div>

        <div class="card-body">
            <div class="entry-content">
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="">Title *</label>
                        <input type="text" value="<?php echo $dataedit['title'] ?>" required class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">Creator (or owner) of file</label>
                        <input type="text" value="<?php echo $dataedit['creator'] ?>" class="form-control" name="creator">
                    </div>

                    <div class="form-group">
                        <label for="">Keywords</label>
                        <input type="text" value="<?php echo $dataedit['keyword'] ?>" class="form-control" name="keyword">
                    </div>

                    <div class="form-group">
                        <label for="">Type </label>
                        <select name="type" class="form-control">
                            <option value="Research Instrument">Research Instrument</option>
                            <option value="Research Material">Research Material</option>
                            <option value="Research Result">Research Result</option>
                            <option value="Transcript">Transcript</option>
                            <option value="Data Analysis">Data Analysis</option>
                            <option value="Data Set">Data Set</option>
                            <option value="Source Text">Source Text</option>
                            <option value="">Other</option>
                        </select><br>
                        <label for="">Specify Other</label>
                        <input type="text" class="" name="type">
                    </div>

                    <div class="form-group">
                        <label for="">Publisher</label>
                        <input type="text" value="<?php echo $dataedit['publisher'] ?>" class="form-control" name="publisher">
                    </div>

                    <div class="form-group">
                        <label for="">Brief description</label>
                        <br>
                        <textarea name="brief" cols="83" rows="3"><?php echo $dataedit['brief'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Contributor or sponsoring agency</label>
                        <input type="text" value="<?php echo $dataedit['contributor'] ?>" class="form-control" name="contributor">
                    </div>

                    <?php
                    $tgl = date('Y-m-d');
                    ?>

                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control" value="<?php echo $tgl ?>" name="date">
                    </div>

                    <div class="form-group">
                        <label for="">Source</label>
                        <input type="text" value="<?php echo $dataedit['source'] ?>" class="form-control" name="source">
                    </div>

            </div>
        </div>


        <div class="card-header">
            <div class="">
                Supplementary File
            </div>
        </div>
        <br>
        <div class="card-body">

            <?php if (empty($_SESSION['datafile1'])) { ?>
            <?php } else { ?>
                <table border="1">
                    <tr>
                        <th>File Name</th>
                        <td><?php echo  $_SESSION['datafile1']['filename1']; ?></td>
                    </tr>
                    <tr>
                        <th>Original Name File</th>
                        <td><?php echo  $_SESSION['datafile1']['orginal1']; ?></td>
                    </tr>
                    <tr>
                        <th>File Size</th>
                        <td><?php echo  $_SESSION['datafile1']['size1']; ?></td>
                    </tr>
                    <tr>
                        <th>Date Uploaded</th>
                        <td><?php echo  $_SESSION['datafile1']['date1']; ?></td>
                    </tr>
                </table>
            <?php } ?>
        </div>
    </div>
    <br>
    <button type="submit" class="btn text-white" style="background-color:  #ff5821;" name="update">Save and continue</button>
    <a href="?page=user/sub4" class="btn text-white" style="background-color:  #ff5821;">Cancel</a>
    </form>

    <?php
    if (isset($_POST['update'])) {

        $title = $_POST['title'];
        $creator = $_POST['creator'];
        $keyword = $_POST['keyword'];
        $publisher = $_POST['publisher'];
        $brief = $_POST['brief'];
        $contributor = $_POST['contributor'];
        $date = $_POST['date'];
        $source = $_POST['source'];

        $update = $koneksi->query("UPDATE tbl_sup SET title = '$title', creator = '$creator', keyword = '$keyword', publisher = '$publisher', brief = '$brief', contributor = '$contributor', date = '$date', source = '$source' WHERE sup_id = '$id'");

        echo "<script>
            alert('data has been updated!')
            window.location='?page=user/sub4'
            </script>";
    }
    ?>
</article>