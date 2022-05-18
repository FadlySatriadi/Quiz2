<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
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
        <form enctype="multipart/form-data" action="tambahProses.php" method="POST">
            <table>
                <tr>
                    <td> Kode Buku </td>
                    <td> <input type="text" name="kdbuku"> </td>
                </tr>
                <tr>
                    <td> Judul </td>
                    <td> <input type="text" name="judulbuku"> </td>
                </tr>
                <tr>
                    <td> Pengarang </td>
                    <td> <input type="text" name="nmpengarang"> </td>
                </tr>
                <tr>
                    <td> Penerbit </td>
                    <td> <input type="text" name="nmpenerbit"> </td>
                </tr>
                <tr>
                    <td> Deskripsi </td>
                    <td>
                        <textarea name="deskripsibuku" rows="10" cols="50"></textarea>
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="send" value="Tambah"> </td>
                </tr>
            </table>
        </form>
    </div>>
    </body>
</html>