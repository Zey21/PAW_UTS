<?php
include "koneksi.php";

$user = $_POST['user'];
$password = md5($_POST['pw']);
$role = "client";

$sql ="INSERT INTO `akun`(`user`, `pass`, `role`) VALUES ('$user','$password','$role')";

$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    header("location:signup.php");
} else {
    header("location:index.php");
}

?>