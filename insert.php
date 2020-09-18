<?php
    include "koneksi.php";
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nomor_hp = $_POST["nomor_hp"];
    $pekerjaan = $_POST["pekerjaan"];

    $insert = mysqli_query($koneksi, "INSERT INTO tb_latihid(nama, email, nomor_hp, pekerjaan) VALUES('$nama','$email', '$nomor_hp','$pekerjaan')");

    $response = array();

    if($insert){
        $response["code"] = 1;
        $response["message"] = "Penyimpanan data berhasil di lakukan !";
    }else{
        $response["code"] = 0;
        $response["message"] = "Failed!, Data Not Inserted!";
    }

    echo json_encode($response);