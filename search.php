<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="header">
                <div class="logo">Vynz Bookstore</div>
                <div class="menu">
                    <ul>
                        <li><a href="halamanHome.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
    <h2>HASIL PENCARIAN DATA BUKU</h1>
    <table>
        <tr>
            <th> Kode Buku </th>
            <th> Judul </th>
            <th> Pengarang </th>
            <th> Aksi </th>
        </tr>
        <?php
            $judul = $_GET["carijudul"];
            include "myconnection.php";

            $query = "SELECT id_buku, judul, pengarang FROM buku WHERE judul LIKE '%$judul%'";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td> <?php echo $row["id_buku"]; ?> </td>
            <td> <?php echo $row["judul"]; ?> </td>
            <td> <?php echo $row["pengarang"]; ?> </td>
            <td> 
                <a href="detail.php?id=<?php echo $row["id_buku"]; ?>"> 
                <button>Detail</button> </a> 
            </td>
        </tr>
        <?php
                }
            } else {
                echo "0 results";
            }
        ?>
    </table>
    <br>
    <a href="halamanHome.php"> <button> Kembali ke Halaman</button> </a>
    </div>
</body>
</html>
