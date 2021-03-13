<?php
include '../../model/koneksi.php';


$id = $_POST['id'];
$data1 = $koneksi->query("SELECT a.title, b.first_name,b.middle_name  FROM tbl_submission a JOIN tbl_author b ON a.sub_id =  b.sub_id WHERE a.sub_id = '$id'");

$array = array();
while ($pecah = $data1->fetch_assoc()) {
    $nested = array();
    $nested['data'] = $pecah;


    $array[] = $nested;
}

// var_dump($array);

echo json_encode($array);
