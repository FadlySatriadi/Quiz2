<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect) {
        echo "Koneksi ke MySQL berhasil";
    } else {
        echo "Koneksi ke MySQL gagal";
    }

    $query = "CREATE DATABASE tokobuku";
    if(mysqli_query($connect, $query)) {
        echo "Database berhasil dibuat";
    } else {
        echo "Database gagal dibuat <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>
