<article class="entry" data-aos="fade-up">
    <h5>Step 1. Starting the Submission</h5>
    <b>1.Start</b> 2.Upload Submission 3.Enter Metadata 4.Upload Suplementary Files 5.Confirmation
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            <h4>Submission Checklist</h4>
        </div>
        <form action="" enctype="multipart/form-data" method="POST" onsubmit="return confirm('Do you really want to continue?');">
            <div class="card-body">
                Indicate that this submission is ready to be considered by this journal by checking off the following (comments to the editor can be added below).
                <div class="entry-content">
                    <h6><input type="checkbox" required name="1" value="1"> The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).<br><br>
                        <input type="checkbox" required name="2" value="2"> The submission file is in OpenOffice, Microsoft Word, RTF, or WordPerfect document file format.<br><br>
                        <input type="checkbox" required name="3" value="3"> Where available, URLs for the references have been provided.<br><br>
                        <input type="checkbox" required name="4" value="4"> The text is single-spaced; uses a 12-point font; employs italics, rather than underlining (except with URL addresses); and all illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.<br><br>
                        <input type="checkbox" required name="5" value="5"> The text adheres to the stylistic and bibliographic requirements outlined in the <a href="?page=user/author">Author Guidelines</a>, which is found in About the Journal.<br><br>
                        <input type="checkbox" required name="6" value="6"> If submitting to a peer-reviewed section of the journal, the instructions in Ensuring a Blind Review have been followed.<br><br>
                    </h6>
                </div>
            </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Copyright Notice</h4>
        </div>
        <div class="card-body">
            Authors who publish with this journal agree to the following terms:
            <div class="entry-content">
                <h6>
                    <ul>
                        <li>Authors retain copyright and grant the journal right of first publication with the work simultaneously licensed under a Creative Commons Attribution License that allows others to share the work with an acknowledgement of the work's authorship and initial publication in this journal.</li><br>
                        <li>Authors are able to enter into separate, additional contractual arrangements for the non-exclusive distribution of the journal's published version of the work (e.g., post it to an institutional repository or publish it in a book), with an acknowledgement of its initial publication in this journal.</li><br>
                        <li>Authors are permitted and encouraged to post their work online (e.g., in institutional repositories or on their website) prior to and during the submission process, as it can lead to productive exchanges, as well as earlier and greater citation of published work (See The Effect of Open Access).</li>
                    </ul>
                    <input type="checkbox" required name="7" value="7" class="ml-1"> The authors agree to the terms of this Copyright Notice, which will apply to this submission if and when it is published by this journal (comments to the editor can be added below).<br><br>
                </h6>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Journal's Privacy Statement</h4>
        </div>
        <div class="card-body">
            <div class="entry-content">
                <h6>The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.</h6>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Comments for the Editor</h4>
        </div>
        <div class="card-body">
            <div class="entry-content">
                Enter text (optional)
                <br>
                <textarea name="comment" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>
    </div>
    <br>

    <button type="submit" name="save" value="save" class="btn text-white" style="background-color:  #ff5821;"> Save and Continue</button>
    </form>

    <?php
    if (isset($_POST['save'])) {
        $_SESSION['comment'] = $_POST['comment'];
        echo "<script>window.location='?page=user/sub2'</script>";
    }

    ?>
</article>