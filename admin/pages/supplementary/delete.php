    <?php
    $id = $_GET['idhapus'];
    $koneksi->query("DELETE FROM tbl_file_sup WHERE id_file_sup = '$id'");
    $hapus = $koneksi->query("DELETE FROM tbl_sup WHERE id_file_sup = '$id'");

    if ($hapus == TRUE) {
        echo " <script>
        alert('Data deleted successfully')
        window.location='?page=pages/supplementary/view'
        </script>";
    } else {
        echo " <script>
        alert('Data failed to delete')
        window.location='?page=pages/supplementary/view'
        </script>";
    }
