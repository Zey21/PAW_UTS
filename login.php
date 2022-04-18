<?php
session_start();
include 'koneksi.php';

$user = $_POST['userlog'];
$pw = md5($_POST['passlog']);

$login = mysqli_query($koneksi,"select * from akun where user='$user' and pass='$pw'");

$cek = mysqli_num_rows($login);


if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    if($data['role']=="admin"){

        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['role'] = "admin";
        $_SESSION['unik'] = $user;

        header("location:admin.php");

    } else if($data['role']=="client"){

        $_SESSION['login'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['role'] = "client";
        $_SESSION['unik'] = $user;

        header("location:client.php");

    } else { 
        header("location:index.php");
    }
}

?>
<html>
    <body>
        <a href="logout.php">Logout</a>
    </body>
</html>
