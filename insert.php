<?php
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $response = array();
    $nama_guide = $_POST['nama_guide'];
    $spesialis_wisata = $_POST['spesialis_wisata'];
    $no_hp = $_POST['no_hp'];


    $insert = "INSERT INTO guide VALUE(NULL, '$nama_guide','$spesialis_wisata', '$no_hp')";

    if (mysqli_query($con, $insert)) {
        $response['value'] = 1;
        $response['message'] = "Berhasil ditambahkan";
        echo json_encode($response);
    } else {
        $response['value'] = 0;
        $response['message'] = "Gagal ditambahkan";
        echo json_encode($response);
    }
}