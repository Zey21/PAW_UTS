<html>
    <head>
        <title>Check Order</title>
        <?php
            session_start();

            if($_SESSION['role']!='admin' || empty($_SESSION['login'])){
                header("location:index.php");
            }
        ?>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <?php
        include 'koneksi.php';
        ?>
    </head>
    <body style="background:grey;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="client.php">Hotel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="admin_check.php">Check Order</a></li>
                                <li><a class="dropdown-item" href="www.youtube.com">Youtube</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <span class="navbar-text">
                                <a href="logout.php">Logout</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div>
            <div class="d-flex justify-content-between" style="padding:100px;">
                <div class="card" style="width: 22rem;" >
                    <div class="card-body" >
                        <h5 class="card-title">Hi Admin !</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Cek Pesanan</h6>
                        <p class="card-text">Pada laman ini akan menampilkan daftar pemesanan yang telah dilakukan oleh customer.</p>
                        <?php
                            echo date("l\, jS \of F Y\, h:i:s A") . "<br>";
                        ?>
                        <a href="admin_check.php" class="card-link">Check Order</a>
                        <a href="www.youtube.com" class="card-link">Youtube</a>
                    </div>
                </div>
                <div class="card" style="width: 80rem;" >
                    <div class="card-body" >
                    <table class="table table-dark table-striped">
                      <tr>
                          <td>Name</td>
                          <td>Room</td>
                          <td>Date in</td>
                          <td>Date out</td>
                          <td>Action</td>
                      </tr>
                      <form action="delete.php" method="get">
                      <?php
                        $host = "localhost";
                        $user = "root";
                        $password = "";
                        $dbname = "project";
        
                        $koneksi = mysqli_connect($host,$user,$password,$dbname);
                        $sql = "SELECT * FROM orderan";
                        $hasil = mysqli_query($koneksi,$sql);
                
                        while($kolom = mysqli_fetch_array($hasil)){
                            ?>
                            <tr>
                                <td><?=$kolom['nama']?></td>
                                <td><?=$kolom['room']?></td>
                                <td><?=$kolom['masuk']?></td>
                                <td><?=$kolom['keluar']?></td>
                                <td><a href="admin_edit.php?nm=<?=$kolom['nama'];?>&&rm=<?=$kolom['room'];?>&&di=<?=$kolom['masuk'];?>&&do=<?=$kolom['keluar'];?>">edit</a> || <a href="delete.php?ruang=<?=$kolom['room'];?>&&kode=<?=$kolom['unik'];?>">delete</a></td>
                            </tr>
                            <?php
                        }
                    ?>
                    </form>  
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>