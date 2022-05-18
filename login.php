<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
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
            if(isset($_GET["error"])) {
                $error = $_GET["error"];
            } else {
                $error = "";
            }

            $massage = "";
            if($error == "gagal") {
                $massage = "Gagal Login, silahkan coba kembali";
            }
        ?>

        <p style="color: red;"><?php echo $massage;?></p>
        <form action="prosesLogin.php" method="POST">
            <table>
                <tr>
                    <td> Username </td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td> Password</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
        <a href="halamanHome.php"> <button> Kembali ke Halaman</button> </a>
    </body>
</html>