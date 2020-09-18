<?php
    include "koneksi.php";
    $read = mysqli_query($koneksi,"SELECT * FROM tb_latihid");
    $response = array();
    while($row = mysqli_fetch_object($read)){
        $response[] = $row;
    }

    echo json_encode($response);