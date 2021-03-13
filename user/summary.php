<article>

    <div class="card">
        <?php
        $id = $_GET['iduser'];
        $ambil = $koneksi->query("SELECT * FROM tbl_author JOIN tbl_submission ON tbl_submission.sub_id = tbl_author.sub_id  where tbl_submission.sub_id = '$id'")->fetch_assoc();
        ?>

        <div class="card-header">
            Summary
        </div>

        <div class="card-body border-bottom">
            <h4><b>Submission</b></h4>
            <table>
                <tr>
                    <th>Authors</th>
                    <td class="ml-4"><?php echo $ambil['last_name'] ?></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><?php echo $ambil['title'] ?></td>
                </tr>
                <tr>
                    <th>Original File</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Supp.files</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Submitter</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Date submitted</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Section</th>
                    <td>Articles</td>
                </tr>
                <tr>
                    <th>Editor</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Author comments</th>
                    <td><?php echo $ambil['comment'] ?></td>
                </tr>
            </table>
        </div>

        <div class="card-body border-bottom">
            <h4><b>Status</b></h4>
            <table>
                <tr>
                    <th>Status</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Initiated</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Last modified</th>
                    <td></td>
                </tr>
            </table>
        </div>

        <div class="card-body border-bottom">
            <h4><b>Submission Metadata</b></h4><br>
            <h5><b>Authors</b></h5>
            <table>
                <tr>
                    <th>Name</th>
                    <td class="ml-4"><?php echo $ambil['first_name'] ?></td>
                </tr>
                <tr>
                    <th>ORCID iD</th>
                    <td><?php echo $ambil['orcidid'] ?></td>
                </tr>
                <tr>
                    <th>URL</th>
                    <td><?php echo $ambil['url'] ?></td>
                </tr>
                <tr>
                    <th>Affiliation</th>
                    <td><?php echo $ambil['affiliation'] ?></td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td><?php echo $ambil['country'] ?></td>
                </tr>
                <tr>
                    <th>Bio Statement</th>
                    <td><?php echo $ambil['bio_statement'] ?></td>
                </tr>
            </table>
        </div>
        <div class="card-body border-bottom">
            <h4><b>Title and Abstract</b></h4>
            <table>
                <tr>
                    <th>Title</th>
                    <td><?php echo $ambil['title'] ?></td>
                </tr>
                <tr>
                    <th>Abstract</th>
                    <td><?php echo $ambil['abstract'] ?></td>
                </tr>
            </table>
        </div>
        <div class="card-body border-bottom">
            <h4><b>Indexing</b></h4>
            <table>
                <tr>
                    <th>Academic discipline and sub-disciplines</th>
                    <td><?php echo $ambil['academic_discipline'] ?></td>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <td><?php echo $ambil['keyword'] ?></td>
                </tr>
            </table>
        </div>
        <div class="card-body border-bottom">
            <h4><b>Supporting Agencies</b></h4>
            <table>
                <tr>
                    <th>Agencies</th>
                    <td><?php echo $ambil['keyword'] ?></td>
                </tr>
            </table>
            <br>
            <h4><b>References</b></h4>
            <table>
                <tr>
                    <th>References</th>
                    <td><?php echo $ambil['reference'] ?></td>
                </tr>
            </table>
        </div>
    </div>


</article>