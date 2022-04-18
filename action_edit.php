<?php
include "koneksi.php";

$nama = $_POST['nama'];
$ruang = $_POST['ruang'];
$masuk = strval($_POST['masuk']);
$keluar = strval($_POST['keluar']);
$key1 = $_GET['nm'];
$key2 = $_GET['rm'];
$inmasuk = "";
$inkeluar ="";


if(substr($masuk,5,2) == "01"){
    $inmasuk = substr($masuk,8,2)." Januari ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "02"){
    $inmasuk = substr($masuk,8,2)." Februari ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "03"){
    $inmasuk = substr($masuk,8,2)." Maret ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "04"){
    $inmasuk = substr($masuk,8,2)." April ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "05"){
    $inmasuk = substr($masuk,8,2)." Mei ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "06"){
    $inmasuk = substr($masuk,8,2)." Juni ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "07"){
    $inmasuk = substr($masuk,8,2)." Juli ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "08"){
    $inmasuk = substr($masuk,8,2)." Agustus ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "09"){
    $inmasuk = substr($masuk,8,2)." September ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "10"){
    $inmasuk = substr($masuk,8,2)." Oktober ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "11"){
    $inmasuk = substr($masuk,8,2)." November ".substr($masuk,0,4);
} elseif(substr($masuk,5,2) == "12"){
    $inmasuk = substr($masuk,8,2)." Desember ".substr($masuk,0,4);
}



if(substr($keluar,5,2) == "01"){
    $inkeluar = substr($keluar,8,2)." Januari ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "02"){
    $inkeluar = substr($keluar,8,2)." Februari ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "03"){
    $inkeluar = substr($keluar,8,2)." Maret ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "04"){
    $inkeluar = substr($keluar,8,2)." April ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "05"){
    $inkeluar = substr($keluar,8,2)." Mei ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "06"){
    $inkeluar = substr($keluar,8,2)." Juni ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "07"){
    $inkeluar = substr($keluar,8,2)." Juli ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "08"){
    $inkeluar = substr($keluar,8,2)." Agustus ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "09"){
    $inkeluar = substr($keluar,8,2)." September ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "10"){
    $inkeluar = substr($keluar,8,2)." Oktober ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "11"){
    $inkeluar = substr($keluar,8,2)." November ".substr($keluar,0,4);
} elseif(substr($keluar,5,2) == "12"){
    $inkeluar = substr($keluar,8,2)." Desember ".substr($keluar,0,4);
}

$sql ="UPDATE `orderan` SET `nama`='$nama',`room`='$ruang',`masuk`='$inmasuk',`keluar`='$inkeluar' WHERE nama = '$key1' AND room = '$key2'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    header("location:admin_edit.php");
} else {
    header("location:admin.php");
}
?>