<?php
    $id = $_GET['idhapus'];
    $hapus = $koneksi->query("DELETE FROM tbl_file_sup WHERE id_file_sup = '$id'");

    if ($hapus == TRUE) {
        echo " <script>
        alert('Data deleted successfully')
        window.location='?page=user/sub4'
        </script>";
    } else {
        echo " <script>
        alert('Data failed to delete')
        window.location='?page=user/sub4'
        </script>";
    }
