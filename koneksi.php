<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "project";

    $koneksi = mysqli_connect($host,$user,$password,$dbname);
    if(!$koneksi){ ?>
        <script>
            alert("Gagal")
        </script> <?php
    }
?>