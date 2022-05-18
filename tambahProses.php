<?php

        $kdbuku = $_POST["kdbuku"];
        $judul = $_POST["judulbuku"];
        $pengarang = $_POST["nmpengarang"];
        $penerbit = $_POST["nmpenerbit"];
        $deskripsi = $_POST["deskripsibuku"];
        
        include "myconnection.php";
        $query = "INSERT INTO buku VALUES 
        ('$kdbuku','$judul','$pengarang','$penerbit','$deskripsi')";

        if(mysqli_query($connect, $query)) {
            header("Location:homeAdmin.php");
        } else {
            echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
        }
?>