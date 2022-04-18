<?php
include "koneksi.php";

$unik = $_GET['kode'];
$ruang = $_GET['ruang'];

$sql = "DELETE FROM `orderan` WHERE unik = '$unik' AND room ='$ruang'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo"Gagal";
    //header("location:admin_check.php");
} else {
    if($_SESSION['role'] == 'admin'){
        echo"Berhasil";
        header("location:admin_check.php");
    } else {
        echo"Berhasil";
        header("location:client_info.php");
    }
}
?>