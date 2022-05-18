<!DOCTYPE html>
<html>
<head>
    <title>Detail</title>
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
        <h1>DETAIL BUKU</h1>
        <table>
            <?php
                include "myconnection.php";

                $id = $_GET["id"];
                $query = "SELECT * FROM buku WHERE id_buku='$id'";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> Kode Buku </td>
                <td> <?php echo $row["id_buku"]; ?> </td>
            </tr>
            <tr>
                <td> Judul </td>
                <td> <?php echo $row["judul"]; ?> </td>
            </tr>
            <tr>
                <td> Pengarang</td>
                <td> <?php echo $row["pengarang"]; ?> </td>
            </tr>
            <tr>
                <td> Penerbit </td>
                <td> <?php echo $row["penerbit"]; ?> </td>
            </tr>
            <tr>
                <td> Deskripsi </td>
                <td> <?php echo $row["deskripsi"]; ?> </td>
            </tr>
        </table>
        <?php
                }
        ?>
        <a href="halamanHome.php"> <button>Kembali ke Home</button></a> 
    </div>
</body>
</html>
