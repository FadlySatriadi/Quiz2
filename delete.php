<?php
    include "myconnection.php";

    $id = $_GET["id"];
    $query = "DELETE FROM buku WHERE id_buku='$id'";

    if(mysqli_query($connect, $query)) {
        header('Location:homeAdmin.php');
    } else {
        echo "Data gagal dihapus" 
        mysqli_error($connect);
    }

    mysqli_close($connect);
?>