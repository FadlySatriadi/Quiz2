<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_num_rows($result);

    if($row>0) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location:homeAdmin.php");
    } else {
        header("Location:login.php?error=gagal");
    }
?>
