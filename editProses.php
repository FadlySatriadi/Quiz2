<?php
    include "myconnection.php";

    $id = $_GET["kdbuku"];
    $judul = $_GET["judulbuku"];
    $pengarang = $_GET["nmpengarang"];
    $penerbit = $_GET["nmpenerbit"];
    $deskripsi = $_GET["deskripsibuku"];

    $query = "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', deskripsi='$deskripsi' WHERE id_buku='$id'";

    if(mysqli_query($connect, $query)) {
        header("Location:homeAdmin.php");
    } else {
        echo "Data Baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>
