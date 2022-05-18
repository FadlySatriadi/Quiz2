<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect) {
        echo "Koneksi ke MySQL berhasil";
    } else {
        echo "Koneksi ke MySQL gagal";
    }

    $query = "CREATE TABLE buku (
        id_buku VARCHAR(10) PRIMARY KEY,
        judul VARCHAR(200) NOT NULL,
        pengarang VARCHAR(100) NOT NULL,
        penerbit VARCHAR(50),
        deskripsi TEXT)";

    if(mysqli_query($connect, $query)) {
        echo "Table berhasil dibuat";
    } else {
        echo "Table gagal dibuat <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>