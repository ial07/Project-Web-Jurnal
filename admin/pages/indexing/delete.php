    <?php
    $id = $_GET['idhapus'];
    $hapus = $koneksi->query("DELETE FROM tbl_index WHERE index_id = '$id'");

    if ($hapus == TRUE) {
        echo " <script>
        alert('Data deleted successfully')
        window.location='?page=pages/indexing/view'
        </script>";
    } else {
        echo " <script>
        alert('Data failed to delete')
        window.location='?page=pages/indexing/view'
        </script>";
    }
