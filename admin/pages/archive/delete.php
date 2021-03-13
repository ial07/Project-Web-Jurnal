    <?php
    $id = $_GET['idhapus'];
    $hapus = $koneksi->query("DELETE FROM tbl_archive WHERE archive_id = '$id'");

    if ($hapus == TRUE) {
        echo " <script>
        alert('Data deleted successfully')
        window.location='?page=pages/archive/view'
        </script>";
    } else {
        echo " <script>
        alert('Data failed to delete')
        window.location='?page=pages/archive/view'
        </script>";
    }
