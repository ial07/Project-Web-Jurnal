    <?php
    $id = $_GET['iddel'];
    $hapus = $koneksi->query("DELETE FROM tbl_article WHERE article_id = '$id'");

    if ($hapus == TRUE) {
        echo " <script>
        alert('Data deleted successfully')
        window.location='?page=pages/archive/detailarc'
        </script>";
    } else {
        echo " <script>
        alert('Data failed to delete')
        window.location='?page=pages/archive/detailarc'
        </script>";
    }
