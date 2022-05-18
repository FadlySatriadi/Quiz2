<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect) {
        echo "Koneksi ke MySQL berhasil! <br>";
    } 
    else {
        echo "Koneksi ke MySQL gagal!". mysqli_connect_error();
    }

    $query = "INSERT into buku(id_buku, Judul, Pengarang, Penerbit) VALUES 
                ('0001', 'Mariposa', 'Luluk HF', 'Coconut Books'),
                ('0002', '12 Cerita Glen Anggara', 'Luluk HF', 'Coconut Books'),
                ('0003', 'Dear Nathan', 'Erisca Febriani', 'Melvana Media Indonesia'),
                ('0004', 'Teluk Alaska', 'Eka Aryani', 'Coconut Books')";

    if(mysqli_query($connect, $query)) {
        echo "Data baru berhasil ditambahkan!";
    } else {
        echo "Data baru gagal ditambahkan! <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>
