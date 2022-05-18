<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <nav>
        <div class="wrapper">
            <div class="header">
                <div class="logo">Vynz Bookstore</div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <?php
            include "myconnection.php";
            $idbk = $_GET['id'];
            $query = "SELECT * FROM buku WHERE id_buku='$idbk'";
            $result = mysqli_query($connect, $query);
        ?>
        <form action="editProses.php" method="GET">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> Kode Buku </td>
                    <td> <input type="text" name="kdbuku" value="<?php echo $row['id_buku']; ?>"> </td>
                </tr>
                <tr>
                    <td> Judul </td>
                    <td> <input type="text" name="judulbuku" value="<?php echo $row['judul']; ?>"> </td>
                </tr>
                <tr>
                    <td> Pengarang </td>
                    <td> <input type="text" name="nmpengarang" value="<?php echo $row['pengarang']; ?>"> </td>
                </tr>
                <tr>
                    <td> Penerbit </td>
                    <td> <input type="text" name="nmpenerbit" value="<?php echo $row['penerbit']; ?>"> </td>
                </tr>
                <tr>
                    <td> Deskripsi </td>
                    <td>
                        <textarea name="deskripsibuku" rows="10" cols="50"><?php echo $row['deskripsi']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="send" value="Edit"> </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </div>>
    </body>
</html>
