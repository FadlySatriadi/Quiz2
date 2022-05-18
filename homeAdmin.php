<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="header">
                <div class="logo">Vynz Bookstore</div>
                <div class="menu">
                    <ul>
                        <li><a href="homeAdmin.php">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">
    <?php
        if(isset($_SESSION["username"])) {
            echo "<h2> Selamat Datang ". $_SESSION["username"]. "</h2> <br>";
        } else {
            echo "Anda belum bisa Login <br>";
        }
    ?>
    <table>
        <a href="tambah.php"> <button>Tambah Data Buku</button> </a>
        <tr>
            <th> Kode Buku </th>
            <th> Judul </th>
            <th> Pengarang </th>
            <th> Aksi </th>
        </tr>
        <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
        <tr>
            <td> <?php echo $row["id_buku"]; ?> </td>
            <td> <?php echo $row["judul"]; ?> </td>
            <td> <?php echo $row["pengarang"]; ?> </td>
            <td> 
                <a href="detail.php?id=<?php echo $row["id_buku"]; ?>"> 
                <button>Detail</button> </a> 
                <a href="edit.php?id=<?php echo $row["id_buku"]; ?>">
                <button>Edit</button> </a>
                <a href="delete.php?id=<?php echo $row["id_buku"]; ?>">
                <button>Delete</button> </a>
            </td>
        </tr>
        <?php
                    }
                }
                ?> 
    </table>
    </div>
    <div id="copyright">
        &copy; 2020. <b>Vynz</b> All Right Reserved
    </div>
</body>
</html>