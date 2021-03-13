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
                        <input type="text" required class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">Creator (or owner) of file</label>
                        <input type="text" class="form-control" name="creator">
                    </div>

                    <div class="form-group">
                        <label for="">Keywords</label>
                        <input type="text" class="form-control" name="keyword">
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
                        <input type="text" class="form-control" name="publisher">
                    </div>

                    <div class="form-group">
                        <label for="">Brief description</label>
                        <br>
                        <textarea name="brief" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Contributor or sponsoring agency</label>
                        <input type="text" class="form-control" name="contributor">
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
                        <input type="text" class="form-control" name="source">
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
                        <!-- <td><?php echo $_SESSION['id_file_sup']; ?></td> -->
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
            <br>
        </div>
    </div>
    <br>
    <button type="submit" class="btn text-white" style="background-color:  #ff5821;" name="supp">Save and continue</button>
    <a href="?page=user/sub4" class="btn text-white" style="background-color:  #ff5821;">Cancel</a>
    </form>

    <?php
    if (isset($_POST['supp'])) {

        $title = $_POST['title'];
        $creator = $_POST['creator'];
        $keyword = $_POST['keyword'];
        $type = $_POST['type'];
        $publisher = $_POST['publisher'];
        $brief = $_POST['brief'];
        $contributor = $_POST['contributor'];
        $date = $_POST['date'];
        $source = $_POST['source'];
        $register_id = $_SESSION['user']['register_id'];

        $koneksi->query("INSERT INTO tbl_sup(register_id,title,creator,keyword,type1,publisher,brief,contributor,date,source,id_file_sup) VALUES ('$register_id','$title','$creator','$keyword','$type','$publisher','$brief','$contributor','$date','$source','$_SESSION[id_file_sup_supplementary]')");

        echo "<script>
            alert('Data has been saved!')
            window.location='?page=user/sub4'
            </script>";
    }
    ?>
</article>